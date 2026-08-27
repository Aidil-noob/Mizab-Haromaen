<x-app-layout>
    <x-slot name="header">
        <x-breadcrumb>
            <x-breadcrumb-item href="{{ route('dashboard') }}" label="Dasbor"/>
            <x-breadcrumb-item href="{{ route('admin.testimoni.index') }}" label="Video Testimoni"/>
            <x-breadcrumb-item aria-current="page" label="Tambah Video Testimoni"/>
        </x-breadcrumb>
    </x-slot>

    <div class="py-8">
        <div class="card mx-auto max-w-md">
            <form action="{{ route('admin.testimoni.store') }}" method="POST" class="flex flex-col gap-4" novalidate>
                @csrf
    
                <div class="card__header flex-wrap py-2 rounded-t-md bg-(--color-primary)">                   
                    <x-input-label class="text-(--color-primary-emphasis)" :value="__('Tautan')"/>
                    <x-text-input
                        type="url"
                        name="url"
                        :error="$errors->has('url') ? true : false"
                        value="{{ old('url') }}"
                        id="input-url"
                        aria-describedby="urlError"
                    />
                    <x-input-error id="urlError" :message="$errors->first('url')"/>
                </div>

                <div class="card__body items-center">
                    <div id="reels"></div>
                </div>
                    
                <div class="card__footer flex-row-reverse">
                    <x-primary-button>Unggah</x-primary-button>
                    <x-danger-button>Batal</x-danger-button>
                </div>
            </form> 
        </div>
    </div>
    <script>
        const url = document.getElementById('input-url');
        const reel  = document.getElementById('reels');
        const form = document.querySelector('form');
        
        function TampilkanReel(url) 
        {
            // jangan tampilkan jika tidak ada url 
            if (!url) 
            {
                return reel.innerHTML = `
                    <div class="empty-state empty-state--sm">
                        <span class="empty-state__media">
                              <x-lucide-upload/>  
                        </span>
                        <h3 class="empty-state__title">Belum Ada Video</h3>
                        <p class="empty-state__text">Masukkan URL untuk menampilkan video secara otomatis</p>
                    </div>
                `;
                
            }

            // tampilkan video
            reel.innerHTML = `
                <blockquote 
                    class="instagram-media" 
                    data-instgrm-permalink="${url}" 
                    data-instgrm-version="14"
                >
                </blockquote>
            `;
        
            // Panggil fungsi render ulang dari script Instagram
            if (window.instgrm) 
            {
                window.instgrm.Embeds.process();
            }
        }
        
        // tampilkan video saat input berubah atau diketik/paste
        url.addEventListener('input', function() 
        {
            TampilkanReel(this.value);
        });

        // tampilkan empty state saat klik tombol reset 
        form.addEventListener('reset', function() {
            setTimeout(() => { //memastikan input url kosong sebelum jalanin fungsi TampilkanReel()
                TampilkanReel('');
            }, 0);
        });
        
        // jalankan saat halaman dimuat
        TampilkanReel(url.value);
    </script>
</x-app-layout>