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
