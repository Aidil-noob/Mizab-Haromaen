<x-app-layout>
    <x-slot name="header">
        <x-breadcrumb>
            <x-breadcrumb-item href="{{ route('dashboard') }}" label="Dasbor"/>
            <x-breadcrumb-item href="{{ route('admin.testimoni.index') }}" label="Video Testimoni"/>
            <x-breadcrumb-item aria-current="page" label="Ubah Video Testimoni"/>
        </x-breadcrumb>
    </x-slot>

    <div class="py-8">
        <div class="card mx-auto max-w-md">
            <form novalidate action="{{ route('admin.testimoni.update', $testimoni) }}" method="POST" class="flex flex-col gap-4">
                @csrf @method('PUT')
    
                <div class="card__header flex-wrap py-2 rounded-t-md bg-(--color-primary)">                   
                    <x-input-label class="text-(--color-primary-emphasis)" :value="__('Tautan')"/>
                    <x-text-input
                        type="url"
                        name="url"
                        :error="$errors->has('url') ? true : false"
                        value="{{ old('url', $testimoni->url) }}"
                        id="input-url"
                        aria-describedby="urlError"
                    />
                    <x-input-error id="urlError" :message="$errors->first('url')"/>
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
                    <x-primary-button>Perbarui</x-primary-button>
                    <x-danger-button>Batal</x-danger-button>
                </div>
            </form> 
        </div>
    </div>
</x-app-layout>