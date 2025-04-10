<footer class="relative z-10 bg-gray-800">
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-col items-center text-white">
            <div class="mb-4 flex items-center space-x-4">
                @if (isset($invitation))
                    @if ($siteConfigs["website_url"]->value)
                        <a href="{{ $siteConfigs["website_url"]->value }}" class="hover:text-{{ $color }}-400" title="{{ $siteConfigs["website_url"]->name }}" target="_blank">
                            <i class="fa-solid fa-globe text-1xl"></i>
                        </a>
                    @endif
                @else
                    <a href="javascript:void(0)" class="hover:text-{{ $color }}-400" title="Website URL">
                        <i class="fa-solid fa-globe text-1xl"></i>
                    </a>
                @endif

                @if (isset($invitation))
                    @if ($siteConfigs["phone_number"]->value)
                        <a href="tel:{{ $siteConfigs["phone_number"]->value }}" class="hover:text-{{ $color }}-400" title="{{ $siteConfigs["phone_number"]->name }}" target="_blank">
                            <i class="fa-solid fa-phone text-1xl"></i>
                        </a>
                    @endif
                @else
                    <a href="javascript:void(0)" class="hover:text-{{ $color }}-400" title="Phone Number">
                        <i class="fa-solid fa-phone text-1xl"></i>
                    </a>
                @endif

                @if (isset($invitation))
                    @if ($siteConfigs["email"]->value)
                        <a href="mailto:{{ $siteConfigs["email"]->value }}" class="hover:text-{{ $color }}-400" title="{{ $siteConfigs["email"]->name }}" target="_blank">
                            <i class="fa-regular fa-envelope text-1xl"></i>
                        </a>
                    @endif
                @else
                    <a href="javascript:void(0)" class="hover:text-{{ $color }}-400" title="Email">
                        <i class="fa-regular fa-envelope text-1xl"></i>
                    </a>
                @endif

                @if (isset($invitation))
                    @if ($siteConfigs["whatsapp_number"]->value)
                        <a href="https://wa.me/{{ $siteConfigs["whatsapp_number"]->value }}" class="hover:text-{{ $color }}-400" title="{{ $siteConfigs["whatsapp_number"]->name }}" target="_blank">
                            <i class="fa-brands fa-whatsapp text-1xl"></i>
                        </a>
                    @endif
                @else
                    <a href="javascript:void(0)" class="hover:text-{{ $color }}-400" title="WhatsApp Number">
                        <i class="fa-brands fa-whatsapp text-1xl"></i>
                    </a>
                @endif

                @if (isset($invitation))
                    @if ($siteConfigs["instagram_url"]->value)
                        <a href="{{ $siteConfigs["instagram_url"]->value }}" class="hover:text-{{ $color }}-400" title="{{ $siteConfigs["instagram_url"]->name }}" target="_blank">
                            <i class="fa-brands fa-instagram text-1xl"></i>
                        </a>
                    @endif
                @else
                    <a href="javascript:void(0)" class="hover:text-{{ $color }}-400" title="Instagram URL">
                        <i class="fa-brands fa-instagram text-1xl"></i>
                    </a>
                @endif

                @if (isset($invitation))
                    @if ($siteConfigs["facebook_url"]->value)
                        <a href="{{ $siteConfigs["facebook_url"]->value }}" class="hover:text-{{ $color }}-400" title="{{ $siteConfigs["facebook_url"]->name }}" target="_blank">
                            <i class="fa-brands fa-facebook text-1xl"></i>
                        </a>
                    @endif
                @else
                    <a href="javascript:void(0)" class="hover:text-{{ $color }}-400" title="Facebook URL">
                        <i class="fa-brands fa-facebook text-1xl"></i>
                    </a>
                @endif

                @if (isset($invitation))
                    @if ($siteConfigs["tiktok_url"]->value)
                        <a href="{{ $siteConfigs["tiktok_url"]->value }}" class="hover:text-{{ $color }}-400" title="{{ $siteConfigs["tiktok_url"]->name }}" target="_blank">
                            <i class="fa-brands fa-tiktok text-1xl"></i>
                        </a>
                    @endif
                @else
                    <a href="javascript:void(0)" class="hover:text-{{ $color }}-400" title="TikTok URL">
                        <i class="fa-brands fa-tiktok text-1xl"></i>
                    </a>
                @endif

                @if (isset($invitation))
                    @if ($siteConfigs["x_url"]->value)
                        <a href="{{ $siteConfigs["x_url"]->value }}" class="hover:text-{{ $color }}-400" title="{{ $siteConfigs["x_url"]->name }}" target="_blank">
                            <i class="fa-brands fa-x text-1xl"></i>
                        </a>
                    @endif
                @else
                    <a href="javascript:void(0)" class="hover:text-{{ $color }}-400" title="X URL">
                        <i class="fa-brands fa-x text-1xl"></i>
                    </a>
                @endif
            </div>
            <div class="text-center">
                <p class="text-sm">
                    Copyright &copy; 2024 {{ $siteConfigs["site_name"]->value ?? "Site Name" }} by
                    <a href="{{ env("COPYRIGHT_URL", "Copyright URL") }}" target="_blank" class="text-{{ $color }}-400 font-semibold">
                        {{ env("COPYRIGHT_NAME", "Copyright Name") }}
                    </a>
                    . All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
