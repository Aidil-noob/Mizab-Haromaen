<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-serif text-xl font-bold">Lihat Video</h2>
            <a href="{{ route('admin.testimoni.index') }}" class="button button--primary">
                <x-lucide-step-back/> Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="card mx-auto max-w-md">
            <div class="card__body">
                <blockquote
                    class="instagram-media"
                    data-instgrm-permalink="{{ $testimoni->url }}" 
                    data-instgrm-version="14"
                >
                </blockquote>
            </div>
        </div>
    </div>
</x-app-layout>