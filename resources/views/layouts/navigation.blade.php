<nav class="navbar" data-stisla-navbar>
    <a class="navbar__brand">
        <img class="h-50 w-auto" src="{{ asset('storage/ikon/IMG_7540.png') }}"/>
    </a>
    <button class="navbar__toggle" data-stisla-navbar-toggle aria-expanded="false">
        <i data-lucide="menu"></i>
    </button>
    <div class="navbar__menu">
        <ul class="navbar__nav">
            <li>
                <a 
                    href="{{ route('dashboard') }}" 
                    class="navbar__button"
                    @if (request()->routeIs('dashboard'))
                        data-state="active"
                    @endif
                >
                    Dasbor
                </a>
            </li>
            <li>
                <a 
                    href="{{ route('admin.paket.index') }}" 
                    class="navbar__button"
                    @if (request()->routeIs('admin.paket.*'))
                        data-state="active"
                    @endif
                >
                    Paket Umroh
                </a>
            </li>
            <li>
                <a 
                    href="{{ route('admin.testimoni.index') }}" 
                    class="navbar__button"
                    @if (request()->routeIs('admin.testimoni.*'))
                        data-state="active"
                    @endif
                >
                    Video Testimoni
                </a>
            </li>
        </ul>
    </div>
</nav>