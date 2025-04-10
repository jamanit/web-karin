@extends("layouts.app")

@section("content")
    <div>
        <section class="from-{{ $primary_color }}-700 to-{{ $primary_color }}-600 relative min-h-screen bg-gradient-to-br py-20 lg:py-24">
            @if ($siteConfigs["banner"]->file)
                <div class="absolute inset-0 bg-[url('{{ Storage::url($siteConfigs["banner"]->file) }}')] bg-cover bg-center opacity-50"></div>
            @else
                <div class="absolute inset-0 bg-[url('{{ asset("/") }}assets/hoxia-v1/images/bg/shape-1.png')] bg-cover bg-center opacity-50"></div>
            @endif
            <div class="relative container">
                <div class="mt-10 grid grid-cols-1 items-center gap-[30px] md:grid-cols-12">
                    <div class="md:col-span-8">
                        <div class="me-6">
                            <h4 class="text-3xl leading-normal font-semibold text-white lg:text-5xl lg:leading-normal">
                                {!! $siteConfigs["title_banner"]->value ?? "" !!}
                            </h4>
                            <div class="mt-5 max-w-xl text-lg text-white/70">
                                {!! $siteConfigs["caption_banner"]->value ?? "" !!}
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-4">
                        @if ($siteConfigs["hero_banner"]->file)
                            <img loading="lazy" src="{{ Storage::url($siteConfigs["hero_banner"]->file) }}" alt="" />
                        @endif
                    </div>
                </div>
            </div>

            <div class="absolute bottom-4 flex w-full justify-center">
                <a href="#premium_applications" class="animate-bounce text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
            </div>
        </section>

        <section class="relative">
            {{-- PREMIUM APPLICATION --}}
            <div id="premium_applications" class="relative container scroll-mt-4 pt-16 pb-8 md:pt-24 md:pb-12 dark:bg-slate-900">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 text-2xl leading-normal font-medium md:text-3xl md:leading-normal">Premium Applications</h3>
                    <p class="mx-auto max-w-xl text-slate-400">Rasakan pengalaman dengan aplikasi premium yang dirancang untuk memberikan performa terbaik dan fitur eksklusif.</p>
                </div>

                @if ($premium_applications->isEmpty())
                    <p class="mx-auto max-w-xl text-center text-slate-400">Data is not yet available.</p>
                @else
                    <div class="grid grid-cols-2 gap-[30px] md:grid-cols-3 lg:grid-cols-4">
                        @foreach ($premium_applications as $premium_application)
                            <div class="group relative overflow-hidden rounded-md shadow transition duration-500 hover:shadow-md dark:bg-slate-800 dark:shadow-gray-800">
                                @if ($premium_application->discount)
                                    <div class="absolute top-2 right-0 rounded-l-lg bg-red-500 px-3 py-1 text-xs font-semibold text-white">{{ $premium_application->discount }}</div>
                                @endif

                                <div class="flex items-center justify-center bg-slate-200 dark:bg-slate-800">
                                    @if ($premium_application->image)
                                        <img loading="lazy" src="{{ Storage::url($premium_application->image) }}" alt="Image" class="h-[200px] object-cover" />
                                    @else
                                        <img loading="lazy" src="{{ asset("assets/images/default-image.jpg") }}" alt="Image" class="h-[200px] object-cover" />
                                    @endif
                                </div>
                                <div class="p-6">
                                    <h5>
                                        <a href="{{ route("premium_applications.show", $premium_application->id) }}" target="_blank" class="title hover:text-{{ $primary_color }}-500 text-lg font-medium duration-500">
                                            {{ $premium_application->title }}
                                        </a>
                                    </h5>

                                    @if ($premium_application->price)
                                        <p class="mt-2 text-lg font-semibold">Rp. {{ number_format($premium_application->price, 0, ",", ".") }}</p>
                                    @endif

                                    <div class="mt-4">
                                        <a
                                            href="{{ route("premium_applications.show", $premium_application->id) }}"
                                            target="_blank"
                                            class="text-{{ $primary_color }}-500 hover:text-{{ $primary_color }}-500 after:bg-{{ $primary_color }}-500 relative inline-block border-none text-center align-middle text-base tracking-wide duration-500 ease-in-out after:absolute after:start-0 after:end-0 after:bottom-0 after:h-px after:w-0 after:transition-all after:duration-500 after:content-[''] hover:after:end-auto hover:after:w-full"
                                        >
                                            View detail
                                            <i class="uil uil-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="itens-center mt-6 flex justify-center">
                        <a
                            href="{{ route("premium_applications.index") }}"
                            class="bg-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-600 border-{{ $primary_color }}-500 hover:border-{{ $primary_color }}-600 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-block rounded-md border px-8 py-2.5 text-center align-middle text-[16px] font-medium tracking-wide text-white transition-all duration-500 focus:ring-[3px] focus:outline-none"
                        >
                            View all premium applications
                        </a>
                    </div>
                @endif
            </div>

            {{-- TESTIMONIAL --}}
            <div id="testimonials" class="relative container scroll-mt-4 bg-gray-100 pt-16 pb-8 md:pt-24 md:pb-12 dark:bg-slate-900">
                <div class="absolute inset-0 bg-[url('{{ asset("/") }}assets/hoxia-v1/images/map.png')] bg-cover bg-center bg-no-repeat opacity-25 dark:opacity-50"></div>
                <div class="relative z-1 grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 text-2xl leading-normal font-medium md:text-3xl md:leading-normal">Testimonials</h3>
                    <p class="mx-auto max-w-xl text-slate-400">Cerita dari mereka yang telah menggunakan layanan kami.</p>
                </div>

                <div class="relative container">
                    <div class="relative grid grid-cols-1">
                        <div class="tiny-three-item">
                            @foreach ($testimonials as $testimonial)
                                <div class="tiny-slide">
                                    <div class="m-2 rounded-md bg-white p-6 shadow dark:bg-slate-800 dark:shadow-gray-800">
                                        <div class="flex items-center border-b border-gray-100 pb-6 dark:border-gray-800">
                                            {{-- <img loading="lazy" src="{{ asset('/') }}assets/hoxia-v1/images/client/01.jpg" class="h-16 w-16 rounded-full shadow dark:shadow-gray-800" alt=""> --}}
                                            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-gray-200 shadow dark:shadow-gray-800">
                                                <i class="fas fa-user text-3xl text-gray-400"></i>
                                            </div>
                                            <div class="ps-4">
                                                <a href="" class="h6 hover:text-{{ $primary_color }}-500 text-lg duration-500 ease-in-out">
                                                    {{ $testimonial->name }}
                                                </a>
                                                <p class="text-xs text-slate-400">
                                                    {{ $testimonial->created_at->diffForHumans() }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="mt-6">
                                            <p class="text-slate-400">
                                                {!! $testimonial->text !!}
                                            </p>
                                            <ul class="mt-2 mb-0 list-none text-amber-400">
                                                @for ($i = 0; $i < $testimonial->star; $i++)
                                                    <li class="inline">
                                                        <i class="mdi mdi-star"></i>
                                                    </li>
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- CONTACT US --}}
            @include("contact-us")

            {{-- ABOUT US --}}
            <div id="about_us" class="relative container scroll-mt-4 bg-gray-100 pt-16 pb-8 md:pt-24 md:pb-12 dark:bg-slate-900">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="text-2xl leading-normal font-medium md:text-3xl md:leading-normal">About Us</h3>
                </div>

                <div class="mx-auto text-slate-400">
                    {!! $siteConfigs["about_us"]->value ?? "" !!}
                </div>
            </div>
        </section>
    </div>
@endsection

@push("styles")
    
@endpush

@push("scripts")
    
@endpush
