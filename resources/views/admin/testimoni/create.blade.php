<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-serif text-xl font-bold">Tambah Video Testimoni</h2>
            <a href="{{ route('admin.testimoni.index') }}" class="button button--primary">
                <x-lucide-step-back/> Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="card mx-auto max-w-md">
            <form action="{{ route('admin.testimoni.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf
    
                <div class="card__header rounded-t-md">                   
                    <label class="field__label text-[var(--color-primary-emphasis)]">URL</label>
                    <input
                        type="url"
                        name="url"
                        class="input"
                        value="{{ old('url') }}"
                        required 
                        id="input-url"
                    />
                </div>

                <div class="card__body items-center">
                    <div id="reels"></div>
                </div>
                    
                <div class="card__footer flex-row-reverse">
                    <button type="submit" class="button button--primary">
                        Unggah
                    </button>
                    <button type="reset" class="button button--danger">
                        Batal
                    </button>
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
            if (!url || !url.trim()) 
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