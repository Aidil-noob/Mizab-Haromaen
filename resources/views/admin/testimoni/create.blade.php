<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-xl font-bold">Tambah Video Testimoni</h2>
    </x-slot>

    <div class="py-8">
        <div class="card mx-auto max-w-md">
            <form action="{{ route('admin.testimoni.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf
    
                <div class="card__header rounded-t-md">                   
                    <x-input-label class="field__label" :value="__('URL')"/>
                    <div class="input-group">
                        <x-text-input
                            type="url"
                            name="url"
                            class="input"
                            value="{{ old('url') }}"
                            required 
                            id="input-url"
                        />
                    </div>
                </div>

                <div class="card__body items-center">
                    <div id="reels"></div>
                </div>
                    
                <div class="card__footer flex justify-end">
                    <x-primary-button>
                        Unggah
                    </x-primary-button>
                    <x-secondary-button>
                        Batal
                    </x-secondary-button>
                </div>
            </form> 
        </div>
    </div>
    <script>
        const url = document.getElementById('input-url');
        const reel  = document.getElementById('reels');
        
        function TampilkanReel(url) 
        {
            // jangan tampilkan jika tidak ada url 
            if (!url) 
            {
                reel.innerHTML = '';
                return;
            }
        
            reel.innerHTML = `
                <blockquote 
                    class="instagram-media" 
                    data-instgrm-permalink="${url}" 
                    data-instgrm-version="14"
                </blockquote>
            `;
        
            // Panggil fungsi render ulang dari script Instagram
            if (window.instgrm) 
            {
                window.instgrm.Embeds.process();
            }
        }
        
        // Jalankan saat input berubah atau diketik/paste
        url.addEventListener('input', function() 
        {
            TampilkanReel(this.value);
        });
        
        // Jalankan saat halaman pertama dimuat (jika ada nilai lama / old input)
        if (url.value) 
        {
            TampilkanReel(url.value);
        }
    </script>
</x-app-layout>