<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-serif text-xl font-bold">Edit Video</h2>
            <a href="{{ route('admin.testimoni.index') }}" class="button button--primary">
                <x-lucide-step-back/> Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="card mx-auto max-w-md">
            <form action="{{ route('admin.testimoni.update', $testimoni) }}" method="POST" class="flex flex-col gap-4">
                @csrf @method('PUT')
    
                <div class="card__header rounded-t-md">                   
                    <label class="field__label text-[var(--color-primary-emphasis)]">URL</label>
                    <input type="url" name="url" class="input" value="{{ old('url', $testimoni->url) }}" required />
                </div>

                <div class="card__body">
                    <blockquote
                        class="instagram-media"
                        data-instgrm-permalink="{{ $testimoni->url }}" 
                        data-instgrm-version="14"
                    >
                    </blockquote>
                </div>
                    
                <div class="card__footer flex-row-reverse">
                    <button type="submit" class="button button--primary">
                        Perbarui
                    </button>
                    <button type="button" class="button button--danger">
                        Batal
                    </button>
                </div>
            </form> 
        </div>
    </div>
</x-app-layout>