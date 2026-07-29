<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-xl font-bold">Edit Paket</h2>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4 max-w-lg">
            <form action="{{ route('admin.paket.update', $paket) }}" method="POST" class="flex flex-col gap-4">
                @csrf @method('PUT')

                <div class="field">
                    <label class="field__label">Nama Paket</label>
                    <input type="text" name="nama_paket" class="input" value="{{ old('nama_paket', $paket->nama_paket) }}" required />
                </div>

                <div class="field">
                    <label class="field__label">Hotel Madinah</label>
                    <input type="text" name="nama_hotel_madinah" class="input" value="{{ old('nama_hotel_madinah', $paket->nama_hotel_madinah) }}" required />
                </div>

                <div class="field">
                    <label class="field__label">Hotel Makkah</label>
                    <input type="text" name="nama_hotel_makkah" class="input" value="{{ old('nama_hotel_makkah', $paket->nama_hotel_makkah) }}" required />
                </div>

                <div class="field">
                    <label class="field__label">Harga (Rp)</label>
                    <input type="number" name="harga" class="input" value="{{ old('harga', $paket->harga) }}" required />
                </div>

                <button type="submit" class="button button--primary">Perbarui</button>
                <button type="reset" class="button button--neutral">Batal</button>
            </form>
        </div>
    </div>
</x-app-layout>