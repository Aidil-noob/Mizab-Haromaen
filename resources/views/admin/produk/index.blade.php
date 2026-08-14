<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-serif text-xl font-bold">Kelola Produk</h2>
            <a href="{{ route('admin.produk.create') }}" class="button button--primary">+ Tambah Produk</a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4">

            @if(session('success'))
                <div 
                    class="alert alert--success"
                    x-data="{ open: true }"
                    x-show="open"
                >
                    <x-lucide-circle-check/>
                    {{session('success')}}
                    <div class="alert__action">
                        <button
                            type="button"
                            aria-label="hilangkan notif"
                            @click="open = false"
                            class="button button--ghost button--neutral button--icon-only button--success">
                            <x-lucide-x/>
                        </button>
                    </div>
                </div>
                <script src="//unpkg.com/alpinejs" defer></script>
            @endif

            <div class="card w-full">
                <div class="table-responsive">
                    
                    <table class="table table--align-middle table--hover">
                        <thead class="table__head--alt">
                            <tr>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Jumlah Foto</th>
                                <th scope="col" class="text-end">Aksi</th>
                            </tr>
                        </thead
                        <tbody>
                            @foreach($produk as $p)
                            <tr>
                                <td scope="row">{{ $p->nama_produk }}</td>
                                <td scope="row">{{ $p->foto_count }} foto</td>
                                <td class="text-end">
                                    <div class="button-group button-group--lg" role="group" aria-label="kelola produk">
                                        <a href="{{ route('admin.produk.edit', $p) }}" class="button lg:button--lg button--neutral button--icon-only icon-box--lg">
                                            <x-lucide-file-pen/>
                                        </a>
                                                
                                        {{-- tombol hapus --}}
                                        <button 
                                            class="button button--danger button--icon-only icon-box--lg"
                                            data-stisla-dialog-trigger="konfirmasiHapus-{{ $p->id }}"
                                        >
                                            <x-lucide-trash-2/>
                                        </button>
        
                                        {{-- notifikasi untuk konfirmasi hapus data --}}
                                        <div
                                            class="dialog dialog--sm" 
                                            id="konfirmasiHapus-{{ $p->id }}"
                                            data-stisla-dialog 
                                            aria-labelledby="label-konfirmasi-hapus-{{ $p->id }}"
                                            role="alertdialog"
                                            aria-describedby="deskripsi-konfirmasi-hapus-{{ $p->id }}"
                                        >
                                            <div
                                                class="dialog__backdrop" 
                                                data-stisla-dialog-dismiss
                                            >
                                            </div>
                                            <div class="dialog__panel">
                                                <div class="dialog__content">
                                                    <button 
                                                        class="dialog__close"
                                                        data-stisla-dialog-dismiss
                                                        aria-label="tutup"
                                                    >
                                                        <x-lucide-x/>
                                                    </button>
                                                    <div class="dialog__body text-center pt-6">
                                                        <span
                                                            class="icon-box icon-box--danger icon-box--circle mb-3"
                                                            style="--icon-box-size: 3rem; --icon-box-icon-size: 1.25rem;"
                                                        >
                                                            <x-lucide-trash-2/>
                                                        </span>
                                                        <h3 
                                                            class="dialog__title m-0 mb-1" 
                                                            id="label-konfirmasi-hapus-{{ $p->id }}"
                                                        >
                                                            Hapus data ini?
                                                        </h3>
                                                        <p 
                                                            class="text-muted-foreground m-0" 
                                                            id="deskripsi-konfirmasi-hapus-{{ $p->id }}"
                                                        >
                                                            Data yang dihapus, tidak dapat dipulihkan
                                                        </p>
                                                    </div>
                                                        <div class="dialog__footer justify-center">
                                                            <button
                                                                class="button button--ghost button--neutral text-[#0F0B0A]"
                                                                data-stisla-dialog-dismiss
                                                            >
                                                                Batal
                                                            </button>
                                                            <button
                                                                data-stisla-dialog-dismiss 
                                                                type="submit"
                                                                class="button button--danger"
                                                                aria-label="hapus"
                                                                form="hapus-produk-{{ $p->id }}" {{-- menyambungkan tombol dengan form --}}
                                                            >
                                                                Hapus
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a
                                                href="{{route('admin.produk.show', $p)}}"
                                                class="button button--icon-only"
                                                aria-label="lihat foto produk"
                                                style="--button-tone: oklch(0.65 0.18 55); --button-color: white;"
                                            >
                                                <x-lucide-eye/>
                                            </a>
                                        </div>

                                        <form 
                                            id="hapus-produk-{{ $p->id }}"
                                            action="{{ route('admin.produk.destroy', $p) }}"
                                            method="POST"
                                        >
                                            @csrf @method('DELETE')
                                        </form>
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