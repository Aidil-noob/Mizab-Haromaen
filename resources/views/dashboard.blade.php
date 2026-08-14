<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-serif text-xl font-bold">
                {{ __('Dasbor') }}
            </h2>
            <form method="POST" action="{{ route('logout') }}">
                @csrf          
                <x-danger-button>Keluar</x-danger-button>
            </form>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <a 
                    href="{{ route('admin.paket.index') }}"
                    class="card p-6 hover:shadow-lg transition"
                >
                    <h3 class="font-serif text-lg font-semibold mb-1">
                        Kelola Paket Umroh
                    </h3>  
                    <p class="text-sm opacity-70">                  
                        {{ \App\Models\Paket::count() }}
                        paket terdaftar
                    </p>
                </a>
                <a
                    href="{{ route('admin.testimoni.index') }}" 
                    class="card p-6 hover:shadow-lg transition"
                >
                    <h3 class="font-serif text-lg font-semibold mb-1">
                        Kelola Testimoni
                    </h3>
                    <p class="text-sm opacity-70">
                        {{ \App\Models\Testimoni::count() }}
                        testimoni terdaftar
                    </p>
                </a>
                <a
                    href="{{ route('admin.produk.index') }}" 
                    class="card p-6 hover:shadow-lg transition"
                >
                    <h3 class="font-serif text-lg font-semibold mb-1">
                        Kelola Produk
                    </h3>
                    <p class="text-sm opacity-70">
                        {{ \App\Models\Produk::count() }}
                        produk terdaftar
                    </p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
