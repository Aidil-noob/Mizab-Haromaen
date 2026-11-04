<x-app-layout>
    <x-slot name="header">
        <x-breadcrumb>
            <x-breadcrumb-item href="{{ route('dashboard') }}" label="Dasbor"/>
            <x-breadcrumb-item href="{{ route('admin.akun.index') }}" label="Akun Admin"/>
            <x-breadcrumb-item label="Tambah Akun" aria-current="page"/>
        </x-breadcrumb>
    </x-slot>

    <div class="py-8">
        <div class="page container mx-auto px-4 max-w-lg">
            <form action="{{ route('admin.akun.store') }}" method="POST" class="flex flex-col gap-4" novalidate>
                @csrf

                <div class="field">
                    <x-input-label :value="__('Nama')"/>
                    <x-text-input
                        :error="$errors->has('name') ? true : false"
                        aria-describedby="namaError"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        autocomplete="name"
                    />
                    <x-input-error id="namaError" :message="$errors->first('name')"/>
                </div>

                <div class="field">
                    <x-input-label :value="__('Email')"/>
                    <x-text-input
                        :error="$errors->has('email') ? true : false"
                        aria-describedby="emailError"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        autocomplete="email"
                    />
                    <x-input-error id="emailError" :message="$errors->first('email')"/>
                </div>

                <div class="field">
                    <x-input-label :value="__('Kata Sandi')"/>
                    <x-text-input
                        :error="$errors->has('password') ? true : false"
                        aria-describedby="passwordError"
                        type="password"
                        name="password"
                        autocomplete="new-password"
                    />
                    <p class="text-sm text-muted-foreground mt-1">Minimal 8 karakter.</p>
                    <x-input-error id="passwordError" :message="$errors->first('password')"/>
                </div>

                <div class="field">
                    <x-input-label :value="__('Konfirmasi Kata Sandi')"/>
                    <x-text-input
                        type="password"
                        name="password_confirmation"
                        autocomplete="new-password"
                    />
                </div>

                <div class="field flex-row-reverse">
                    <x-primary-button>Simpan</x-primary-button>
                    <a href="{{ route('admin.akun.index') }}" class="button button--ghost button--neutral button--lg">Batal</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
