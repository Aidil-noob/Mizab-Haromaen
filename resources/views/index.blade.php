<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mizab Haromaen</title>

    {{-- impor file css & js --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- impor font dari google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet"
    />

    {{-- script untuk menampilkan postingan instagram --}}
    <script async src="//www.instagram.com/embed.js"></script>

    {{-- ikon website --}}
    <link rel="icon" href="{{ asset('storage/ikon/IMG_7539.webp') }}" type="image/x-icon"/>

    @env('local')
        <script src="https://cdn.jsdelivr.net/npm/eruda"></script>
        <script>eruda.init();</script>
    @endenv
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar" data-stisla-navbar>
        <a class="navbar__brand">
            <img
                src="{{ asset('storage/ikon/IMG_7540.webp') }}" 
                class="h-auto w-50"
            />
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
                <li>
                    <a class="navbar__button" href="{{ route('login') }}">Admin</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- hero section -->
    <div class="page">
        <section class="page__section">
            <div class="card w-full">
                <img
                    src="{{ asset('storage/aset/jamaah_mizab_haromaen.jpg') }}"
                    class="h-80 w-auto object-cover lg:h-100"
                />
                <div class="card__overlay">
                    <h1 class="card__title text-3xl text-center lg:text-5xl [text-shadow:0_2px_8px_rgba(0,0,0,0.6)]">
                        Travel Umroh & Haji Resmi di Medan
                    </h1>
                    <p class="card__text text-center lg:text-3xl">
                        Dipimpin oleh Muthawif-Muthawif berpengalaman, membuat perjalanan ibadah terasa menyentuh hati 
                    </p>
                </div>
            </div>
        </section>
    </div>

    <div class="page container mt-10 px-4 sm:px-6 lg:px-8 items-center">

        {{-- header --}}
        <header class="page__header">
            <div class="page__headline flex-col lg:grid lg:grid-cols-2 items-center">
                <h1 class="page__title text-center mb-2 lg:col-span-2">
                    Selamat Datang di Mizab Haromaen
                </h1>
                <img
                    src="{{ asset('storage/ikon/IMG_7539.webp') }}"
                    class="h-auto w-70"
                    alt="Mizab Haromaen"
                />
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
                <div class="flex-col flex items-center gap-8 px-1 lg:grid lg:grid-cols-3">
                    @foreach ($paket as $p)
                    <div class="media border-4 w-full lg:flex-col">
                        
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
                        <div class="flex items-end shrink-0">
                            <span class="text-sm font-semibold mb-2">Rp</span>
                            <span class="font-serif font-extrabold text-4xl leading-none">
                                {{ number_format($p->harga / 1000000, 1) }}
                            </span>
                            <span class="text-sm font-semibold mb-2">JT</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
    
            {{-- kartu --}}
        {<section class="page__section">
                <div class="card border-2 border-primary lg:flex-row">
                    <div class="card__header flex-col rounded-t-lg justify-center lg:rounded-l-lg lg:rounded-t-none">
                        <p class="text-3xl text-(--color-primary-emphasis)">DIRECT FLIGHT</p> 
                        <img 
                            src="{{ asset('storage/aset/pesawat-lion-air.webp') }}"
                            class="h-auto w-80"
                        />
                        <p class="text-2xl">START KUALANAMU &mdash; MEDAN</p>             
                    </div>
                    <div class="card__body space-y-4 lg:flex-row">
                        <div>
                            <h5 class="card__title text-sm mb-2">Harga Sudah Termasuk:</h5>
        					<ul class="space-y-1.5 text-sm">
        						<li class="flex items-center gap-2">
        							@svg('lucide-check-circle', 'h-4 w-4 shrink-0')
                            		Tiket Pesawat PP
        						</li>
        						<li class="flex items-center gap-2">
        		                    @svg('lucide-check-circle', 'h-4 w-4 shrink-0')
        		                    Air Zam-zam
        		                </li>
        		                <li class="flex items-center gap-2">
        		                    @svg('lucide-check-circle', 'h-4 w-4 shrink-0')
        		                    Perlengkapan
        		                </li>
        		                <li class="flex items-center gap-2">
        		                    @svg('lucide-check-circle', 'h-4 w-4 shrink-0')
        		                    Makan 3x Sehari
        		                </li>
        		                <li class="flex items-center gap-2">
        		                    @svg('lucide-check-circle', 'h-4 w-4 shrink-0')
        		                    Handling Bandara
        		                </li>
        		                <li class="flex items-center gap-2">
        		                    @svg('lucide-check-circle', 'h-4 w-4 shrink-0')
        		                    Bagasi 30 Kg
        		                </li>
        		                <li class="flex items-center gap-2">
        		                    @svg('lucide-check-circle', 'h-4 w-4 shrink-0')
        		                    Visa Umroh
        		                </li>
        		                <li class="flex items-center gap-2">
        		                    @svg('lucide-check-circle', 'h-4 w-4 shrink-0')
        		                    Lounge Bandara
        		                </li>
        					</ul>
                        </div>
                        <hr class="separator lg:w-px lg:h-full"/>
                        <div>
                            <h5 class="card__title text-sm mb-2">Harga Tidak Termasuk:</h5>
        					<ul class="space-y-1.5 text-sm">
        		                <li class="flex items-center gap-2">
        		                    @svg('lucide-x-circle', 'h-4 w-4 shrink-0')
        		                    Pembuatan Paspor
        		                </li>
        		                <li class="flex items-center gap-2">
        		                    @svg('lucide-x-circle', 'h-4 w-4 shrink-0')
        		                    Vaksin Meningitis
        		                </li>
        		                <li class="flex items-center gap-2">
        		                    @svg('lucide-x-circle', 'h-4 w-4 shrink-0')
        		                    Vaksin Polio
        		                </li>
        		                <li class="flex items-center gap-2">
        		                    @svg('lucide-x-circle', 'h-4 w-4 shrink-0')
        		                    Ziarah Diluar Program
        		                </li>
        		                <li class="flex items-center gap-2">
        		                    @svg('lucide-x-circle', 'h-4 w-4 shrink-0')
        		                    Kelebihan Bagasi
        		                </li>
        					</ul>
                        </div>
                        <hr class="separator lg:w-px lg:h-full"/>
                        <div>
                            <h4 class="card__title text-sm mb-2">Pembayaran Dapat Dilakukan Melalui:</h4>
                            <div class="flex flex-row justify-between items-center lg:flex-col lg:space-y-6">
                                <img src="{{ asset('storage/aset/bsi.webp') }}" class="h-15 w-auto"/>
                                <p class="text-(--color-primary-foreground) bg-(--color-primary-emphasis) text-3xl rounded-xl p-1">7878787573</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- ulasan -->
        <section class="page__section" id="ulasan">
            <div class="page__section-header justify-center">
                <div class="page__section-title">
                    Testimoni Jamaah
                </div>
            </div>

            {{-- reels instagram --}}
            <div class="flex flex-wrap justify-center mt-6 gap-6">
                @foreach ($testimoni as $t)
                    <blockquote
                        class="instagram-media"
                        data-instgrm-permalink="{{ $t->url }}" 
                        data-instgrm-version="14"
                    >
                    </blockquote>
                @endforeach
            </div>
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

                    {{-- pilih paket umroh --}}
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

                    {{-- input jumlah jamaah --}}
                    <label for="jumlah" class="field__label">Jumlah Orang</label>
                    <input
                        type="number"
                        class="input"
                        placeholder="0"
                        id="jumlah"
                        required
                    />

                    {{-- input nama nama jamaah --}}
                    <label for="nama" class="field__label">Nama Lengkap Kalian</label>
                    <div class="field__description">
                        Pisahkan nama dengan
                        <kbd class="kbd">Enter</kbd> / <kbd class="kbd">⤶</kbd>
                        jika lebih dari 1 orang
                    </div>
                    <textarea 
                        type="text"
                        class="textarea"
                        placeholder="Nama Lengkap..."
                        id="nama"
                        rows="3"
                    ></textarea>
                </div>
                
                <button type="submit" class="button button--primary">Daftar Sekarang</button>
            </form>
        </section>
    </div>

    {{-- footer --}}
    <footer class="bg-primary text-white mt-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <h3 class="font-semibold mb-3">Informasi Lebih Lanjut</h3>
            <div class="grid grid-cols-2 gap-8">
                <a 
                    class="flex gap-3 items-center"
                    href="https://wa.me/6289613483509" 
                    target="_blank" 
                    rel="noopener noreferrer"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg>
                    0811-6161-3435
                </a>
                <a 
                    class="flex gap-3 items-center"
                    href="https://www.instagram.com/mizabharomaen?igsh=MXIyMDFyOXR2ZHBncg=="
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                    </svg>
                    PT MIZAB HAROMAEN
                </a>
                <a 
                    href="https://www.facebook.com/share/1BYS46wSXo/"
                    class="flex items-center gap-3"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>
                    Mizab Haromaen
                </a>
                <a
                    href="https://maps.app.goo.gl/cQqTBmJR84zSsRtYA" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    class="flex items-center gap-3"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                    </svg>
                    Jl. Bunga Asoka No.49C Medan
                </a>
            </div>  
            <div class="border-t border-white/20 mt-8 pt-6 text-center text-sm opacity-70">
                &copy; {{ date('Y') }} Mizab Haromaen.
            </div>
        </div>
    </footer>
    <script>
        function kirimWa(data) {
            const pesan = `Assalamualaikum, Saya mau mendaftar Umroh\nPaket: ${data.paket}\nJumlah Orang: ${data.jumlah}\nNama-nama Jamaah:\n${data.nama}`;
            const url = `https://wa.me/6281161613435?text=${encodeURIComponent(pesan)}`;
            window.open(url, '_blank');
        }
    
        document.getElementById('form').addEventListener('submit', function (e) {
            e.preventDefault();
            kirimWa({
                nama: e.target.elements.nama.value,
                paket: e.target.elements.paket.value,
                jumlah: e.target.elements.jumlah.value,
            });
        });
    </script>
</body>
</html>