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
                    fetchpriority="high"
                />
            </video>

            <div class="flex flex-col justify-center items-start lg:items-center inset-0 absolute px-4 z-20">
                <h1 class="text-5xl lg:text-7xl text-white lg:text-center font-bold drop-shadow-lg">Mizab Haromaen Tour & Travel</h1>
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
