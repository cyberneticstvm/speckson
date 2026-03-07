<header class="header-three eight five header--sticky" style="position: relative;">
    <a href="{{ route('index', 'all') }}" class="logo-area">
        <img src="{{ asset('/assets/images/logo/speckson.svg') }}" alt="logo" width="35%">
    </a>
    <div class="header-right">
        <div class="nav-area-center">
            <nav class="navigation">
                <ul class="parent-ul">
                    <li>
                        <a class="nav-link" href="{{ route('index', 'all') }}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('index', 'frim') }}">Full Rim</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('index', 'srim') }}">Semi Rim</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('index', 'rless') }}">Rimless</a>
                    </li>
                    <li class="has-dropdown">
                        <a class="nav-link" href="#">Blogs</a>
                        <ul class="submenu">
                            <li class="lim"><a class="sdm-main" href="blog.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="action-area" id="menu-btn">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                    <rect x="6" width="18" height="2" fill="#D9D9D9"></rect>
                    <rect x="10" y="14" width="14" height="2" fill="#D9D9D9"></rect>
                    <rect y="7" width="24" height="2" fill="#D9D9D9"></rect>
                </svg>
            </div>
            <span>Menu</span>
        </div>
    </div>
</header>