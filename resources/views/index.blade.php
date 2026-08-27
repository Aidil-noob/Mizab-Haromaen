<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mizab Haromaen</title>
    <link rel="preconnect" href="https://www.chatbase.co" crossorigin/>
    <link rel="dns-prefetch" href="https://www.chatbase.co"/>

    <script>
        (function () {
            if (!window.chatbase || window.chatbase("getState") !== "initialized") {
                window.chatbase = (...arguments) => {
                    if (!window.chatbase.q) {
                        window.chatbase.q = []
                    }
                    window.chatbase.q.push(arguments)
                };
                window.chatbase = new Proxy(window.chatbase, {
                    get(target,prop) {
                        if (prop === "q") {
                            return target.q
                        }
                        return (...args) => target(prop,...args)
                    }
                })
            }
            const onLoad = function () {
                const script = document.createElement("script");
                script.src = "https://www.chatbase.co/embed.min.js";
                script.id = "0hw2RyNGg918tAytZACN3";
                script.domain = "www.chatbase.co";
                document.body.appendChild(script)
            };
            if (document.readyState === "complete") {
                onLoad()
            } else {
                window.addEventListener("load",onLoad)
            }
        }) ();
    </script>
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
    <script async src="https://www.instagram.com/embed.js"></script>

    {{-- ikon website --}}
    <link rel="icon" href="{{ asset('storage/ikon/IMG_7539.webp') }}" type="image/x-icon"/>
</head>
<body class="antialiased">
    <div class="page px-4">
        {{-- navigasi --}}
        <nav class="navbar z-50 sticky top-0 -mx-4" data-stisla-navbar>
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
                <x-lucide-equal/> {{-- ikon menu --}}
            </button>
            <div class="navbar__menu" data-state="closed">
                <ul class="navbar__nav">
                    <li>
                        <a href="#beranda" class="navbar__button" data-state="active">Beranda</a>
                    </li>
                    <li>
                        <a class="navbar__button" href="#paket">Paket Umroh</a>
                    </li>
                    <li>
                        <a class="navbar__button" href="#ulasan">Ulasan</a>
                    </li>
                    <li>
                        <a class="navbar__button" href="#faq">FAQ</a>
                    </li>
                </ul>
                <a
                    href="{{ route('login') }}" 
                    class="button button--primary lg:p-6"
                >
                    Admin
                </a>
            </div>
        </nav>
        <header id="beranda" class="page__header -mt-6 -mx-4">
            {{-- hero section --}}
            <div class="page__headline">
                <div class="relative h-[90vh] w-full overflow-hidden">
                    <video
                        loop
                        playsinline
                        autoplay
                        muted
                        class="absolute inset-0 object-cover w-full h-full z-0"
                    >
                        <source
                            src="{{ asset('storage/aset/hero-c.webm') }}"
                            type="video/webm"
                        />
                    </video>

                    <div class="flex flex-col justify-center items-start inset-0 absolute px-4 z-20">
                        <h1 class="text-5xl lg:text-7xl text-[#FBFCFC] font-bold drop-shadow-lg">Travel Umroh dan Tours</h1>
                        <p
                            class="text-base/8 sm:text-lg lg:text-xl text-[#FBFCFC]/90 drop-shadow max-w-xl mt-4"
                        >
                            "Antara umrah yang satu dan umrah lainnya,
                            Itu akan menghapuskan dosa di antara keduanya. Dan
                            haji mabrur tidak ada balasannya melainkan surga." <br>
                            (HR. Bukhari dan Muslim)
                        </p>
                        <div class="w-full flex flex-col gap-y-6 mt-6 md:flex-row md:items-start md:w-auto md:gap-x-10">
                            <a href="https://wa.me/6281161613435" class="button button--primary button--xl">
                                Konsultasi Gratis <x-lucide-message-circle style="--button-icon-size:1rem;"/>
                            </a>
                            <a href="#paket" class="button button--outline button--neutral button--xl">
                                Lihat Paket <x-lucide-move-down/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        {{-- tentang kami --}}
        <section class="page__section">
            <div class="page__headline flex flex-col items-center">
                <div class="flex flex-col items-center lg:flex-row mx-auto">
                    <img
                        src="{{ asset('storage/ikon/IMG_7539.webp') }}"
                        class="h-auto w-70 xl:w-100"
                        alt="Mizab Haromaen"
                    />
                    <div class="flex flex-col">
                        <h2 class="page__title text-center mb-2 text-2xl lg:text-4xl mb-10 decoration-solid underline underline-offset-8">
                            MIZAB HAROMAEN
                        </h2>
                        <p class="leading-7 lg:text-lg text-justify indent-8">
                            <span class="font-bold">
                                PT Mizab Haromaen
                            </span>
                            hadir sebagai penyelenggara
                            perjalanan umroh yang berupaya memberikan
                            pelayanan terbaik bagi para jamaah.
                            Mulai dari proses pendaftaran hingga
                            kepulangan ke Indonesia, setiap tahapan
                            dirancang agar jamaah dapat beribadah
                            dengan nyaman dan fokus. Pelayanan yang
                            ramah, pendampingan selama perjalanan,
                            serta bimbingan ibadah menjadi bagian
                            penting agar jamaah dapat menjalankan
                            seluruh rangkaian umroh dengan baik.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- paket umroh --}}
        <section class="page__section" id="paket">
            <div class="page__section-header justify-center bg-primary py-4 mb-4 md:mb-10 mt-30">
                <h2 class="page__section-title text-2xl lg:text-4xl">
                    DAFTAR PAKET UMROH
                </h2>
            </div>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2">
                @foreach ($umroh as [$p, $h])
                    <div class="card min-h-full">
                        <div class="card__body">
                            {{-- nama paket --}}
                            <div class="font-serif font-extrabold text-2xl text-center uppercase">
                                {{ $p->nama_paket }}
                            </div>
                            <hr class="separator my-4"/>
                            <img src="{{asset('storage/' . $h)}}" class="rounded" />
                            <h3 class="font-bold text-start text-xl lg:text-2xl">Rincian Paket</h3>
                            <div class="grid grid-cols-2 gap-x-15 gap-y-6 lg:gap-y-10">
                                {{-- nama hotel --}}
                                <div>
                                    <span class="font-medium text-lg lg:text-2xl">Harga Mulai</span>
                                    <span class="font-bold block text-lg lg:text-2xl">IDR {{number_format($p->harga, 0, ',', '.')}}</span>
                                </div>
                                <div>
                                    <span class="font-medium text-lg lg:text-2xl">Fasilitas Hotel</span>
                                    <span class="font-bold block text-lg lg:text-2xl">
                                        <x-rating-star :rating="$p->rating"/>
                                    </span>
                                </div>
                                <div>
                                    <span class="font-medium text-lg lg:text-2xl">Hotel Madinah</span>
                                    <span class="font-bold block text-lg lg:text-2xl">{{ $p->nama_hotel_madinah }}</span>
                                </div>
                                <div>
                                    <span class="font-medium text-lg lg:text-2xl">Hotel Makkah</span>
                                    <span class="font-bold block text-lg lg:text-2xl">{{ $p->nama_hotel_makkah }}</span>
                                </div>
                                <div>
                                    <span class="font-medium text-lg lg:text-2xl">Maskapai</span>
                                    <span class="font-bold block text-lg lg:text-2xl">Lion Air</span>
                                </div>
                                <div>
                                    <span class="font-medium text-lg lg:text-2xl">Durasi</span>
                                    <span class="font-bold block text-lg lg:text-2xl">13 Hari</span>
                                </div>
                            </div>
                            <div class="flex justify-end my-2">
                                <a
                                    class="button py-7 pr-1 pl-7 button--primary button--outline button--xl font-semibold lg:text-2xl"
                                    href="https://wa.me/6281161613435?text=Assalamualaikum%2C%20Saya%20(Nama%20Anda)%2C%20ingin%20mendaftar%20Umroh%20{{$p->nama_paket}}"
                                    style="--button-radius:50px; --button-color:black;"
                                >
                                    Daftar Sekarang
                                    <span
                                        class="icon-box icon-box--primary icon-box--lg icon-box--circle"
                                        style="--icon-box-bg:var(--color-primary-foreground);"
                                    >
                                        <x-lucide-move-up-right/>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="card w-[94dvw] border-2 border-primary">
                <div class="card__body flex-row py-0">
                    <div class="space-y-3 mb-3 flex-1">
                        <h5 class="card__title text-sm md:text-md lg:text-lg mt-4 mb-3">Harga Sudah Termasuk</h5>
        				<ul class="text-sm md:text-md lg:text-lg xl:text-xl space-y-3">
                            @foreach ([
                                'Tiket Pesawat PP',
                                'Air Zamzam',
                                'Perlengkapan',
                                'Makan 3× Sehari',
                                'Handling Bandara',
                                'Bagasi 30 kg',
                                'Visa Umroh',
                                'Lounge Bandara'
                            ] as $t)
        					    <li class="flex items-center gap-2">
        						    <x-lucide-circle-check class="h-4 w-4 shrink-0 text-success"/>
                            	    {{ $t }}
        					    </li>
                            @endforeach
        				</ul>
                    </div>
                    <div class="separator separator--vertical flex-none" role="separator" aria-orientation="vertical"></div>
                    <div class="space-y-3 flex-1 pl-[13px]">
                        <h3 class="card__title text-sm md:text-md lg:text-lg mt-4">Harga Tidak Termasuk</h3>
        				<ul class="text-sm md:text-md lg:text-lg xl:text-xl space-y-3">
                            @foreach ([
                                'Pembuatan Paspor',
                                'Vaksin Meningitis',
                                'Vaksin Polio',
                                'Ziarah Di luar Program',
                                'Kelebihan Bagasi'
                            ] as $t)
        		                <li class="flex items-center gap-2">
        		                    <x-lucide-circle-x class="h-4 w-4 shrink-0 text-danger"/>
        		                    {{ $t }}
        		                </li>
                            @endforeach
        				</ul>
                    </div>
                </div>
                <div class="card__footer flex flex-wrap md:flex-row">
                    <h3 class="card__title font-semibold text-sm md:text-md lg:text-lg xl:text-xl mb-2">Pembayaran Dapat Dilakukan Melalui:</h3>
                    <div class="flex flex-col max-w-sm w-full">
                        <div class="flex flex-col md:flex-row items-start md:items-end gap-5 w-full justify-between md:w-auto">
                            <img src="{{ asset('storage/aset/bsi.webp') }}" class="h-15 w-auto"/>
                            <div class="input-group input-group--lg max-w-3xs">
                                <input type="number" id="bsi" class="input input--lg" value="1616120251"/>
                                <button
                                    type="button"
                                    class="button button--lg button--neutral button--soft button--icon-only text-[black]"
                                    onclick="salin()"
                                    aria-label="salin nomor rekening"
                                    data-stisla-tooltip
                                    data-stisla-tooltip-title="salin nomor rekening"
                                    data-stisla-tooltip-delay="150"
                                    data-stisla-tooltip-trigger="hover"
                                >
                                    <x-lucide-copy/>
                                </button>
                            </div>
                        </div>
                        <p class="card__description mt-3 italic">a.n. PT MIZAB HAROMAEN TOUR TRAVEL</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- testimoni --}}
        <section class="page__section w-full" id="ulasan">
            <div class="page__section-header justify-center bg-primary py-4 mb-4 md:mb-10 mt-30">
                <h2 class="page__section-title text-2xl lg:text-4xl">
                    TESTIMONI JAMAAH
                </h2>
            </div>
            {{-- reels instagram (desktop) dalam layout grid --}}
            <div class="md:grid md:grid-cols-2 hidden lg:grid-cols-3 xl:grid-cols-4 mt-6 gap-6">
                @foreach ($testimoni as $t)
                    <blockquote
                        class="instagram-media"
                        data-instgrm-permalink="{{ $t->url }}"
                        data-instgrm-version="14"
                    >
                    </blockquote>
                @endforeach
            </div>
            {{-- reels instagram (mobile) dalam bentuk carousel --}}
            <div
                class="carousel carousel--no-aspect md:hidden"
                data-stisla-carousel
                data-stisla-carousel-loop="true"
                tabindex="0"
                role="region"
                aria-roledescription="carousel"
                aria-label="testimoni jamaah"
            >
                <div class="carousel__viewport">
                    <div class="carousel__track">
                        @foreach ($testimoni as $t)
                        <div
                            class="carousel__slide"
                            role="group"
                            aria-roledescription="slide"
                        >
                            <blockquote
                                class="instagram-media w-full"
                                data-instgrm-permalink="{{ $t->url }}"
                                data-instgrm-version="14"
                            >
                            </blockquote>
                        </div>
                        @endforeach
                    </div>
                </div>
                <button
                    type="button"
                    class="carousel__control carousel__control--prev"
                    aria-label="sebelumnya"
                >
                    <x-lucide-chevron-left/> {{-- geser ke kiri --}}
                </button>
                <button
                    type="button"
                    class="carousel__control carousel__control--next"
                    aria-label="selanjutnya"
                >
                    <x-lucide-chevron-right/> {{-- geser ke kanan --}}
                </button>
            </div>
        </section>
        {{-- faq --}}
        <section class="page__section w-full" id="faq">
            <div class="card">
                <div class="card__header">
                    <h3 class="card__title text-[#FBFCFC] md:text-md lg:text-lg xl:text-xl">
                        Pertanyaan yang sering diajukan
                    </h3>
                </div>
                <x-accordion/>
            </div>
        </section>
        {{-- kontak --}}
        <footer class="bg-primary text-white mt-16 -mx-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
                <h3 class="font-semibold text-lg mb-5">Informasi Lebih Lanjut</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <a
                        class="flex gap-3 items-center hover:underline"
                        href="https://wa.me/6281161613435"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg>
                        0811-6161-2025
                    </a>
                    <a
                        class="flex gap-3 items-center hover:underline"
                        href="https://www.instagram.com/mizabharomaen?igsh=MXIyMDFyOXR2ZHBncg=="
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                        KANTOR PUSAT MIZAB HAROMAEN
                    </a>
                    <a
                        href="https://www.facebook.com/share/1BYS46wSXo/"
                        class="flex items-center gap-3 hover:underline"
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
                        class="flex items-center gap-3 hover:underline"
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
    </div>
    <script>
        function salin() {
            let teks = document.getElementById('bsi').value; //ambil tombol
            navigator.clipboard.writeText(teks); //tambahkan ke papan klip
        }

        const mainContainer = document.querySelectorAll('section[id], header[id]'); //ambil semua elemen section & header yang memiliki atribut id.
        const navLinks = document.querySelectorAll('.navbar__button'); //ambil semua elemen navbar__button di halaman ini.

        //fungsi untuk menambah atribut data-state="active" pada .navbar__button saat scroll layar
        function setActiveNav(targetId) {
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === `#${targetId}`) {
                    link.setAttribute('data-state', 'active');
                } else {
                    link.removeAttribute('data-state');
                }
            });
        }
        
        const observerOptions = {
            root: null,
            // area pembatas di tengah viewport untuk mendeteksi section / header yang terlihat
            rootMargin: '-20% 0px -70% 0px',
            threshold: 0
        };

        const observer = new IntersectionObserver((entries) => { //mengawasi semua section yang terlihat di layar
            entries.forEach(entry => {
                if (entry.isIntersecting) { // jika section dalam jangkauan viewport
                    const id = entry.target.getAttribute('id'); //ambil id nya.
                    if (id) {
                        setActiveNav(id);
                    }
                }
            });
        }, observerOptions);

        mainContainer.forEach(
            mainContainer => observer.observe(mainContainer)
        );

        // menambahkan atribut data-state="active" pada .navbar__button yang di klik
        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                const href = this.getAttribute('href');

                if (href && href.startsWith('#')) { // cek jika anchor id berawalan #
                    const targetId = href.substring(1);
                    setActiveNav(targetId);
                }
            });
        });
    </script>
</body>
</html>
