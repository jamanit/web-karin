@extends('layouts.app')

@section('content')
    <div>
        <div class="from-{{ $primary_color }}-700 to-{{ $primary_color }}-600 relative bg-gradient-to-br py-[2.3rem]"></div>

        <section class="relative">
            {{-- PREMIUM APPLICATION --}}
            <div id="premium_applications" class="relative container scroll-mt-4 bg-gray-100 pt-16 pb-8 md:pt-24 md:pb-12 dark:bg-slate-900">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="text-2xl leading-normal font-medium md:text-3xl md:leading-normal">Detail Premium Application</h3>
                    <ul class="tracking-[0.5px] mb-0 inline-block">
                        <li class="inline-block text-[15px] font-medium duration-500 ease-in-out hover:text-sky-500"><a href="{{ url('/') }}">Home</a></li>
                        <li class="inline-block text-[15px] ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                        <li class="inline-block text-[15px] font-medium duration-500 ease-in-out hover:text-sky-500"><a href="{{ route('premium_applications.index') }}">Premium Applications</a></li>
                        <li class="inline-block text-[15px] ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                        <li class="inline-block text-[15px] font-medium duration-500 ease-in-out text-sky-500">Detail</li>
                    </ul>
                </div>

                <div class="lg:flex gap-[30px] lg:gap-[30px]">
                    <div class="w-full md:w-1/2 mb-[30px]">
                        <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            @if ($premium_application->discount)
                                <div class="absolute top-2 right-0 rounded-l-lg bg-red-500 px-4 py-2 text-base font-semibold text-white">{{ $premium_application->discount }}</div>
                            @endif

                            <div class="flex items-center justify-center bg-slate-200 dark:bg-slate-800">
                                @if ($premium_application->image)
                                    <img loading="lazy" src="{{ Storage::url($premium_application->image) }}" alt="Image" class="h-[350px] object-cover" />
                                @else
                                    <img loading="lazy" src="{{ asset('assets/images/default-image.jpg') }}" alt="Image" class="h-[350px] object-cover" />
                                @endif
                            </div>

                            <div class="p-6">
                                <h5 class="title text-xl md:text-2xl font-semibold duration-500">
                                    {{ $premium_application->title }}
                                </h5>

                                @if ($premium_application->price)
                                    <p class="text-xl font-semibold">Rp. {{ number_format($premium_application->price, 0, ',', '.') }}</p>
                                @endif

                                @if ($premium_application->description)
                                    <div class="mt-4 text-slate-400">{!! $premium_application->description !!}</div>
                                @endif
                            </div>

                            <div class="p-6 lg:flex lg:items-center lg:justify-between w-full">
                                <p class="text-lg font-semibold">Pesan sekarang:
                                <p>
                                <ul class="list-none">
                                    @if ($siteConfigs['whatsapp_number']->value)
                                        <li class="inline">
                                            <a href="https://wa.me/{{ $siteConfigs['whatsapp_number']->value }}" target="_blank"
                                                class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-12 w-12 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-2xl tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none">
                                                <i class="uil uil-whatsapp align-middle" title="{{ $siteConfigs['whatsapp_number']->name }}"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($siteConfigs['phone_number']->value)
                                        <li class="inline">
                                            <a href="tel:{{ $siteConfigs['phone_number']->value }}" target="_blank"
                                                class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-12 w-12 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-2xl tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none">
                                                <i class="uil uil-phone align-middle" title="{{ $siteConfigs['phone_number']->name }}"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($siteConfigs['email']->value)
                                        <li class="inline">
                                            <a href="mailto:{{ $siteConfigs['email']->value }}" target="_blank"
                                                class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-12 w-12 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-2xl tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none">
                                                <i class="uil uil-envelope align-middle" title="{{ $siteConfigs['email']->name }}"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($siteConfigs['instagram_url']->value)
                                        <li class="inline">
                                            <a href="{{ $siteConfigs['instagram_url']->value }}" target="_blank"
                                                class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-12 w-12 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-2xl tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none">
                                                <i class="uil uil-instagram align-middle" title="{{ $siteConfigs['instagram_url']->name }}"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($siteConfigs['facebook_url']->value)
                                        <li class="inline">
                                            <a href="{{ $siteConfigs['facebook_url']->value }}" target="_blank"
                                                class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-12 w-12 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-2xl tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none">
                                                <i class="uil uil-facebook-f align-middle" title="{{ $siteConfigs['facebook_url']->name }}"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($siteConfigs['tiktok_url']->value)
                                        <li class="inline">
                                            <a href="{{ $siteConfigs['tiktok_url']->value }}" target="_blank"
                                                class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-12 w-12 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-2xl tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none">
                                                <i class="fa-brands fa-tiktok align-middle text-sm" title="{{ $siteConfigs['tiktok_url']->name }}"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @if ($siteConfigs['map_url']->value)
                                        <li class="inline">
                                            <a href="{{ $siteConfigs['map_url']->value }}" target="_blank"
                                                class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-12 w-12 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-2xl tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none">
                                                <i class="uil uil-map-marker align-middle" title="{{ $siteConfigs['map_url']->name }}"></i>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2">
                        @if ($premium_applications->isEmpty())
                            <p class="mx-auto max-w-xl text-center text-slate-400">Data is not yet available.</p>
                        @else
                            <div class="grid grid-cols-2 gap-[30px] md:grid-cols-2">
                                @foreach ($premium_applications as $premium_application)
                                    <div class="group relative overflow-hidden rounded-md shadow transition duration-500 hover:shadow-md dark:bg-slate-800 dark:shadow-gray-800">
                                        @if ($premium_application->discount)
                                            <div class="absolute top-2 right-0 rounded-l-lg bg-red-500 px-3 py-1 text-xs font-semibold text-white">{{ $premium_application->discount }}</div>
                                        @endif

                                        <div class="flex items-center justify-center bg-slate-200 dark:bg-slate-800">
                                            @if ($premium_application->image)
                                                <img loading="lazy" src="{{ Storage::url($premium_application->image) }}" alt="Image" class="h-[200px] object-cover" />
                                            @else
                                                <img loading="lazy" src="{{ asset('assets/images/default-image.jpg') }}" alt="Image" class="h-[200px] object-cover" />
                                            @endif
                                        </div>
                                        <div class="p-6">
                                            <h5>
                                                <a href="{{ route('premium_applications.show', $premium_application->id) }}" class="title hover:text-{{ $primary_color }}-500 text-base md:text-lg font-medium duration-500">
                                                    {{ $premium_application->title }}
                                                </a>
                                            </h5>

                                            @if ($premium_application->price)
                                                <p class="text-lg font-semibold">Rp. {{ number_format($premium_application->price, 0, ',', '.') }}</p>
                                            @endif

                                            <div class="mt-4">
                                                <a href="{{ route('premium_applications.show', $premium_application->id) }}"
                                                    class="text-{{ $primary_color }}-500 hover:text-{{ $primary_color }}-500 after:bg-{{ $primary_color }}-500 relative inline-block border-none text-center align-middle text-base tracking-wide duration-500 ease-in-out after:absolute after:start-0 after:end-0 after:bottom-0 after:h-px after:w-0 after:transition-all after:duration-500 after:content-[''] hover:after:end-auto hover:after:w-full">
                                                    View detail
                                                    <i class="uil uil-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
