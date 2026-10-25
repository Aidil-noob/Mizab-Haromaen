<x-app-layout>
    <x-slot name="header">
        <x-breadcrumb>
            <x-breadcrumb-item href="{{ route('dashboard') }}" label="Dasbor"/>
            <x-breadcrumb-item href="{{ route('admin.paket.index') }}" label="Paket Umroh"/>
            <x-breadcrumb-item aria-current="page" label="Ubah Paket Umroh"/>
        </x-breadcrumb>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4 max-w-lg">
            <form action="{{ route('admin.paket.update', $paket) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf @method('PUT')

                <div class="field">
                    <x-input-label :value="__('Nama Paket')"/>
                    <x-text-input
                        :error="$errors->has('nama_paket') ? true : false" 
                        aria-describedby="paketError" 
                        type="text"
                        name="nama_paket" 
                        value="{{ old('nama_paket', $paket->nama_paket) }}"
                    />
                    <x-input-error id="paketError" :message="$errors->first('nama_paket')"/>
                </div>

                <div class="field">
                    <x-input-label :value="__('Gambar Paket')"/>
                    @if ($paket->gambar)
                        <img
                            src="{{ Storage::disk('public')->url($paket->gambar) }}"
                            alt="{{ $paket->nama_paket }}"
                            class="mb-2 rounded-lg w-40 h-28 object-cover"
                        />
                    @endif
                    <x-text-input
                        type="file"
                        name="gambar"
                        accept="image/jpeg,image/png,image/webp"
                        :error="$errors->has('gambar') ? true : false"
                        aria-describedby="gambarError"
                    />
                    <p class="text-sm text-muted-foreground mt-1">
                        Format: JPG, PNG, atau WebP. Maksimal 2 MB.
                        @if ($paket->gambar)
                            Biarkan kosong jika gambar tidak diganti.
                        @endif
                    </p>
                    <x-input-error id="gambarError" :message="$errors->first('gambar')"/>
                </div>

                <div class="field">
                    <x-input-label :value="__('Nama Hotel Madinah')"/>
                    <x-text-input
                        :error="$errors->has('nama_hotel_madinah') ? true : false"
                        aria-describedby="madinahError"
                        type="text"
                        name="nama_hotel_madinah"
                        value="{{ old('nama_hotel_madinah', $paket->nama_hotel_madinah) }}"
                    />
                    <x-input-error id="madinahError" :message="$errors->first('nama_hotel_madinah')"/>
                </div>

                <div class="field">
                    <x-input-label :value="__('Nama Hotel Makkah')"/>
                    <x-text-input
                        :error="$errors->has('nama_hotel_makkah') ? true : false"
                        aria-describedby="makkahError"
                        type="text" 
                        name="nama_hotel_makkah"
                        value="{{ old('nama_hotel_makkah', $paket->nama_hotel_makkah) }}"
                    />
                    <x-input-error id="makkahError" :message="$errors->first('nama_hotel_makkah')"/>
                </div>

                <div class="field">
                    <x-input-label :value="__('Rating Hotel')"/>
                    <x-text-input 
                        type="number"
                        name="rating" 
                        value="{{ old('rating', $paket->rating) }}"
                        :error="$errors->has('rating') ? true : false"
                        aria-describedby="ratingError"
                    />
                    <x-input-error id="ratingError" :message="$errors->first('rating')"/>
                </div>

                <div class="field">
                    <x-input-label :value="__('Harga Paket')"/>
                    <x-input-group>
                        <span class="input-group__text">Rp</span>
                        <x-text-input 
                            type="number" 
                            name="harga" 
                            value="{{ old('harga', $paket->harga) }}"
                            :error="$errors->has('harga') ? true : false"
                            aria-describedby="hargaError"
                        />
                    </x-input-group>
                    <x-input-error id="hargaError" :message="$errors->first('harga')"/>
                    </div>

                <div class="field flex-row-reverse">
                    <x-primary-button>Perbarui</x-primary-button>
                    <x-danger-button>Batal</x-danger-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>