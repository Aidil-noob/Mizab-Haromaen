<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">     
            <h2 class="font-serif text-xl font-bold">
                Kelola Paket Umroh
            </h2>
            <a href="{{ route('admin.paket.create') }}" class="button button--primary">
                + Tambah Paket
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4">
            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card w-full">
                <div class="table-responsive">            
                    <table class="table table--align-middle table--hover">
                        <thead class="table__head--alt">
                            <tr>
                                <th scope="col">Nama Paket</th>
                                <th scope="col">Hotel Madinah</th>
                                <th scope="col">Hotel Makkah</th>
                                <th scope="col">Harga</th>
                                <th scope="col" class="text-end">Aksi</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach ($paket as $p)
                            <tr>
                                <td class="py-2">{{ $p->nama_paket }}</td>
                                <td>{{ $p->nama_hotel_madinah }}</td>
                                <td>{{ $p->nama_hotel_makkah }}</td>
                                <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                                <td class="text-end">
                                    <div class="flex flex-wrap items-center justify-end gap-1">             
                                        <a 
                                            href="{{ route('admin.paket.edit', $p) }}"
                                            aria-label="ubah"
                                        >
                                            <button class="button button--sm button--neutral">
                                                Ubah
                                            </button>
                                        </a>
                                        <form
                                            action="{{ route('admin.paket.destroy', $p) }}"
                                            onsubmit="return confirm('Anda yakin?\nData yang dihapus tidak dapat dipulihkan')"
                                        >
                                            @csrf @method('DELETE')
                                            <button
                                                type="submit"
                                                class="button button--sm button--danger"
                                                aria-label="hapus"
                                            >
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>