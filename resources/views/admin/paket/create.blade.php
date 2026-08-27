<x-app-layout>
    <x-slot name="header">
        <x-breadcrumb>
            <x-breadcrumb-item href="{{ route('dashboard') }}" label="Dasbor"/>
            <x-breadcrumb-item href="{{ route('admin.paket.index') }}" label="Paket Umroh"/>
            <x-breadcrumb-item label="Tambah Paket Umroh" aria-current="page"/>
        </x-breadcrumb>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4 max-w-lg">
            <form action="{{ route('admin.paket.store') }}" method="POST" class="flex flex-col gap-4" novalidate>
                @csrf

                <div class="field">
                    <x-input-label :value="__('Nama Paket')"/>
                    <x-text-input
                        :error="$errors->has('nama_paket') ? true : false" 
                        aria-describedby="paketError" 
                        type="text"
                        name="nama_paket" 
                        value="{{ old('nama_paket') }}"
                    />
                    <x-input-error id="paketError" :message="$errors->first('nama_paket')"/>
                </div>

                <div class="field">
                    <x-input-label :value="__('Nama Hotel Madinah')"/>
                    <x-text-input
                        :error="$errors->has('nama_hotel_madinah') ? true : false"
                        aria-describedby="madinahError"
                        type="text"
                        name="nama_hotel_madinah"
                        value="{{ old('nama_hotel_madinah') }}"
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
                        value="{{ old('nama_hotel_makkah') }}"
                    />
                    <x-input-error id="makkahError" :message="$errors->first('nama_hotel_makkah')"/>
                </div>

                <div class="field">
                    <x-input-label :value="__('Rating Hotel')"/>
                    <x-text-input 
                        type="number"
                        name="rating" 
                        value="{{ old('rating') }}"
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
                            value="{{ old('harga') }}"
                            :error="$errors->has('harga') ? true : false"
                            aria-describedby="hargaError"
                        />
                    </x-input-group>
                    <x-input-error id="hargaError" :message="$errors->first('harga')"/>
                </div>

                <div class="field flex-row-reverse">
                    <x-primary-button>Simpan</x-primary-button>       
                    <x-danger-button>Batal</x-danger-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>