<div id="contact_us" class="relative container scroll-mt-4 pt-16 pb-8 md:pt-24 md:pb-12">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 text-2xl leading-normal font-medium md:text-3xl md:leading-normal">Contact Us</h3>
        <p class="mx-auto max-w-xl text-slate-400">Kami siap membantu Anda. Jangan ragu untuk menghubungi!</p>
    </div>

    <div class="relative">
        <div class="container">
            <div class="grid grid-cols-1 gap-[30px] md:grid-cols-12">
                <div class="md:col-span-6 lg:col-span-7">
                    <div class="grid grid-cols-1 gap-[30px]">
                        @if ($siteConfigs["website_url"]->value)
                            <div class="flex items-center gap-4">
                                <div class="relative text-transparent">
                                    <div class="bg-{{ $primary_color }}-500/5 text-{{ $primary_color }}-500 mx-auto flex h-14 w-14 items-center justify-center rounded-xl align-middle text-2xl shadow-sm dark:bg-slate-800 dark:shadow-gray-800">
                                        <i class="uil uil-phone"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <h5 class="title h5 text-lg font-medium">Phone</h5>
                                    <div>
                                        <a
                                            target="_blank"
                                            href="tel:{{ $siteConfigs["phone_number"]->value }}"
                                            class="text-{{ $primary_color }}-500 hover:text-{{ $primary_color }}-500 after:bg-{{ $primary_color }}-500 relative inline-block border-none text-center align-middle text-base tracking-wide duration-500 ease-in-out after:absolute after:start-0 after:end-0 after:bottom-0 after:h-px after:w-0 after:transition-all after:duration-500 after:content-[''] hover:after:end-auto hover:after:w-full"
                                        >
                                            {{ $siteConfigs["phone_number"]->value }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($siteConfigs["email"]->value)
                            <div class="flex items-center gap-4">
                                <div class="relative text-transparent">
                                    <div class="bg-{{ $primary_color }}-500/5 text-{{ $primary_color }}-500 mx-auto flex h-14 w-14 items-center justify-center rounded-xl align-middle text-2xl shadow-sm dark:bg-slate-800 dark:shadow-gray-800">
                                        <i class="uil uil-envelope"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <h5 class="title h5 text-lg font-medium">Email</h5>
                                    <div>
                                        <a
                                            target="_blank"
                                            href="mailto:{{ $siteConfigs["email"]->value }}"
                                            class="text-{{ $primary_color }}-500 hover:text-{{ $primary_color }}-500 after:bg-{{ $primary_color }}-500 relative inline-block border-none text-center align-middle text-base tracking-wide duration-500 ease-in-out after:absolute after:start-0 after:end-0 after:bottom-0 after:h-px after:w-0 after:transition-all after:duration-500 after:content-[''] hover:after:end-auto hover:after:w-full"
                                        >
                                            {{ $siteConfigs["email"]->value }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($siteConfigs["whatsapp_number"]->value)
                            <div class="flex items-center gap-4">
                                <div class="relative text-transparent">
                                    <div class="bg-{{ $primary_color }}-500/5 text-{{ $primary_color }}-500 mx-auto flex h-14 w-14 items-center justify-center rounded-xl align-middle text-2xl shadow-sm dark:bg-slate-800 dark:shadow-gray-800">
                                        <i class="uil uil-whatsapp"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <h5 class="title h5 text-lg font-medium">WhatsApp</h5>
                                    <div>
                                        <a
                                            target="_blank"
                                            href="https://wa.me/{{ $siteConfigs["whatsapp_number"]->value }}"
                                            class="text-{{ $primary_color }}-500 hover:text-{{ $primary_color }}-500 after:bg-{{ $primary_color }}-500 relative inline-block border-none text-center align-middle text-base tracking-wide duration-500 ease-in-out after:absolute after:start-0 after:end-0 after:bottom-0 after:h-px after:w-0 after:transition-all after:duration-500 after:content-[''] hover:after:end-auto hover:after:w-full"
                                        >
                                            {{ $siteConfigs["whatsapp_number"]->value }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($siteConfigs["instagram_url"]->value)
                            <div class="flex items-center gap-4">
                                <div class="relative text-transparent">
                                    <div class="bg-{{ $primary_color }}-500/5 text-{{ $primary_color }}-500 mx-auto flex h-14 w-14 items-center justify-center rounded-xl align-middle text-2xl shadow-sm dark:bg-slate-800 dark:shadow-gray-800">
                                        <i class="uil uil-whatsapp"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <h5 class="title h5 text-lg font-medium">Instagram</h5>
                                    <div>
                                        <a
                                            target="_blank"
                                            href="{{ $siteConfigs["instagram_url"]->value }}"
                                            class="text-{{ $primary_color }}-500 hover:text-{{ $primary_color }}-500 after:bg-{{ $primary_color }}-500 relative inline-block border-none text-center align-middle text-base tracking-wide duration-500 ease-in-out after:absolute after:start-0 after:end-0 after:bottom-0 after:h-px after:w-0 after:transition-all after:duration-500 after:content-[''] hover:after:end-auto hover:after:w-full"
                                        >
                                            Visit Instagram
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($siteConfigs["facebook_url"]->value)
                            <div class="flex items-center gap-4">
                                <div class="relative text-transparent">
                                    <div class="bg-{{ $primary_color }}-500/5 text-{{ $primary_color }}-500 mx-auto flex h-14 w-14 items-center justify-center rounded-xl align-middle text-2xl shadow-sm dark:bg-slate-800 dark:shadow-gray-800">
                                        <i class="uil uil-facebook"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <h5 class="title h5 text-lg font-medium">Facebook</h5>
                                    <div>
                                        <a
                                            target="_blank"
                                            href="{{ $siteConfigs["facebook_url"]->value }}"
                                            class="text-{{ $primary_color }}-500 hover:text-{{ $primary_color }}-500 after:bg-{{ $primary_color }}-500 relative inline-block border-none text-center align-middle text-base tracking-wide duration-500 ease-in-out after:absolute after:start-0 after:end-0 after:bottom-0 after:h-px after:w-0 after:transition-all after:duration-500 after:content-[''] hover:after:end-auto hover:after:w-full"
                                        >
                                            Visit Facebook
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($siteConfigs["tiktok_url"]->value)
                            <div class="flex items-center gap-4">
                                <div class="relative text-transparent">
                                    <div class="bg-{{ $primary_color }}-500/5 text-{{ $primary_color }}-500 mx-auto flex h-14 w-14 items-center justify-center rounded-xl align-middle text-2xl shadow-sm dark:bg-slate-800 dark:shadow-gray-800">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <h5 class="title h5 text-lg font-medium">TikTok</h5>
                                    <div>
                                        <a
                                            target="_blank"
                                            href="{{ $siteConfigs["tiktok_url"]->value }}"
                                            class="text-{{ $primary_color }}-500 hover:text-{{ $primary_color }}-500 after:bg-{{ $primary_color }}-500 relative inline-block border-none text-center align-middle text-base tracking-wide duration-500 ease-in-out after:absolute after:start-0 after:end-0 after:bottom-0 after:h-px after:w-0 after:transition-all after:duration-500 after:content-[''] hover:after:end-auto hover:after:w-full"
                                        >
                                            Visit TikTok
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($siteConfigs["address"]->value && $siteConfigs["map_url"]->value)
                            <div class="flex items-center gap-4">
                                <div class="relative text-transparent">
                                    <div class="bg-{{ $primary_color }}-500/5 text-{{ $primary_color }}-500 mx-auto flex h-14 w-14 items-center justify-center rounded-xl align-middle text-2xl shadow-sm dark:bg-slate-800 dark:shadow-gray-800">
                                        <i class="uil uil-map-marker"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <h5 class="title h5 text-lg font-medium">Location</h5>
                                    <div>
                                        <a
                                            target="_blank"
                                            href="{{ $siteConfigs["map_url"]->value }}"
                                            class="text-{{ $primary_color }}-500 hover:text-{{ $primary_color }}-500 after:bg-{{ $primary_color }}-500 relative inline-block border-none text-center align-middle text-base tracking-wide duration-500 ease-in-out after:absolute after:start-0 after:end-0 after:bottom-0 after:h-px after:w-0 after:transition-all after:duration-500 after:content-[''] hover:after:end-auto hover:after:w-full"
                                        >
                                            View on Map
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="md:col-span-6 lg:col-span-5">
                    <div class="lg:ms-5">
                        <div class="rounded-md bg-white p-6 shadow dark:bg-slate-800 dark:shadow-gray-700">
                            <h3 class="mb-6 text-2xl leading-normal font-medium">Get in touch !</h3>

                            <form id="inbox-form" method="post">
                                @csrf
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid grid-cols-1">
                                    <div class="mb-5 lg:col-span-6">
                                        <label for="name" class="font-medium">Name</label>
                                        <input name="name" id="name" type="text" class="form-input focus:border-{{ $primary_color }}-500 dark:focus:border-{{ $primary_color }}-500 mt-2 h-10 w-full rounded-lg border border-gray-200 bg-transparent px-3 py-2 text-[15px] outline-none focus:ring-0 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200" placeholder="Enter Name" />
                                    </div>

                                    <div class="mb-5 lg:col-span-6">
                                        <label for="email" class="font-medium">Email</label>
                                        <input name="email" id="email" type="email" class="form-input focus:border-{{ $primary_color }}-500 dark:focus:border-{{ $primary_color }}-500 mt-2 h-10 w-full rounded-lg border border-gray-200 bg-transparent px-3 py-2 text-[15px] outline-none focus:ring-0 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200" placeholder="Enter Email" />
                                    </div>

                                    <div class="mb-5">
                                        <label for="message" class="font-medium">Message</label>
                                        <textarea name="message" id="message" class="form-input focus:border-{{ $primary_color }}-500 dark:focus:border-{{ $primary_color }}-500 mt-2 h-28 w-full rounded-lg border border-gray-200 bg-transparent px-3 py-2 text-[15px] outline-none focus:ring-0 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                                <button
                                    type="submit"
                                    id="sendInboxButton"
                                    class="bg-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-600 border-{{ $primary_color }}-500 hover:border-{{ $primary_color }}-600 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-block rounded-md border px-8 py-2.5 text-center align-middle text-[16px] font-medium tracking-wide text-white transition-all duration-500 focus:ring-[3px] focus:outline-none"
                                >
                                    Send
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push("scripts")
    <script>
        $(document).ready(function () {
            $('#inbox-form').on('submit', function (e) {
                e.preventDefault();

                let sendInboxButton = $('#sendInboxButton');
                let formData = $(this).serialize();

                sendInboxButton.attr('disabled', true).text('Sending...');

                $.ajax({
                    type: 'POST',
                    url: '{{ route("inboxes.store") }}',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function (response) {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            title: response.message,
                            showConfirmButton: false,
                            showCloseButton: true,
                            timer: 3000,
                            timerProgressBar: true,
                        });

                        $('#inbox-form')[0].reset();

                        sendInboxButton.attr('disabled', false).text('Send');
                    },
                    error: function (xhr) {
                        let errorInbox = xhr.responseJSON.message || 'Something went wrong! Please try again later.';

                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            errorInbox = '';

                            $.each(errors, function (key, value) {
                                errorInbox += value[0] + '<br>';
                            });
                        }

                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: errorInbox,
                            showConfirmButton: false,
                            showCloseButton: true,
                            timer: 3000,
                            timerProgressBar: true,
                        });

                        sendInboxButton.attr('disabled', false).text('Send');
                    },
                });
            });
        });
    </script>
@endpush
