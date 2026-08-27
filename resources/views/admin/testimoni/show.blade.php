<x-app-layout>
    <x-slot name="header">
        <x-breadcrumb>
            <x-breadcrumb-item href="{{ route('dashboard') }}" label="Dasbor"/>
            <x-breadcrumb-item href="{{ route('admin.testimoni.index') }}" label="Video Testimoni"/>
            <x-breadcrumb-item aria-current="page" label="Lihat Video Testimoni"/>
        </x-breadcrumb>
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