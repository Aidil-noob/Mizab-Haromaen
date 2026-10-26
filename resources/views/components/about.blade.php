{{-- tentang kami --}}
<section class="page__section">
    <div class="page__headline flex flex-col items-center gap-y-10">
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
        {{ $slot ?? '' }}
    </div>
</section>
