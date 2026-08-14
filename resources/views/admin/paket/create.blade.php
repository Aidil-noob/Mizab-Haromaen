<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif text-xl font-bold">Tambah Paket</h2>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4 max-w-lg">
            <form action="{{ route('admin.paket.store') }}" method="POST" class="flex flex-col gap-4">
                @csrf

                <div class="field">
                    <x-input-label :value="__('Nama Paket')"/>
                    <div class="input-group">
                        <span class="input-group__text">
                            <x-lucide-tickets-plane/>
                        </span>
                        <x-text-input
                            type="text"
                            name="nama_paket" 
                            class="input" 
                            value="{{ old('nama_paket') }}" 
                            required 
                        />
                    </div>
                </div>

                <div class="field">
                    <x-input-label :value="__('Hotel Madinah')" />
                    <div class="input-group">
                        <span class="input-group__text">
                            <x-lucide-hotel/>
                        </span>
                        <x-text-input 
                            type="text" 
                            name="nama_hotel_madinah" 
                            class="input" 
                            value="{{ old('nama_hotel_madinah') }}"
                            required 
                        />
                    </div>
                </div>

                <div class="field">
                    <x-input-label :value="__('Hotel Makkah')" />
                    <div class="input-group">
                        <span class="input-group__text">
                            <x-lucide-hotel/>
                        </span>
                        <x-text-input
                            type="text" 
                            name="nama_hotel_makkah" 
                            class="input" 
                            value="{{ old('nama_hotel_makkah') }}" 
                            required 
                        />
                    </div>
                </div>

                <div class="field">
                    <x-input-label :value="__('Harga')"/>
                    <div class="input-group">
                        <span class="input-group__text">
                            Rp
                        </span>
                        <x-text-input
                            type="number" 
                            name="harga" 
                            value="{{ old('harga') }}"
                            required
                        />
                    </div>
                </div>

                <x-primary-button>Tambah</x-primary-button>
                <x-secondary-button>Batal</x-secondary-button>
            </form>
        </div>
    </div>
</x-app-layout>