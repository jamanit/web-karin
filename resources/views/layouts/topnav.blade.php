<nav id="topnav" class="defaultscroll is-sticky">
    <div class="relative container">
        <a class="logo" href="/">
            <span class="inline-block dark:hidden">
                @if ($siteConfigs["colored_logo"]->file)
                    <img src="{{ Storage::url($siteConfigs["colored_logo"]->file) }}" class="l-dark h-7 rounded-sm" alt="" />
                @else
                    <img src="{{ asset("/") }}assets/hoxia-v1/images/logo-dark.png" class="l-dark h-7 rounded-sm" alt="" />
                @endif

                @if ($siteConfigs["white_logo"]->file)
                    <img src="{{ Storage::url($siteConfigs["white_logo"]->file) }}" class="l-light h-7 rounded-sm" alt="" />
                @else
                    <img src="{{ asset("/") }}assets/hoxia-v1/images/logo-light.png" class="l-light h-7 rounded-sm" alt="" />
                @endif
            </span>

            @if ($siteConfigs["white_logo"]->file)
                <img src="{{ Storage::url($siteConfigs["white_logo"]->file) }}" class="hidden h-7 rounded-sm dark:inline-block" alt="" />
            @else
                <img src="{{ asset("/") }}assets/hoxia-v1/images/logo-white.png" class="hidden h-7 rounded-sm dark:inline-block" alt="" />
            @endif
        </a>

        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>

        <div id="navigation">
            <ul class="navigation-menu nav-light justify-end">
                <li><a href="/" class="sub-menu-item">Home</a></li>
                <li>
                    <a href="/#premium_applications" class="sub-menu-item">Premium Applications</a>
                </li>
                <li>
                    <a href="/#testimonials" class="sub-menu-item">Testimonials</a>
                </li>
                <li>
                    <a href="/#contact_us" class="sub-menu-item">Contact Us</a>
                </li>
                <li><a href="/#about_us" class="sub-menu-item">About Us</a></li>
            </ul>
        </div>
    </div>
</nav>
