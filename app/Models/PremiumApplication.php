<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PremiumApplication extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected static function booted()
    {
        static::creating(function ($premiumApplication) {
            if (!$premiumApplication->order) {
                $premiumApplication->order = PremiumApplication::max('order') + 1;
            }
        });

        static::deleting(function ($premiumApplication) {
            // delete files when deleted
            $files = ['image'];
            foreach ($files as $file) {
                if ($premiumApplication->$file) {
                    Storage::disk('public')->delete($premiumApplication->$file);
                }
            }
        });
    }
}
