@extends("templates.wedding-floral.layouts.app")

@push("wedding_couple_name", "Wanita & Pria")

@section("content")
    @php
        $invitation = $invitation ?? null;
    @endphp

    <div class="bg-primary-golden-brown-400 flex items-center justify-end">
        <!-- bottom footer -->
        @include("templates.wedding-floral.layouts.bottom-footer", ["color" => "primary-golden-brown"])

        <!-- main background -->
        <div class="fixed right-0 bottom-0 z-0 h-screen w-full lg:w-1/3">
            <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/0.png" class="inset-0 h-full w-full object-cover" alt="Cover Image" />
        </div>

        <!-- main content -->
        <div id="content" class="relative z-10 h-screen overflow-y-hidden lg:w-1/3">
            <!-- cover section -->
            <section id="cover-section" class="relative z-10 h-screen w-full overflow-hidden">
                <div class="absolute flex h-full w-full items-center justify-start">
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/41.png" class="absolute inset-x-0 top-0 z-10 w-full" data-aos="fade-down" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/42.png" class="absolute inset-x-0 top-0 z-20 w-full" data-aos="fade-right" />

                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/43.png" class="absolute inset-x-0 bottom-0 z-10 w-full" data-aos="fade-up" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/44.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-left" />
                </div>

                <div class="relative z-30 flex h-full w-full flex-col items-center justify-center">
                    <p class="text-primary-golden-brown-400 mb-4 text-base font-semibold" data-aos="fade-down">
                        {{ $invitation->template->invitation_type ?? "UNDANGAN PERNIKAHAN" }}
                    </p>

                    <div class="mb-4 flex flex-col items-center justify-center">
                        <div class="absolute z-40 flex flex-col text-center" data-aos="zoom-in">
                            <p class="font-sacramento text-primary-golden-brown-400 text-4xl font-semibold">
                                {{ $invitation->weddingCouple->bride_nickname ?? "Wanita" }}
                            </p>
                            <p class="font-sacramento text-primary-golden-brown-400 text-4xl font-semibold">&</p>
                            <p class="font-sacramento text-primary-golden-brown-400 text-4xl font-semibold">
                                {{ $invitation->weddingCouple->groom_nickname ?? "Pria" }}
                            </p>
                        </div>
                        <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/11.png" class="z-30 h-full w-full" data-aos="zoom-in" />
                    </div>

                    <div data-aos="fade-up" data-aos-offset="50">
                        <div class="border-primary-golden-brown-500 rounded-lg border-2 bg-white/75 p-2 text-center">
                            <p class="text-base text-gray-600">Kepada Yth,</p>
                            <p class="text-base text-gray-600">Bapak/Ibu/Saudara/i</p>
                            <p class="text-base text-gray-600">
                                {{ $guest_name ?? "Kamu dan Partner" }}
                            </p>
                        </div>

                        <button onclick="openInvitation()" class="bg-primary-golden-brown-500 hover:bg-primary-golden-brown-600 mx-auto mt-6 cursor-pointer rounded-full px-4 py-2 text-base text-white">
                            <i class="fas fa-envelope"></i>
                            BUKA UNDANGAN
                        </button>
                    </div>
                </div>
            </section>

            <!-- quote section -->
            <section id="quote-section" class="relative z-10 min-h-screen w-full overflow-hidden">
                <div class="absolute flex h-full w-full items-center justify-start">
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/41.png" class="absolute inset-x-0 top-0 z-10 w-full" data-aos="fade-down" />

                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/42.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-right" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/43.png" class="absolute inset-x-0 bottom-0 z-10 w-full" data-aos="fade-up" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/44.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-left" />
                </div>

                <div class="relative z-30 flex min-h-screen w-full flex-col items-center justify-center px-4 py-8">
                    <p class="font-sacramento text-primary-golden-brown-400 mt-6 mb-4 px-2 text-center text-4xl font-semibold" data-aos="fade-right">Quote</p>
                    @if ($invitation)
                        @if (! $invitation->quote)
                            <p class="rounded-lg bg-slate-500 px-4 py-2 text-white">Belum ada data.</p>
                        @else
                            <div class="px-2">
                                <div class="text-primary-golden-brown-400 mb-4 text-justify text-base" data-aos="fade-right">
                                    {!! $invitation->quote->text !!}
                                </div>
                            </div>
                        @endif
                    @else
                        <div class="px-2">
                            <div class="text-primary-golden-brown-400 mb-4 text-justify text-base" data-aos="fade-right">
                                <p>"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."</p>
                                <p>(QS Ar-Rum 21)</p>
                            </div>
                        </div>
                    @endif
                </div>
            </section>

            <!-- wedding couple section -->
            <section id="wedding-couple-section" class="relative z-10 min-h-screen w-full overflow-hidden">
                <div class="absolute flex h-full w-full items-center justify-start">
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/41.png" class="absolute inset-x-0 top-0 z-10 w-full" data-aos="fade-down" />

                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/42.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-right" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/43.png" class="absolute inset-x-0 bottom-0 z-10 w-full" data-aos="fade-up" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/44.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-left" />
                </div>

                <div class="relative z-30 flex min-h-screen w-full flex-col items-center justify-center px-4 py-8">
                    <p class="font-sacramento text-primary-golden-brown-400 mt-6 mb-4 px-2 text-center text-4xl font-semibold" data-aos="fade-down">Wedding Couple</p>

                    @if ($invitation)
                        @if (! $invitation->weddingCouple)
                            <p class="rounded-lg bg-slate-500 px-4 py-2 text-white">Belum ada data.</p>
                        @else
                            <div class="px-2">
                                <div class="mb-4 text-center" data-aos="fade-down">
                                    <p class="font-sacramento text-2xl font-semibold text-gray-600">
                                        {{ $invitation->weddingCouple->opening_greeting }}
                                    </p>
                                    <div class="text-base text-gray-600">
                                        {!! $invitation->weddingCouple->text_greeting !!}
                                    </div>
                                </div>

                                <div class="mb-4 flex items-center justify-start space-x-4" data-aos="fade-right">
                                    <img loading="lazy" src="{{ Storage::url($invitation->weddingCouple->bride_photo) }}" class="border-primary-golden-brown-400 mb-2 h-36 w-28 rounded-t-[30%] rounded-b-[30%] border-4 object-cover" />
                                    <div class="text-left">
                                        <p class="font-sacramento text-primary-golden-brown-400 text-4xl font-semibold">
                                            {{ $invitation->weddingCouple->bride_nickname }}
                                        </p>
                                        <p class="text-base font-semibold text-gray-600">
                                            {{ $invitation->weddingCouple->bride_full_name }}
                                        </p>
                                        <p class="text-base text-gray-600">
                                            Putri ke
                                            {{ $invitation->weddingCouple->bride_child_number }}
                                            dari
                                        </p>
                                        <p class="text-base font-semibold text-gray-600">
                                            {{ $invitation->weddingCouple->bride_father_name }}
                                            &
                                            {{ $invitation->weddingCouple->bride_mother_name }}
                                        </p>
                                    </div>
                                </div>

                                <div data-aos="fade-left">
                                    <div class="mb-4 flex justify-center">
                                        <p class="font-sacramento text-primary-golden-brown-400 text-4xl font-semibold">&</p>
                                    </div>
                                    <div class="mb-4 flex items-center justify-end space-x-4">
                                        <div class="text-right">
                                            <p class="font-sacramento text-primary-golden-brown-400 text-4xl font-semibold">
                                                {{ $invitation->weddingCouple->groom_nickname }}
                                            </p>
                                            <p class="text-base font-semibold text-gray-600">
                                                {{ $invitation->weddingCouple->groom_full_name }}
                                            </p>
                                            <p class="text-base text-gray-600">
                                                Putra ke
                                                {{ $invitation->weddingCouple->groom_child_number }}
                                                dari
                                            </p>
                                            <p class="text-base font-semibold text-gray-600">
                                                {{ $invitation->weddingCouple->groom_father_name }}
                                                &
                                                {{ $invitation->weddingCouple->groom_mother_name }}
                                            </p>
                                        </div>
                                        <img loading="lazy" src="{{ Storage::url($invitation->weddingCouple->groom_photo) }}" class="border-primary-golden-brown-400 mb-2 h-36 w-28 rounded-t-[30%] rounded-b-[30%] border-4 object-cover" />
                                    </div>
                                </div>
                            </div>
                        @endif
                    @else
                        <div class="px-2">
                            <div class="mb-4 text-center" data-aos="fade-down">
                                <p class="font-sacramento text-2xl font-semibold text-gray-600">Assalamu'alaikum Warahmatullahi Wabarakatuh</p>
                                <p class="text-base text-gray-600">Dengan memohon Rahmat dan Ridho Allah SWT kami bermaksud untuk mengundang Bapak/Ibu/Saudara/i untuk menghadiri acara pernikahan kami:</p>
                            </div>

                            <div class="mb-4 flex items-center justify-start space-x-4" data-aos="fade-right">
                                <img loading="lazy" src="{{ asset("/") }}assets/images/wedding-couples/girl.jpg" class="border-primary-golden-brown-400 mb-2 h-36 w-28 rounded-t-[30%] rounded-b-[30%] border-4 object-cover" />
                                <div class="text-left">
                                    <p class="font-sacramento text-primary-golden-brown-400 text-4xl font-semibold">Wanita</p>
                                    <p class="text-base font-semibold text-gray-600">Nama Lengkap Wanita</p>
                                    <p class="text-base text-gray-600">Putri ke 2 dari</p>
                                    <p class="text-base font-semibold text-gray-600">Bapak & Ibu</p>
                                </div>
                            </div>

                            <div data-aos="fade-left">
                                <div class="mb-4 flex justify-center">
                                    <p class="font-sacramento text-primary-golden-brown-400 text-4xl font-semibold">&</p>
                                </div>
                                <div class="mb-4 flex items-center justify-end space-x-4">
                                    <div class="text-right">
                                        <p class="font-sacramento text-primary-golden-brown-400 text-4xl font-semibold">Pria</p>
                                        <p class="text-base font-semibold text-gray-600">Nama Lengkap Pria</p>
                                        <p class="text-base text-gray-600">Putra ke 2 dari</p>
                                        <p class="text-base font-semibold text-gray-600">Bapak & Ibu</p>
                                    </div>
                                    <img loading="lazy" src="{{ asset("/") }}assets/images/wedding-couples/boy.jpg" class="border-primary-golden-brown-400 mb-2 h-36 w-28 rounded-t-[30%] rounded-b-[30%] border-4 object-cover" />
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </section>

            <!-- event section -->
            <section id="event-section" class="relative z-10 min-h-screen w-full overflow-hidden">
                <div class="absolute flex h-full w-full items-center justify-start">
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/41.png" class="absolute inset-x-0 top-0 z-10 w-full" data-aos="fade-down" />

                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/42.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-right" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/43.png" class="absolute inset-x-0 bottom-0 z-10 w-full" data-aos="fade-up" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/44.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-left" />
                </div>

                <div class="relative z-30 flex min-h-screen w-full flex-col items-center justify-center px-4 py-8">
                    <p class="font-sacramento text-primary-golden-brown-400 mt-6 mb-4 px-2 text-center text-4xl font-semibold" data-aos="fade-right">Events</p>

                    @if ($invitation)
                        @if ($invitation->events->isEmpty())
                            <p class="rounded-lg bg-slate-500 px-4 py-2 text-white">Belum ada data.</p>
                        @else
                            @php
                                $now = \Carbon\Carbon::now();
                                $upcomingEvent = $invitation->events
                                    ->filter(function ($event) use ($now) {
                                        return \Carbon\Carbon::parse($event->event_date)->greaterThan($now);
                                    })
                                    ->sortBy("event_date")
                                    ->first();
                                $countdownDate = $upcomingEvent ? $upcomingEvent->event_date . " " . $upcomingEvent->time : null;
                            @endphp

                            <div id="countdown" class="mb-4 flex justify-center gap-2" data-countdown="{{ $countdownDate }}" data-aos="fade-left">
                                <div class="border-primary-golden-brown-500 w-15 rounded-lg border-2 bg-white/75 p-2 text-center shadow-lg">
                                    <span id="days" class="text-primary-golden-brown-500 text-xl font-bold">00</span>
                                    <div class="text-sm text-gray-600">Hari</div>
                                </div>
                                <div class="border-primary-golden-brown-500 w-15 rounded-lg border-2 bg-white/75 p-2 text-center shadow-lg">
                                    <span id="hours" class="text-primary-golden-brown-500 text-xl font-bold">00</span>
                                    <div class="text-sm text-gray-600">Jam</div>
                                </div>
                                <div class="border-primary-golden-brown-500 w-15 rounded-lg border-2 bg-white/75 p-2 text-center shadow-lg">
                                    <span id="minutes" class="text-primary-golden-brown-500 text-xl font-bold">00</span>
                                    <div class="text-sm text-gray-600">Menit</div>
                                </div>
                                <div class="border-primary-golden-brown-500 w-15 rounded-lg border-2 bg-white/75 p-2 text-center shadow-lg">
                                    <span id="seconds" class="text-primary-golden-brown-500 text-xl font-bold">00</span>
                                    <div class="text-sm text-gray-600">Detik</div>
                                </div>
                            </div>

                            @foreach ($invitation->events->sortBy("event_date") as $event)
                                <div class="border-primary-golden-brown-400 mb-4 w-full rounded-lg border-2 bg-white/75 p-4 text-center text-gray-600 shadow-lg" data-aos="fade-right">
                                    <p class="font-sacramento text-primary-golden-brown-400 mb-2 text-4xl font-semibold">
                                        {{ $event->type }}
                                    </p>
                                    <p class="text-lg font-semibold">
                                        {{ \Carbon\Carbon::parse($event->event_date)->locale("id")->isoFormat("dddd, D MMMM YYYY") }}
                                    </p>
                                    <p class="text-lg font-semibold">
                                        {{ \Carbon\Carbon::parse($event->time)->locale("id")->format("H:i") }}
                                        WIB
                                    </p>
                                    <p class="text-base">
                                        {{ $event->location }}
                                    </p>
                                    <p class="mb-4 text-base">
                                        {{ $event->address }}
                                    </p>
                                    @if ($event->map_url)
                                        <a href="{{ $event->map_url }}" target="_blank">
                                            <button class="bg-primary-golden-brown-500 hover:bg-primary-golden-brown-600 mx-auto mt-1 cursor-pointer rounded-full px-4 py-2 text-sm text-white">
                                                <i class="fas fa-location-dot"></i>
                                                Lihat Lokasi
                                            </button>
                                        </a>
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    @else
                        <div id="countdown" class="mb-4 flex justify-center gap-2" data-countdown="2050-10-23 08:00:00" data-aos="fade-left">
                            <div class="border-primary-golden-brown-500 w-15 rounded-lg border-2 bg-white/75 p-2 text-center shadow-lg">
                                <span id="days" class="text-primary-golden-brown-500 text-xl font-bold">00</span>
                                <div class="text-sm text-gray-600">Hari</div>
                            </div>
                            <div class="border-primary-golden-brown-500 w-15 rounded-lg border-2 bg-white/75 p-2 text-center shadow-lg">
                                <span id="hours" class="text-primary-golden-brown-500 text-xl font-bold">00</span>
                                <div class="text-sm text-gray-600">Jam</div>
                            </div>
                            <div class="border-primary-golden-brown-500 w-15 rounded-lg border-2 bg-white/75 p-2 text-center shadow-lg">
                                <span id="minutes" class="text-primary-golden-brown-500 text-xl font-bold">00</span>
                                <div class="text-sm text-gray-600">Menit</div>
                            </div>
                            <div class="border-primary-golden-brown-500 w-15 rounded-lg border-2 bg-white/75 p-2 text-center shadow-lg">
                                <span id="seconds" class="text-primary-golden-brown-500 text-xl font-bold">00</span>
                                <div class="text-sm text-gray-600">Detik</div>
                            </div>
                        </div>

                        <div class="border-primary-golden-brown-400 mb-4 w-full rounded-lg border-2 bg-white/75 p-4 text-center text-gray-600 shadow-lg" data-aos="fade-right">
                            <p class="font-sacramento text-primary-golden-brown-400 mb-2 text-4xl font-semibold">Akad Nikah</p>
                            <p class="text-lg font-semibold">Minggu, 23 Oktober 2025</p>
                            <p class="text-lg font-semibold">08:00 WIB</p>
                            <p class="text-base">Kediaman Mempelai Wanita</p>
                            <p class="mb-4 text-base">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, minus!</p>
                            <a href="#" target="_blank">
                                <button class="bg-primary-golden-brown-500 hover:bg-primary-golden-brown-600 mx-auto mt-1 cursor-pointer rounded-full px-4 py-2 text-sm text-white">
                                    <i class="fas fa-location-dot"></i>
                                    Lihat Lokasi
                                </button>
                            </a>
                        </div>
                        <div class="border-primary-golden-brown-400 mb-4 w-full rounded-lg border-2 bg-white/75 p-4 text-center text-gray-600 shadow-lg" data-aos="fade-left">
                            <p class="font-sacramento text-primary-golden-brown-400 mb-2 text-4xl font-semibold">Resepsi</p>
                            <p class="text-lg font-semibold">Minggu, 23 Oktober 2025</p>
                            <p class="text-lg font-semibold">10:00 WIB</p>
                            <p class="text-base">Gedung Pernikahan</p>
                            <p class="mb-4 text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, praesentium!</p>
                            <a href="#" target="_blank">
                                <button class="bg-primary-golden-brown-500 hover:bg-primary-golden-brown-600 mx-auto mt-1 cursor-pointer rounded-full px-4 py-2 text-sm text-white">
                                    <i class="fas fa-location-dot"></i>
                                    Lihat Lokasi
                                </button>
                            </a>
                        </div>
                        <div class="border-primary-golden-brown-400 mb-4 w-full rounded-lg border-2 bg-white/75 p-4 text-center text-gray-600 shadow-lg" data-aos="fade-right">
                            <p class="font-sacramento text-primary-golden-brown-400 mb-2 text-4xl font-semibold">Ngunduh Mantu</p>
                            <p class="text-lg font-semibold">Minggu, 23 Oktober 2025</p>
                            <p class="text-lg font-semibold">08:00 WIB</p>
                            <p class="text-base">Kediaman Mempelai Pria</p>
                            <p class="mb-4 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, laudantium.</p>
                            <a href="#" target="_blank">
                                <button class="bg-primary-golden-brown-500 hover:bg-primary-golden-brown-600 mx-auto mt-1 cursor-pointer rounded-full px-4 py-2 text-sm text-white">
                                    <i class="fas fa-location-dot"></i>
                                    Lihat Lokasi
                                </button>
                            </a>
                        </div>
                    @endif
                </div>
            </section>

            <!-- gallery & streaming -->
            <section id="gallery-streaming-section" class="relative z-10 min-h-screen w-full overflow-hidden">
                <div class="absolute flex h-full w-full items-center justify-start">
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/41.png" class="absolute inset-x-0 top-0 z-10 w-full" data-aos="fade-down" />

                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/42.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-right" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/43.png" class="absolute inset-x-0 bottom-0 z-10 w-full" data-aos="fade-up" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/44.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-left" />
                </div>

                <div class="relative z-30 flex min-h-screen w-full flex-col items-center justify-center px-4 py-8">
                    <p class="font-sacramento text-primary-golden-brown-400 mt-6 mb-4 px-2 text-center text-4xl font-semibold" data-aos="flip-left">Galleries</p>

                    @if ($invitation)
                        @if ($invitation->galleries->isEmpty())
                            <p class="rounded-lg bg-slate-500 px-4 py-2 text-white">Belum ada data.</p>
                        @else
                            <div class="mb-4">
                                <div class="grid grid-cols-3 gap-6">
                                    @foreach ($invitation->galleries->sortBy("order") as $gallery)
                                        <a href="{{ Storage::url($gallery->photo) }}" data-fancybox="gallery" class="group relative">
                                            <div data-aos="flip-left">
                                                <div class="transform overflow-hidden rounded-xl bg-white shadow-lg transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl">
                                                    <img loading="lazy" src="{{ Storage::url($gallery->photo) }}" alt="Image" class="h-[150px] w-full object-cover" />
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @else
                        <div class="mb-4">
                            <div class="grid grid-cols-3 gap-6">
                                <a href="{{ asset("/") }}assets/images/galleries/img-1.jpg" data-fancybox="gallery" class="group relative">
                                    <div data-aos="flip-left">
                                        <div class="transform overflow-hidden rounded-xl bg-white shadow-lg transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl">
                                            <img loading="lazy" src="{{ asset("/") }}assets/images/galleries/img-1.jpg" alt="Image 1" class="h-[150px] w-full object-cover" />
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ asset("/") }}assets/images/galleries/img-2.jpg" data-fancybox="gallery" class="group relative">
                                    <div data-aos="flip-left">
                                        <div class="transform overflow-hidden rounded-xl bg-white shadow-lg transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl">
                                            <img loading="lazy" src="{{ asset("/") }}assets/images/galleries/img-2.jpg" alt="Image 2" class="h-[150px] w-full object-cover" />
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ asset("/") }}assets/images/galleries/img-3.jpg" data-fancybox="gallery" class="group relative">
                                    <div data-aos="flip-left">
                                        <div class="transform overflow-hidden rounded-xl bg-white shadow-lg transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl">
                                            <img loading="lazy" src="{{ asset("/") }}assets/images/galleries/img-3.jpg" alt="Image 3" class="h-[150px] w-full object-cover" />
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ asset("/") }}assets/images/galleries/img-4.jpg" data-fancybox="gallery" class="group relative">
                                    <div data-aos="flip-left">
                                        <div class="transform overflow-hidden rounded-xl bg-white shadow-lg transition duration-300 ease-in-out hover:scale-105 hover:shadow-2xl">
                                            <img loading="lazy" src="{{ asset("/") }}assets/images/galleries/img-4.jpg" alt="Image 4" class="h-[150px] w-full object-cover" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif

                    @if ($invitation)
                        @if ($invitation->streaming)
                            <p class="font-sacramento text-primary-golden-brown-400 mt-6 mb-4 px-2 text-center text-4xl font-semibold" data-aos="flip-left">Streaming</p>

                            @php
                                $youtubeUrl = $invitation->streaming->youtube_url;
                                if (strpos($youtubeUrl, "watch?v=") !== false) {
                                    parse_str(parse_url($youtubeUrl, PHP_URL_QUERY), $urlParams);
                                    $videoId = $urlParams["v"] ?? "";
                                } elseif (strpos($youtubeUrl, "shorts/") !== false) {
                                    $pathSegments = explode("/", parse_url($youtubeUrl, PHP_URL_PATH));
                                    $videoId = $pathSegments[2] ?? "";
                                } else {
                                    $videoId = "";
                                }
                                $embedUrl = "https://www.youtube.com/embed/" . $videoId;
                            @endphp

                            <div class="mb-4" data-aos="flip-left">
                                <iframe class="rounded-lg" width="100%" height="250" src="{{ $embedUrl }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        @endif
                    @else
                        <p class="font-sacramento text-primary-golden-brown-400 mt-6 mb-4 px-2 text-center text-4xl font-semibold" data-aos="flip-left">Streaming</p>
                        <div class="mb-4" data-aos="flip-left">
                            <iframe class="rounded-lg" width="100%" height="250" src="https://www.youtube.com/embed/u_AzmF66dVg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    @endif
                </div>
            </section>

            <!-- love story section -->
            <section id="love-story-section" class="relative z-10 min-h-screen w-full overflow-hidden">
                <div class="absolute flex h-full w-full items-center justify-start">
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/41.png" class="absolute inset-x-0 top-0 z-10 w-full" data-aos="fade-down" />

                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/42.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-right" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/43.png" class="absolute inset-x-0 bottom-0 z-10 w-full" data-aos="fade-up" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/44.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-left" />
                </div>

                <div class="relative z-30 flex min-h-screen w-full flex-col items-center justify-center px-4 py-8">
                    <p class="font-sacramento text-primary-golden-brown-400 mt-6 mb-4 px-2 text-center text-4xl font-semibold" data-aos="fade-up">Love Stories</p>

                    @if ($invitation)
                        @if ($invitation->loveStories->isEmpty())
                            <p class="rounded-lg bg-slate-500 px-4 py-2 text-white">Belum ada data.</p>
                        @else
                            @foreach ($invitation->loveStories->sortBy("order") as $loveStory)
                                <div class="border-primary-golden-brown-400 mb-4 w-full rounded-lg border-2 bg-white/75 p-4 text-center text-gray-600 shadow-lg" data-aos="fade-up">
                                    <p class="font-sacramento text-primary-golden-brown-400 mb-4 text-center text-2xl font-semibold">
                                        {{ $loveStory->title }}
                                    </p>
                                    <div class="text-justify text-base">
                                        {!! $loveStory->text !!}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @else
                        <div class="border-primary-golden-brown-400 mb-4 w-full rounded-lg border-2 bg-white/75 p-4 text-center text-gray-600 shadow-lg" data-aos="fade-up">
                            <p class="font-sacramento text-primary-golden-brown-400 mb-4 text-center text-2xl font-semibold">2023 (Lorem ipsum dolor sit amet)</p>
                            <p class="text-justify text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quibusdam debitis magni animi deserunt, consectetur blanditiis quisquam exercitationem! Repellat, officia.</p>
                        </div>
                        <div class="border-primary-golden-brown-400 mb-4 w-full rounded-lg border-2 bg-white/75 p-4 text-center text-gray-600 shadow-lg" data-aos="fade-up">
                            <p class="font-sacramento text-primary-golden-brown-400 mb-4 text-center text-2xl font-semibold">2023 (Lorem ipsum dolor sit amet)</p>
                            <p class="text-justify text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quibusdam debitis magni animi deserunt, consectetur blanditiis quisquam exercitationem! Repellat, officia.</p>
                        </div>
                        <div class="border-primary-golden-brown-400 mb-4 w-full rounded-lg border-2 bg-white/75 p-4 text-center text-gray-600 shadow-lg" data-aos="fade-up">
                            <p class="font-sacramento text-primary-golden-brown-400 mb-4 text-center text-2xl font-semibold">2023 (Lorem ipsum dolor sit amet)</p>
                            <p class="text-justify text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quibusdam debitis magni animi deserunt, consectetur blanditiis quisquam exercitationem! Repellat, officia.</p>
                        </div>
                    @endif
                </div>
            </section>

            <!-- message & gift section -->
            <section id="message-gift-section" class="relative z-10 min-h-screen w-full overflow-hidden">
                <div class="absolute flex h-full w-full items-center justify-start">
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/41.png" class="absolute inset-x-0 top-0 z-10 w-full" data-aos="fade-down" />

                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/42.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-right" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/43.png" class="absolute inset-x-0 bottom-0 z-10 w-full" data-aos="fade-up" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/44.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-left" />
                </div>

                <div class="relative z-30 flex min-h-screen w-full flex-col items-center justify-center px-4 py-8">
                    <p class="font-sacramento text-primary-golden-brown-400 mt-6 mb-4 px-2 text-center text-4xl font-semibold" data-aos="zoom-in">Messages</p>
                    <div class="border-primary-golden-brown-400 mb-4 w-full rounded-lg border-2 bg-white/75 p-4 shadow-lg" data-aos="zoom-in">
                        <form id="message-form" method="POST">
                            @csrf
                            <input type="hidden" name="invitation_id" id="invitation_id" value="{{ $invitation->id ?? null }}" />
                            <div class="mb-4">
                                <label for="name" class="mb-2 block text-left text-sm font-semibold text-gray-600">Nama</label>
                                <input type="text" name="name" id="name" placeholder="Masukkan nama Anda" class="border-primary-golden-brown-400 focus:ring-primary-golden-brown-400 w-full rounded-lg border p-3 focus:ring-2 focus:outline-none" />
                            </div>
                            <div class="mb-4">
                                <label for="message" class="mb-2 block text-left text-sm font-semibold text-gray-600">Pesan</label>
                                <textarea name="message" id="message" placeholder="Berikan ucapan serta doa restu Anda" class="border-primary-golden-brown-400 focus:ring-primary-golden-brown-400 w-full rounded-lg border p-3 focus:ring-2 focus:outline-none" rows="2"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="presence_confirm" class="mb-2 block text-left text-sm font-semibold text-gray-600">Konfirmasi Kehadiran</label>
                                <div class="flex space-x-4 text-gray-600">
                                    <label class="flex items-center">
                                        <input type="radio" name="presence_confirm" value="1" class="mr-2" onclick="toggleGuestInput(true)" />
                                        Hadir
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="presence_confirm" value="0" class="mr-2" onclick="toggleGuestInput(false)" />
                                        Maaf, saya tidak bisa hadir
                                    </label>
                                </div>
                            </div>
                            <div class="mb-4" id="guest_input" style="display: none">
                                <label for="guest_total" class="mb-2 block text-left text-sm font-semibold text-gray-600">Jumlah Tamu</label>
                                <input type="number" name="guest_total" id="guest_total" placeholder="Masukkan jumlah tamu (orang)" class="border-primary-golden-brown-400 focus:ring-primary-golden-brown-400 w-full rounded-lg border p-3 focus:ring-2 focus:outline-none" />
                            </div>
                            <button type="button" id="send-message-btn" class="bg-primary-golden-brown-500 hover:bg-primary-golden-brown-600 mt-4 w-full cursor-pointer rounded-full p-2 text-base text-white">
                                <i class="fas fa-message"></i>
                                SEND MESSAGE
                            </button>
                        </form>

                        @if ($invitation)
                            <div id="messages" data-color="text-primary-golden-brown-400" class="mt-8 max-h-96 space-y-4 overflow-y-auto rounded-lg border border-gray-300 p-2"></div>
                        @else
                            <div class="mt-8 max-h-96 space-y-4 overflow-y-auto rounded-lg border border-gray-300 p-2">
                                <!-- Pesan akan ditampilkan di sini -->
                                <div class="rounded-md bg-green-100 p-4 shadow-md">
                                    <p class="text-primary-golden-brown-500 text-sm font-semibold">Nama Pengirim 1</p>
                                    <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque urna nec nisi auctor, a tincidunt libero iaculis.</p>
                                </div>
                                <div class="rounded-md bg-green-100 p-4 shadow-md">
                                    <p class="text-primary-golden-brown-500 text-sm font-semibold">Nama Pengirim 2</p>
                                    <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque urna nec nisi auctor, a tincidunt libero iaculis.</p>
                                </div>
                                <div class="rounded-md bg-green-100 p-4 shadow-md">
                                    <p class="text-primary-golden-brown-500 text-sm font-semibold">Nama Pengirim 3</p>
                                    <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque urna nec nisi auctor, a tincidunt libero iaculis.</p>
                                </div>
                                <div class="rounded-md bg-green-100 p-4 shadow-md">
                                    <p class="text-primary-golden-brown-500 text-sm font-semibold">Nama Pengirim 4</p>
                                    <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque urna nec nisi auctor, a tincidunt libero iaculis.</p>
                                </div>
                                <div class="rounded-md bg-green-100 p-4 shadow-md">
                                    <p class="text-primary-golden-brown-500 text-sm font-semibold">Nama Pengirim 5</p>
                                    <p class="text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque urna nec nisi auctor, a tincidunt libero iaculis.</p>
                                </div>
                            </div>
                        @endif
                    </div>

                    <p class="font-sacramento text-primary-golden-brown-400 mt-6 mb-4 px-2 text-center text-4xl font-semibold" data-aos="zoom-in">Gift</p>
                    <div class="border-primary-golden-brown-400 mb-4 w-full rounded-lg border-2 bg-white/75 p-4 shadow-lg" data-aos="zoom-in">
                        <p class="mb-8 text-justify text-base text-gray-600">Bagi yang ingin memberikan tanda kasih, dapat mengirimkan melalui fitur di bawah ini:</p>
                        <button id="open-modal" class="bg-primary-golden-brown-500 hover:bg-primary-golden-brown-600 w-full cursor-pointer rounded-full p-2 text-base text-white">
                            <i class="fas fa-gift"></i>
                            SEND GIFT
                        </button>
                    </div>
                </div>
            </section>

            <div id="gift-modal" class="fixed inset-0 z-50 flex hidden justify-center py-4">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="relative mx-4 max-h-[90vh] w-full max-w-md overflow-hidden rounded-lg bg-white">
                    <div class="flex p-4">
                        <p class="font-sacramento text-primary-golden-brown-400 text-4xl font-semibold">Gift</p>
                        <button id="close-modal" class="ml-auto cursor-pointer text-3xl font-semibold text-gray-600 hover:text-gray-900">&times;</button>
                    </div>
                    <hr class="border-gray-300" />
                    <div class="max-h-[70vh] overflow-y-auto px-4 pt-4 pb-8">
                        <p class="mb-8 text-base font-semibold">Silahkan transfer hadiah melalui nomor rekening maupun dompet digital berikut:</p>

                        @if ($invitation)
                            @if ($invitation->gifts->isEmpty())
                                <p class="rounded-lg bg-slate-500 px-4 py-2 text-white">Belum ada data.</p>
                            @else
                                @foreach ($invitation->gifts->sortBy("order") as $gift)
                                    @if ($gift->type == "Rekening")
                                        <div class="relative mb-4">
                                            <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/card-money.jpg" class="border-primary-golden-brown-400 h-40 w-full rounded-3xl border-2 object-cover" />
                                            <div class="absolute inset-0 flex flex-col items-start justify-center pl-4">
                                                <p class="text-primary-golden-brown-400 px-4 py-1 text-2xl font-semibold">
                                                    {{ $gift->account_name }}
                                                </p>
                                                <p class="px-4 py-1 text-2xl">
                                                    {{ $gift->account_number }}
                                                    <i id="copy-icosn" class="fa-regular fa-copy hover:text-primary-golden-brown-400 cursor-pointer" onclick="copyToClipboard('bg-primary-golden-brown-500', '{{ $gift->account_number }}')"></i>
                                                </p>
                                                <p class="px-4 py-1 text-2xl">
                                                    {{ $gift->account_holder }}
                                                </p>
                                            </div>
                                        </div>
                                    @elseif ($gift->type == "Paket")
                                        <div class="relative mb-4">
                                            <div class="border-primary-golden-brown-400 flex rounded-3xl border-2 p-2">
                                                <div class="flex items-center px-4">
                                                    <i class="fas fa-gift text-primary-golden-brown-400 text-3xl"></i>
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <p class="px-1 py-1 text-2xl">
                                                        {{ $gift->recipient_name }}
                                                    </p>
                                                    <p class="base px-1 py-1 text-gray-600">
                                                        {{ $gift->recipient_phone_number }}
                                                    </p>
                                                    <p class="px-1 py-1 text-base">
                                                        <span class="text-base text-gray-600">
                                                            {{ $gift->recipient_address }}
                                                        </span>
                                                        <i class="fa-regular fa-copy hover:text-primary-golden-brown-400 cursor-pointer text-2xl" onclick='copyToClipboard("bg-primary-golden-brown-500", "Name: {{ $gift->recipient_name }}, Phone Number: {{ $gift->recipient_phone_number }}, Address: {{ $gift->recipient_address }}")'></i>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        @else
                            <div class="relative mb-4">
                                <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/card-money.jpg" class="border-primary-golden-brown-400 h-40 w-full rounded-3xl border-2 object-cover" />
                                <div class="absolute inset-0 flex flex-col items-start justify-center pl-4">
                                    <p class="text-primary-golden-brown-400 px-4 py-1 text-2xl font-semibold">BSI</p>
                                    <p class="px-4 py-1 text-2xl">
                                        1234567890
                                        <i id="copy-icosn" class="fa-regular fa-copy hover:text-primary-golden-brown-400 cursor-pointer" onclick="copyToClipboard('bg-primary-golden-brown-500', '1234567890')"></i>
                                    </p>
                                    <p class="px-4 py-1 text-2xl">Nama Pemilik</p>
                                </div>
                            </div>

                            <div class="relative mb-4">
                                <div class="border-primary-golden-brown-400 flex rounded-3xl border-2 p-2">
                                    <div class="flex items-center px-4">
                                        <i class="fas fa-gift text-primary-golden-brown-400 text-3xl"></i>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <p class="px-1 py-1 text-2xl">Nama Penerima</p>
                                        <p class="base px-1 py-1 text-gray-600">081234567890</p>
                                        <p class="px-1 py-1 text-base">
                                            <span class="text-base text-gray-600">Lorem ipsum dolor sit amet consectetur Voluptas quaerat nulla velit.</span>
                                            <i class="fa-regular fa-copy hover:text-primary-golden-brown-400 cursor-pointer text-2xl" onclick='copyToClipboard("bg-primary-golden-brown-500", "Name: Nama Penerima, Phone Number: 081234567890, Address: Lorem ipsum dolor sit amet consectetur Voluptas quaerat nulla velit.")'></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="relative mt-8">
                            <p class="text-base font-semibold">Perhatian!</p>
                            <ul class="list-disc pl-4 text-sm text-gray-600">
                                <li>Pastikan nama dan nomor rekening sudah sesuai dengan nama mempelai ketika melakukan proses transfer.</li>
                                <li>Mohon untuk melakukan konfirmasi hadiah anda dengan mengirim bukti transfer/resi pengiriman kepada mempelai melalui personal message. Terima kasih.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- closing section -->
            <section id="closing-section" class="relative z-10 h-full w-full overflow-hidden">
                <div class="absolute flex h-full w-full items-center justify-start">
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/41.png" class="absolute inset-x-0 top-0 z-10 w-full" data-aos="fade-down" />

                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/42.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-right" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/43.png" class="absolute inset-x-0 bottom-0 z-10 w-full" data-aos="fade-up" />
                    <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/44.png" class="absolute inset-x-0 bottom-0 z-20 w-full" data-aos="fade-left" />
                </div>

                <div class="relative z-30 flex flex-col items-center justify-center px-4 py-8">
                    <p class="font-sacramento text-primary-golden-brown-400 mt-6 mb-4 px-2 text-center text-4xl font-semibold" data-aos="fade-down">Closing</p>
                    <div class="px-2">
                        <div class="mb-4 text-center">
                            <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/45.png" class="inset-x-0 z-20 mb-4 w-full" data-aos="fade-down" />
                            <div class="mb-16 text-base text-gray-600" data-aos="fade-down">
                                {!! $invitation->closing->closing_text ?? "Menjadi sebuah kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir dalam hari bahagia ini. Terima kasih atas segala ucapan, doa, dan perhatian yang diberikan." !!}
                            </div>
                            <p class="mb-4 text-base font-semibold text-gray-600" data-aos="fade-up">
                                {{ $invitation->closing->closing_greeting ?? "Sampai jumpa di hari besar kami!" }}
                            </p>
                            <p class="font-sacramento text-primary-golden-brown-400 mb-4 text-4xl font-semibold" data-aos="fade-up">
                                {{ $invitation->weddingCouple->bride_nickname ?? "Wanita" }}
                                &
                                {{ $invitation->weddingCouple->groom_nickname ?? "Pria" }}
                            </p>
                            <img loading="lazy" src="{{ asset("/") }}assets/floral-template/images/golden-brown/46.png" class="inset-x-0 z-20 mb-4 w-full" data-aos="fade-up" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- footer -->
            @include("templates.wedding-floral.layouts.footer", ["color" => "primary-golden-brown"])
        </div>
    </div>
@endsection

@push("styles")
    
@endpush

@push("scripts")
    
@endpush
