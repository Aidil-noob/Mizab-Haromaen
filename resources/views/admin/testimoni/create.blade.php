<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-xl font-bold">Tambah Video Testimoni</h2>
    </x-slot>

    <div class="py-8">
        <div class="card mx-auto max-w-md">
            <form action="{{ route('admin.testimoni.update', $testimoni) }}" method="POST" class="flex flex-col gap-4">
                @csrf
    
                <div class="card__header rounded-t-md">                   
                    <label class="field__label">URL</label>
                    <input type="url" name="url" class="input" value="{{ old('url', $testimoni->url) }}" required />
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
                    
                <div class="card__footer flex justify-end">
                    <button type="submit" class="button button--primary">
                        Perbarui
                    </button>
                    <button type="reset" class="button button--neutral">
                        Batal
                    </button>
                </div>
            </form> 
        </div>
    </div>
</x-app-layout>