<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <x-breadcrumb>
                <x-breadcrumb-item href="{{ route('dashboard') }}" label="Dasbor"/>
                <x-breadcrumb-item label="Akun Admin" aria-current="page"/>
            </x-breadcrumb>
            <a href="{{ route('admin.akun.create') }}" class="button button--primary button--xl">
                <x-lucide-user-plus/> Tambah Akun
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
            @if (session('error'))
                <div class="alert alert--danger" x-data="{ open: true }" x-show="open">
                    <x-lucide-octagon-alert/>
                    {{ session('error') }}
                    <div class="alert__action">
                        <button
                            type="button"
                            aria-label="hilangkan notif"
                            @click="open = false"
                            class="button button--ghost button--neutral button--icon-only button--danger"
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
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Peran</th>
                                <th scope="col">Dibuat</th>
                                <th scope="col" class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($akun as $a)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $a->name }}</td>
                                <td>{{ $a->email }}</td>
                                <td>
                                    @if (in_array($a->email, $superAdminEmails))
                                        <span class="badge badge--primary">Super Admin</span>
                                    @else
                                        <span class="badge badge--soft">Admin</span>
                                    @endif
                                    @if ($a->id === auth()->id())
                                        <span class="badge badge--success">Anda</span>
                                    @endif
                                </td>
                                <td>{{ $a->created_at ? $a->created_at->format('d-m-Y') : '—' }}</td>
                                <td class="text-end">
                                    <div class="button-group button-group--lg" role="group" aria-label="kelola data">

                                        {{-- tombol ubah data --}}
                                        <a
                                            href="{{ route('admin.akun.edit', $a) }}"
                                            aria-label="ubah"
                                            class="button button--sm button--neutral button--icon-only"
                                        >
                                            <x-lucide-file-pen/>
                                        </a>

                                        @if ($a->id !== auth()->id() && !in_array($a->email, $superAdminEmails))
                                            {{-- tombol hapus --}}
                                            <button
                                                class="button button--sm button--danger button--icon-only rounded-r-lg"
                                                data-stisla-dialog-trigger="konfirmasiHapus-{{ $a->id }}"
                                            >
                                                <x-lucide-trash-2/>
                                            </button>

                                            {{-- notifikasi untuk konfirmasi hapus data --}}
                                            <div
                                                class="dialog dialog--sm"
                                                id="konfirmasiHapus-{{ $a->id }}"
                                                data-stisla-dialog
                                                aria-labelledby="label-konfirmasi-hapus-{{ $a->id }}"
                                                role="alertdialog"
                                                aria-describedby="deskripsi-konfirmasi-hapus-{{ $a->id }}"
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
                                                                id="label-konfirmasi-hapus-{{ $a->id }}"
                                                            >
                                                                Hapus data ini?
                                                            </h3>
                                                            <p
                                                                class="text-muted-foreground m-0"
                                                                id="deskripsi-konfirmasi-hapus-{{ $a->id }}"
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
                                                                form="hapus-{{ $a->id }}" {{-- menyambungkan tombol dengan form --}}
                                                            >
                                                                Hapus
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <form
                                                id="hapus-{{ $a->id }}"
                                                action="{{ route('admin.akun.destroy', $a) }}"
                                                method="POST"
                                            >
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted-foreground py-6">
                                    Belum ada akun admin.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
