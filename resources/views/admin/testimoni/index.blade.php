<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-xl font-bold">
            Kelola Video Testimoni Jamaah
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4">
            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card w-full">
                <div class="card__header card__header--alt">
                    <div class="card__action">
                        <a
                            href="{{ route('admin.testimoni.create') }}"
                            class="button button--primary button--sm"
                        >
                            + Tambah Video
                        </a>
                    </div>
                </div>
                <div class="table-responsive">            
                    <table class="table table--align-middle table--hover">
                        <thead class="table__head--alt">
                            <tr>
                                <th scope="col">URL</th>
                                <th scope="col" class="text-end">Aksi</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach ($testimoni as $t)
                            <tr>
                                <td class="py-2">{{ $t->url }}</td>
                                <td class="text-end">
                                    <div class="button-group" role="group" aria-label="kelola data">             
                                        <a 
                                            href="{{ route('admin.testimoni.edit', $t) }}"
                                            aria-label="ubah"
                                            class="button button--sm button--neutral button--icon-only"
                                        >    
                                            @svg('file-pen', 'h-4 w-4')
                                        </a>
                                        <form
                                            action="{{ route('admin.testimoni.destroy', $t) }}"
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
                                        <a
                                            href="{{ route('admin.testimoni.show', $t) }}"
                                            aria-label="lihat"
                                            class="button button--sm"
                                            style="--button-tone: oklch(0.65 0.18 55); --button-color: white;"
                                        >
                                            Lihat
                                        </a>
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