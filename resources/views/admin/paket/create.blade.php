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
                    <label class="field__label">Nama Paket</label>
                    <input type="text" name="nama_paket" class="input" value="{{ old('nama_paket') }}" required />
                </div>

                <div class="field">
                    <label class="field__label">Hotel Madinah</label>
                    <input type="text" name="nama_hotel_madinah" class="input" value="{{ old('nama_hotel_madinah') }}" required />
                </div>

                <div class="field">
                    <label class="field__label">Hotel Makkah</label>
                    <input type="text" name="nama_hotel_makkah" class="input" value="{{ old('nama_hotel_makkah') }}" required />
                </div>

                <div class="field">
                    <label class="field__label">Harga (Rp)</label>
                    <input type="number" name="harga" class="input" value="{{ old('harga') }}" required />
                </div>

                <div class="field flex-row-reverse">
                    <button type="submit" class="button button--primary">Simpan</button>
                    <button type="reset" class="button button--danger">Batal</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>