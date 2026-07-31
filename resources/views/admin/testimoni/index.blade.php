<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-serif text-xl font-bold">
                Kelola Video Testimoni Jamaah
            </h2>
            <a
                href="{{ route('admin.testimoni.create') }}"
                class="button button--primary"
            >
                + Tambah Video
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4">
            @if (session('success'))
                <div class="alert alert--success" x-data="{ open: true }" x-show="open">
                    <x-lucide-circle-check/>
                    {{ session('success') }}
                    <div class="alert__action">
                        <button
                            type="button"
                            aria-label="hilangkan notif"
                            @click="open = false"
                            class="button button--ghost button--neutral button--icon-only button--success"
                        >
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
                                <th scope="col">Indeks</th>
                                <th scope="col">URL</th>
                                <th scope="col" class="text-end">Aksi</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach ($testimoni as $t)
                            <tr>
                                <td scope="row">{{ $t->id }}</td>
                                <td scope="row">{{ $t->url }}</td>
                                <td class="text-end">
                                    <div class="button-group" role="group" aria-label="kelola data">             
                                        <a 
                                            href="{{ route('admin.testimoni.edit', $t) }}"
                                            aria-label="ubah"
                                            class="button button--sm lg:button--lg button--neutral button--icon-only"
                                        >    
                                            <x-lucide-file-pen/>
                                        </a>

                                        <button 
                                            class="button button--sm button--danger button--icon-only"
                                            data-stisla-dialog-trigger="konfirmasiHapus-{{ $t->id }}"
                                        >
                                            <x-lucide-trash-2/>
                                        </button>
                                            
                                        <div
                                            class="dialog dialog--sm" 
                                            id="konfirmasiHapus-{{ $t->id }}"
                                            data-stisla-dialog 
                                            aria-labelledby="label-konfirmasi-hapus-{{ $t->id }}"
                                            role="alertdialog"
                                            aria-describedby="deskripsi-konfirmasi-hapus-{{ $t->id }}"
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
                                                            id="label-konfirmasi-hapus-{{ $t->id }}"
                                                        >
                                                            Hapus data ini?
                                                        </h3>
                                                        <p 
                                                            class="text-muted-foreground m-0" 
                                                            id="deskripsi-konfirmasi-hapus-{{ $t->id }}"
                                                        >
                                                            Data yang dihapus, tidak dapat dipulihkan
                                                        </p>
                                                    </div>
                                                    <div class="dialog__footer justify-center">
                                                        <button
                                                            class="button button--ghost button--neutral"
                                                            data-stisla-dialog-dismiss
                                                        >
                                                            Batal
                                                        </button>
                                                        <button
                                                            data-stisla-dialog-dismiss 
                                                            type="submit"
                                                            class="button button--danger"
                                                            aria-label="hapus"
                                                            form="hapus-{{ $t->id }}" {{-- menyambungkan tombol dengan form --}}
                                                        >
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a
                                            href="{{ route('admin.testimoni.show', $t) }}"
                                            aria-label="lihat"
                                            class="button button--sm button--icon-only"
                                            style="--button-tone: oklch(0.65 0.18 55); --button-color: white;"
                                        >
                                            <x-lucide-eye/>
                                        </a>
                                    </div>
                                    <form
                                        id="hapus-{{ $t->id }}"
                                        action="{{ route('admin.testimoni.destroy', $t) }}"
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