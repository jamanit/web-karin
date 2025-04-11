<footer class="footer relative bg-slate-900 text-gray-200 dark:bg-slate-950">
    <div class="relative container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="px-0 py-[60px]">
                    <div class="grid grid-cols-1">
                        <div class="text-center">
                            @if ($siteConfigs["white_logo"]->file)
                                <a href="/">
                                    <img src="{{ Storage::url($siteConfigs["white_logo"]->file) }}" class="mx-auto block h-16 rounded-sm" alt="" />
                                </a>
                            @else
                                <a href="/">
                                    <img src="{{ asset("/") }}assets/hoxia-v1/images/logo-icon-64.png" class="mx-auto block h-16 rounded-sm" alt="" />
                                </a>
                            @endif
                            <p class="mx-auto mt-8 max-w-xl">Ingin tetap terhubung? Ikuti kami di media sosial atau hubungi tim kami untuk bantuan lebih lanjut!</p>
                        </div>

                        <ul class="mt-8 list-none text-center">
                            @if ($siteConfigs["phone_number"]->value)
                                <li class="inline">
                                    <a
                                        href="tel:{{ $siteConfigs["phone_number"]->value }}"
                                        target="_blank"
                                        class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none"
                                    >
                                        <i class="uil uil-phone align-middle" title="{{ $siteConfigs["phone_number"]->name }}"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($siteConfigs["email"]->value)
                                <li class="inline">
                                    <a
                                        href="mailto:{{ $siteConfigs["email"]->value }}"
                                        target="_blank"
                                        class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none"
                                    >
                                        <i class="uil uil-envelope align-middle" title="{{ $siteConfigs["email"]->name }}"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($siteConfigs["whatsapp_number"]->value)
                                <li class="inline">
                                    <a
                                        href="https://wa.me/{{ $siteConfigs["whatsapp_number"]->value }}"
                                        target="_blank"
                                        class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none"
                                    >
                                        <i class="uil uil-whatsapp align-middle" title="{{ $siteConfigs["whatsapp_number"]->name }}"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($siteConfigs["instagram_url"]->value)
                                <li class="inline">
                                    <a
                                        href="{{ $siteConfigs["instagram_url"]->value }}"
                                        target="_blank"
                                        class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none"
                                    >
                                        <i class="uil uil-instagram align-middle" title="{{ $siteConfigs["instagram_url"]->name }}"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($siteConfigs["facebook_url"]->value)
                                <li class="inline">
                                    <a
                                        href="{{ $siteConfigs["facebook_url"]->value }}"
                                        target="_blank"
                                        class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none"
                                    >
                                        <i class="uil uil-facebook-f align-middle" title="{{ $siteConfigs["facebook_url"]->name }}"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($siteConfigs["tiktok_url"]->value)
                                <li class="inline">
                                    <a
                                        href="{{ $siteConfigs["tiktok_url"]->value }}"
                                        target="_blank"
                                        class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none"
                                    >
                                        <i class="fa-brands fa-tiktok align-middle text-sm" title="{{ $siteConfigs["tiktok_url"]->name }}"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($siteConfigs["map_url"]->value)
                                <li class="inline">
                                    <a
                                        href="{{ $siteConfigs["map_url"]->value }}"
                                        target="_blank"
                                        class="hover:border-{{ $primary_color }}-500 dark:hover:border-{{ $primary_color }}-500 hover:bg-{{ $primary_color }}-500 dark:hover:bg-{{ $primary_color }}-500 focus:ring-{{ $primary_color }}-500 focus:ring-opacity-25 inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide transition duration-500 ease-in-out focus:ring-[3px] focus:outline-none"
                                    >
                                        <i class="uil uil-map-marker align-middle" title="{{ $siteConfigs["map_url"]->name }}"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-slate-800 px-0 py-[30px]">
        <div class="relative container text-center">
            <div class="grid md:grid-cols-1">
                <p class="mb-0">
                    Copyright &copy; 2025
                    <span class="text-{{ $primary_color }}-400 font-semibold">{{ $siteConfigs["site_name"]->value ?? "Site Name" }}</span>
                    by
                    <a href="{{ env("COPYRIGHT_URL", "Copyright URL") }}" target="_blank" class="text-{{ $primary_color }}-400 font-semibold">
                        {{ env("COPYRIGHT_NAME", "Copyright Name") }}
                    </a>
                    . All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
