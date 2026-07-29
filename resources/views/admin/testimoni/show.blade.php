<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-xl font-bold">Lihat Video</h2>
    </x-slot>

    <div class="py-8">
        <div class="card mx-auto max-w-md">
            <div class="card__header">
                <div class="card__action">
                    <a 
                        class="button button--sm"
                        href="{{ route('admin.testimoni.index') }}"
                    >
                        Kembali 
                    </a>
                </div>
            </div>
            <div class="card__body">
                <blockquote
                    class="instagram-media"
                    data-instgrm-permalink="{{ $testimoni->url }}" 
                    data-instgrm-version="14"
                >
                    <a href="{{ $testimoni->url }}"></a>
                </blockquote>
            </div>
        </div>
    </div>
</x-app-layout>