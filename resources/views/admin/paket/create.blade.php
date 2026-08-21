<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-serif text-xl font-bold">Tambah Paket</h2>
           <a href="{{ route('admin.paket.index') }}" class="button button--primary">
                <x-lucide-step-back/> Kembali
           </a> 
        </div>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4 max-w-lg">
            <form action="{{ route('admin.paket.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf

                <div class="field">
                    <x-input-label :value="__('Nama Paket')"/>
                    <x-text-input type="text" name="nama_paket" value="{{ old('nama_paket') }}" required />
                </div>

                <div class="field">
                    <x-input-label :value="__('Nama Hotel Madinah')"/>
                    <x-text-input type="text" name="nama_hotel_madinah" value="{{ old('nama_hotel_madinah') }}" required />
                </div>

                <div class="field">
                    <x-input-label :value="__('Nama Hotel Makkah')"/>
                    <x-text-input type="text" name="nama_hotel_makkah" value="{{ old('nama_hotel_makkah') }}" required />
                </div>

                <div class="field">
                    <x-input-label :value="__('Rating Hotel')"/>
                    <x-text-input type="number" name="rating" value="{{ old('rating') }}" required />
                </div>

                <div class="field">
                    <x-input-label :value="__('Harga Paket')"/>
                    <x-text-input type="number" name="harga" value="{{ old('harga') }}" required />
                </div>

                <div class="field flex-row-reverse">
                    <x-primary-button>Simpan</x-primarbutton>
                    <button type="reset" class="button button--danger">Batal</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>