<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<x-guest-head/>
<body class="antialiased">
    <div class="page px-4">
        {{-- navigasi --}}
        <x-navbar
            class="z-50 sticky top-0 -mx-4"
            menu-state="closed"
            :items="[
                ['href' => '#beranda', 'label' => 'Beranda'],
                ['href' => '#paket', 'label' => 'Paket Umroh'],
                ['href' => '#ulasan', 'label' => 'Ulasan'],
                ['href' => '#faq', 'label' => 'FAQ'],
            ]"
        >
            <x-slot:action>
                <a class="button button--primary" href="/login"><x-lucide-user />Masuk</a>
            </x-slot:action>
        </x-navbar>
        <x-hero/>
        <x-about>
            <x-vision-mission/>
        </x-about>
        <x-paket-section :umroh="$umroh"/>
        <x-testimoni-section :testimoni="$testimoni"/>
        <x-faq-section/>
        <x-site-footer/>
    </div>
    <x-guest-scripts/>
</body>
</html>
