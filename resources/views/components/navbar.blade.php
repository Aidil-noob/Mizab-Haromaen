@props(['brandHref' => null, 'items' => [], 'menuState' => null])

<nav {{ $attributes->merge(['class' => 'navbar']) }} data-stisla-navbar>
   <a class="navbar__brand" @if ($brandHref) href="{{ $brandHref }}" @endif>
      <img
         src="{{ asset('storage/ikon/IMG_7540.webp') }}"
         class="h-auto w-50"
         alt="Mizab Haromaen"
      />
   </a>
   <button
      class="navbar__toggle"
      data-stisla-navbar-toggle
      aria-expanded="false"
   >
      <x-lucide-equal/>
   </button>
   <div class="navbar__menu" @if ($menuState) data-state="{{ $menuState }}" @endif>
      <ul class="navbar__nav">
         @foreach ($items as $item)
            <li>
               <a
                  href="{{ $item['href'] }}"
                  class="navbar__button"
                  @if ($item['active'] ?? false) data-state="active" @endif
               >{{ $item['label'] }}</a>
            </li>
         @endforeach
      </ul>
      {{ $action ?? '' }}
   </div>
</nav>
