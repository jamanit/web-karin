@extends('layouts.app')

@section('content')
    <div>
        <div class="from-{{ $primary_color }}-700 to-{{ $primary_color }}-600 relative bg-gradient-to-br py-[2.3rem]"></div>

        <section class="relative">
            {{-- PREMIUM APPLICATION --}}
            <div id="premium_applications" class="relative container scroll-mt-4 bg-gray-100 pt-16 pb-8 md:pt-24 md:pb-12 dark:bg-slate-900">
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
                                        <p class="mt-2 text-lg font-semibold">Rp. {{ number_format($premium_application->price, 0, ',', '.') }}</p>
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

                {{ $premium_applications->links('vendor.pagination.custom') }}
            </div>
        </section>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
