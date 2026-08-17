<nav class="navbar" data-stisla-navbar>
    <a class="navbar__brand" href="{{ route('dashboard') }}">
        <img class="h-auto w-50" src="{{ asset('storage/ikon/IMG_7540.webp') }}"/>
    </a>
    <button class="navbar__toggle" data-stisla-navbar-toggle aria-expanded="false">
        <x-lucide-equal/>
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