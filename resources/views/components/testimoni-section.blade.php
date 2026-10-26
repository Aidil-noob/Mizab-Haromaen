@props(['testimoni'])

{{-- testimoni --}}
<section class="page__section w-full" id="ulasan">
    <div class="page__section-header justify-center bg-primary py-4 mb-4 md:mb-10 mt-30">
        <h2 class="page__section-title text-2xl lg:text-4xl">
            TESTIMONI JAMAAH
        </h2>
    </div>
    {{-- reels instagram (desktop) dalam layout grid --}}
    <div class="md:grid md:grid-cols-2 hidden lg:grid-cols-3 xl:grid-cols-4 mt-6 gap-6">
        @foreach ($testimoni as $t)
            <blockquote
                class="instagram-media"
                data-instgrm-permalink="{{ $t->url }}"
                data-instgrm-version="14"
            >
            </blockquote>
        @endforeach
    </div>
    {{-- reels instagram (mobile) dalam bentuk carousel --}}
    <div
        class="carousel carousel--no-aspect md:hidden"
        data-stisla-carousel
        data-stisla-carousel-loop="true"
        tabindex="0"
        role="region"
        aria-roledescription="carousel"
        aria-label="testimoni jamaah"
    >
        <div class="carousel__viewport">
            <div class="carousel__track">
                @foreach ($testimoni as $t)
                <div
                    class="carousel__slide"
                    role="group"
                    aria-roledescription="slide"
                >
                    <blockquote
                        class="instagram-media w-full"
                        data-instgrm-permalink="{{ $t->url }}"
                        data-instgrm-version="14"
                    >
                    </blockquote>
                </div>
                @endforeach
            </div>
        </div>
        <button
            type="button"
            class="carousel__control carousel__control--prev"
            aria-label="sebelumnya"
        >
            <x-lucide-chevron-left/> {{-- geser ke kiri --}}
        </button>
        <button
            type="button"
            class="carousel__control carousel__control--next"
            aria-label="selanjutnya"
        >
            <x-lucide-chevron-right/> {{-- geser ke kanan --}}
        </button>
    </div>
</section>
