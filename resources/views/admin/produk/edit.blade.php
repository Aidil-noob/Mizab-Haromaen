<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-xl font-bold">Edit Produk</h2>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4 max-w-lg">

            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
            @endif

            <form action="{{ route('admin.produk.update', $produk) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf @method('PUT')

                <div class="field">
                    <x-input-label :value="__('Nama Produk')"/>
                    <x-text-input name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}" required />
                </div>

                <div class="field">
                    <x-input-label :value="__('Deskripsi')"/>
                    <x-textarea-input name="deskripsi" rows="2" required>{{ old('deskripsi', $produk->deskripsi) }}</x-textarea-input>
                </div>

                <div class="field">
                    <x-input-label :value="__('Foto Produk')"/>
                    <input type="file" name="foto[]" class="input" multiple accept="image/*" />
                </div>

                <x-primary-button>Perbarui</x-primary-button>
                <x-secondary-button>Batal</x-secondary-button>
            </form>

            <div class="mt-6">
                <p class="font-semibold text-sm mb-2">Foto Saat Ini:</p>
                <div class="grid grid-cols-3 gap-3">
                    @foreach ($produk->foto as $foto)
                    <div class="relative">
                        <img src="{{ asset('storage/' . $foto->path) }}" class="w-full h-24 object-cover rounded" />
                        <button
                            type="submit"
                            form="hapus-foto-{{ $foto->id }}"
                            class="button button--sm button--danger button--icon-only absolute top-1 right-1"
                        >
                            <x-lucide-x/>
                        </button>
                        <form id="hapus-foto-{{ $foto->id }}" action="{{ route('admin.produk.foto.destroy', [$produk, $foto]) }}" method="POST">
                            @csrf @method('DELETE')
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>