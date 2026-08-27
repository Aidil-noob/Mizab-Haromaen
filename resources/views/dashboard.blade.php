<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-serif text-xl font-bold">
                {{ __('Dasbor') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <a
                    href="{{ route('admin.paket.index') }}"
                    class="card p-6 hover:shadow-lg transition"
                >
                    <x-lucide-list class="size-7"/>
                    <h3 class="font-serif text-lg font-semibold mb-1">
                        Kelola Paket Umroh
                    </h3>
                    <p class="text-sm opacity-70">
                        {{ \App\Models\Paket::count() }}
                        paket umroh terdaftar
                    </p>
                </a>
                <a
                    href="{{ route('admin.testimoni.index') }}"
                    class="card p-6 hover:shadow-lg transition"
                >
                    <x-lucide-list-video class="size-7"/>
                    <h3 class="font-serif text-lg font-semibold mb-1">
                        Kelola Video Testimoni
                    </h3>
                    <p class="text-sm opacity-70">
                        {{ \App\Models\Testimoni::count() }}
                        video testimoni terunggah
                    </p>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
