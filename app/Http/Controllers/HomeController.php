<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\PremiumApplication;
use Illuminate\Http\Request;
use App\Models\Inbox;
use Illuminate\Support\Facades\Mail;
use App\Mail\InboxMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use App\Models\Message;

class HomeController extends Controller
{
    public function index()
    {
        $premium_applications = PremiumApplication::orderBy('order', 'desc')->limit(8)->get();
        $testimonials = Testimonial::where('status', true)->orderBy('id', 'desc')->get();

        return view('index', compact('premium_applications', 'testimonials'));
    }

    public function premium_application()
    {
        $premium_applications = PremiumApplication::orderBy('order', 'desc')->paginate(8); 

        return view('premium-application.index', compact('premium_applications'));
    }

    public function premium_application_show(string $id)
    {
        $premium_application = PremiumApplication::findOrFail($id);  
        $premium_applications = PremiumApplication::orderBy('order', 'desc')->limit(4)->get();  
 
        return view('premium-application.show', compact('premium_application', 'premium_applications'));
    }

    public function inbox_store(Request $request)
    {
        $ip = $request->ip();
        $cacheKey = 'inbox_count_' . $ip;

        if (Cache::has($cacheKey)) {
            $count = Cache::get($cacheKey);
            if ($count >= 5) {
                return response()->json(
                    [
                        'status' => 'error',
                        'message' => 'You have reached the message limit, please try again later.',
                    ],
                    429,
                );
            }
        } else {
            $count = 0;
        }

        $validator = Validator::make(
            $request->all(),
            [
                'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]*$/'],
                'email' => 'required|email|max:255',
                'message' => 'required|string|max:3000',
            ],
            [
                'name.regex' => 'The name can only contain letters and spaces.',
            ],
        );

        if ($validator->fails()) {
            return response()->json(
                [
                    'status' => 'error',
                    'errors' => $validator->errors(),
                ],
                422,
            );
        }

        $data = $validator->validated();
        $data['message'] = strip_tags($request->input('message'));
        $inbox = Inbox::create($data);

        $siteConifgs = App::make('siteConfigs');
        $email_recipient = $siteConifgs['email']->value;
        if ($email_recipient) {
            Mail::to([$email_recipient])->send(new InboxMail($inbox));
        }

        Cache::put($cacheKey, $count + 1, now()->addMinutes(60));

        return response()->json([
            'status' => 'success',
            'message' => 'Message sent successfully!',
        ]);
    }
}
