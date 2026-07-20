<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mizab Haromaen</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet"
    />
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar--block" data-stisla-navbar>
        <a class="navbar__brand flex gap-2">
            <img
                src="storage/ikon/FB_IMG_1783779274847.jpg" 
                class="h-10 w-10 rounded-full object-cover"
            />
            <span class="font-bold">MIZAB HAROMAEN</span>
        </a> 
        <button
            class="navbar__toggle"
            data-stisla-navbar-toggle 
            aria-expanded="false"
        >
            <x-lucide-menu/> {{-- ikon menu --}}
        </button>
        <div class="navbar__menu" data-state="closed">
            <ul class="navbar__nav">
                <li>
                    <a class="navbar__button" href="#paket">Paket Umroh</a>
                </li>
                <li>
                    <a class="navbar__button" href="#ulasan">Ulasan</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- hero section -->
    <div class="page">
        <section class="page__section">
            <div class="card w-full">
                <img
                    src="storage/aset/Screenshot_20260715_203004_Instagram Lite.jpg"
                    class="h-80 w-auto object-cover lg:h-100"
                />
                <div class="card__overlay">
                    <h1 class="card__title text-3xl text-center lg:text-5xl [text-shadow:0_2px_8px_rgba(0,0,0,0.6)]">
                        Travel Umroh & Haji Resmi di Medan
                    </h1>
                    <p class="card__text text-center lg:text-3xl">
                        Dipimpin oleh Mutawwif-Mutawwif berpengalaman, membuat perjalanan ibadah terasa menyentuh hati 
                    </p>
                </div>
            </div>
        </section>
    </div>
                
    <div class="page container mt-10 px-4 sm:px-6 lg:px-8">
        <header class="page__header">
            <div class="page__headline">
                <h1 class="page__title text-center mb-2">
                    Selamat Datang di Mizab Haromaen
                </h1>
                <p class="page__description text-justify">
                    Dengan Pedoman "One Stop Travel Services"
                    Kami menyediakan beragam solusi layanan perjalanan
                    yang memadukan pengalaman Kami dengan teknologi
                    terkini. Semua Kami lakukan agar Anda dapat
                    meningkatkan efisiensi tanpa mengurangi kualitas
                    layanan yang Anda harapkan dan terima.
                </p>
            </div>
        </header>
        <!--paket umroh -->
        <section class="page__section" id="paket">
            <div class="page__section-header justify-center">
                <div class="page__section-title text-2xl">
                    Paket Umroh
                </div>
            </div>
            @foreach ($paket as $p)
            <div class="media flex items-center border-4">
                {{-- nama paket --}}
                <div class="font-serif font-extrabold text-2xl text-center shrink-0 w-32">
                    {!! strtoupper(str_replace(' ', '<br>', $p->nama_paket)) !!}
                </div>
            
                {{-- nama hotel --}}
                <div class="flex flex-col gap-2 flex-1">
                    <div class="flex items-center gap-3">
                        <span class="icon-box icon-box--circle shrink-0">
                            @svg('lucide-hotel', 'h-4 w-4')
                        </span>
                        <div>
                            <span class="font-medium">HOTEL MADINAH:</span>
                            <span class="font-bold block">{{ $p->nama_hotel_madinah }}</span>
                        </div>
                    </div>
            
                    <div class="flex items-center gap-3">
                        <span class="icon-box icon-box--circle shrink-0">
                            @svg('lucide-hotel', 'h-4 w-4')
                        </span>
                        <div>
                            <span class="font-medium">HOTEL MAKKAH:</span>
                            <span class="font-bold block">{{ $p->nama_hotel_makkah }}</span>
                        </div>
                    </div>
                </div>
            
                {{-- harga --}}
                <div class="flex items-end gap-1 shrink-0">
                    <span class="text-sm font-semibold mb-2">Rp</span>
                    <span class="font-serif font-extrabold text-4xl leading-none">
                        {{ number_format($p->harga / 1000000, 1) }}
                    </span>
                    <span class="text-sm font-semibold mb-2">JT</span>
                </div>
            </div>
            @endforeach
        </section>

        <!-- form -->
        <section class="page__section" id="daftar">
            <div class="page__section-header justify-center">
                <div class="page__section-title">
                    Jika Anda berminat, Silahkan isi formulir ini
                </div>
            </div>
            <form 
                class="flex flex-col w-full max-w-96 gap-3 pb-64 mx-auto"
                onsubmit="event.preventDefault();"
                id="form"
            >
                <div class="field">
                    <label for="paket" class="field__label">Paket</label>
                    <select 
                        class="combobox"
                        id="paket"
                        data-stisla-combobox
                        data-placeholder="Pilih Paket"
                        required
                    >
                        <option value="" selected></option>     
                        @foreach ($paket as $p)
                        <option value="{{ $p->nama_paket }}">
                            {{ $p->nama_paket }}
                        </option>                 
                        @endforeach
                    </select>
                    <label for="jumlah" class="field__label">Jumlah Orang</label>
                    <input
                        type="number"
                        class="input"
                        placeholder="0"
                        id="jumlah"
                        required
                    />
                    <label for="nama" class="field__label">Nama Lengkap Kalian</label>
                    <div class="field__description">
                        Pisahkan Nama dengan
                        <kbd class="kbd">Enter</kbd> / <kbd class="kbd">⤶</kbd>
                    </div>
                    <textarea 
                        type="text"
                        class="textarea"
                        placeholder="Nama Lengkap..."
                        id="nama"
                        rows="3"
                    ></textarea>
                </div>
                <button type="submit" class="button button--primary">Daftar</button>
            </form>
        </section>
    </div>

    <footer class="bg-primary text-white mt-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-10">  
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
    
                {{-- identitas --}}
                <div>
                    <div class="flex items-center gap-2 mb-3">
                        <img
                            src="storage/ikon/FB_IMG_1783779274847.jpg"
                            class="h-10 w-10 rounded-full object-cover"
                        />
                        <span class="font-bold font-serif text-lg">MIZAB HAROMAEN</span>
                    </div>
                    <p class="text-sm opacity-80 leading-6">
                        Travel Umroh & Haji resmi di Medan, dipimpin Muthawwif berpengalaman.
                    </p>
                </div>
    
                {{-- navigasi cepat --}}
                <div>
                    <h3 class="font-semibold mb-3">Menu</h3>
                    <ul class="space-y-2 text-sm opacity-80">
                        <li><a href="#paket" class="hover:opacity-100">Paket Umroh</a></li>
                        <li><a href="#ulasan" class="hover:opacity-100">Ulasan</a></li>
                    </ul>
                </div>
                
                {{-- kontak --}}
                <div>
                    <h3 class="font-semibold mb-3">Hubungi Kami</h3>
                    <ul class="space-y-2 text-sm opacity-80">
                        <li class="flex items-center gap-2">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg"
                                width="16" 
                                height="16" 
                                fill="currentColor" 
                                class="bi bi-whatsapp" 
                                viewBox="0 0 16 16"
                            >
                                <path 
                                    d="M13.601 2.326A7.85 7.85 0 0
                                    0 7.994 0C3.627 0 .068 3.558.064
                                    7.926c0 1.399.366 2.76 1.057 
                                    3.965L0 16l4.204-1.102a7.9 7.9 0
                                    0 0 3.79.965h.004c4.368 0 7.926-3
                                    .558 7.93-7.93A7.9 7.9 0 0 0 13.6 
                                    2.326zM7.994 14.521a6.6 6.6 0 0 1-
                                    3.356-.92l-.24-.144-2.494.654.666-
                                    2.433-.156-.251a6.56 6.56 0 0 1-1.
                                    007-3.505c0-3.626 2.957-6.584 6.59
                                    1-6.584a6.56 6.56 0 0 1 4.66 1.931 
                                    6.56 6.56 0 0 1 1.928 4.66c-.004 3
                                    .639-2.961 6.592-6.592 6.592m3.615
                                    -4.934c-.197-.099-1.17-.578-1.353-
                                    .646-.182-.065-.315-.099-.445.099-
                                    .133.197-.513.646-.627.775-.114.13
                                    3-.232.148-.43.05-.197-.1-.836-.30
                                    8-1.592-.985-.59-.525-.985-1.175-1
                                    .103-1.372-.114-.198-.011-.304.088
                                    -.403.087-.088.197-.232.296-.346.1
                                    -.114.133-.198.198-.33.065-.134.03
                                    4-.248-.015-.347-.05-.099-.445-1.0
                                    76-.612-1.47-.16-.389-.323-.335-.4
                                    45-.34-.114-.007-.247-.007-.38-.00
                                    7a.73.73 0 0 0-.529.247c-.182.198-
                                    .691.677-.691 1.654s.71 1.916.81 2
                                    .049c.098.133 1.394 2.132 3.383 2.
                                    992.47.205.84.326 1.129.418.475.15
                                    2.904.129 1.246.08.38-.058 1.171-.
                                    48 1.338-.943.164-.464.164-.86.114
                                    -.943-.049-.084-.182-.133-.38-.232"
                                />
                            </svg>
                            <a href="https://wa.me/6289613483509?text=Halo%20Admin" target="_blank" rel="noopener noreferrer">
                                0811-6161-3435
                            </a>
                        </li>
                        <li class="flex items-center gap-2">
                            @svg('lucide-map-pin', 'h-6 w-6')
                            <a 
                                href="https://maps.app.goo.gl/cQqTBmJR84zSsRtYA" 
                                target="_blank" 
                                rel="noopener noreferrer"
                            >
                                Jl. Bunga Asoka No.49C, Asam Kumbang, Kec. Medan Selayang, Kota Medan, Sumatera Utara 20128                           
                            </a>
                        </li>
                    </ul>
                </div>
            </div>  
            <div class="border-t border-white/20 mt-8 pt-6 text-center text-sm opacity-70">
                &copy; {{ date('Y') }} Mizab Haromaen. Semua hak dilindungi.
            </div>
        </div>
    </footer>
</body>
</html>