@props(['umroh'])

{{-- paket umroh --}}
<section class="page__section" id="paket">
    <div class="page__section-header justify-center bg-primary py-4 mb-4 md:mb-10 mt-30">
        <h2 class="page__section-title text-2xl lg:text-4xl">
            DAFTAR PAKET UMROH
        </h2>
    </div>
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
        @foreach ($umroh as [$p, $h])
            <x-paket-card :paket="$p" :gambar="$h"/>
        @endforeach
    </div>
    <x-paket-includes/>
</section>
