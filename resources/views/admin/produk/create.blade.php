<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-xl font-bold">Tambah Produk</h2>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4 max-w-lg">
            <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf

                <div class="field">
                    <x-input-label :value="__('Nama Produk')"/>
                    <x-text-input name="nama_produk" value="{{ old('nama_produk') }}" required />
                </div>

                <div class="field">
                    <x-input-label :value="__('Deskripsi')"/>
                    <x-textarea-input name="deskripsi" rows="2" required>{{ old('deskripsi') }}</x-textarea-input>
                </div>

                <div class="field">
                    <x-input-label :value="__('Foto Produk')"/>
                    <input type="file" name="foto[]" class="input" multiple accept="image/*" required />
                </div>

                <x-primary-button>Simpan</x-primary-button>
                <x-secondary-button>Batal</x-secondary-button>
            </form>
        </div>
    </div>
</x-app-layout>