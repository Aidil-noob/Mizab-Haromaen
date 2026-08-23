@php
$faq = [
    [
        "question" => "Dokumen apa saja yang menjadi persyaratan umroh?",
        "answer" => "Dokumen persyaratan untuk Umroh antara lain:

            1. Paspor Asli 48 halaman (minimal nama 3 kata dan masa berlaku 12 bulan dari tanggal keberangkatan).
            2. Fotocopy KTP berukuran A4.          
            3. Fotocopy KK.   
            4. Fotocopy Buku Nikah (bagi pasangan suami istri).       
            5. Pas Photo ukuran 4x6 sebanyak 3 lembar (background foto warna putih dengan fokus wajah 80%). Dibelakang foto harap dituliskan nama lengkap sesuai Paspor.      
            6. Buku Kuning Suntik Meningitis (berlaku hingga tanggal kepulangan).     
            7. Fotocopy Akta Kelahiran (khusus untuk anak berusia ≤ 17 tahun)."
    ],
    [
        "question" => "Siapakah yang akan memproses visa? Dan kapan waktu untuk proses visa?",
        "answer" => "Proses visa akan dilakukan oleh Mizab Haromaen setelah kami menerima seluruh persyaratan dokumen atau paling cepat 3 minggu sebelum keberangkatan."
    ],
    [
        "question" => "Untuk pembuatan paspor bagaimana kalau nama saya hanya 1 kata?",
        "answer" => "Jika nama jamaah hanya 1 kata, maka bisa ditambahkan nama Ayah Kandung & nama Kakek Ayah kandung sesuai dengan dokumen KK / Akte / Buku Nikah."
    ],
    [
        "question" => "Perlengkapan apa saja yang diperoleh dari Mizab Haromaen?",
        "answer" => "Perlengkapan yang didapat jamaah umroh:

            1. Pakaian Ihram (2-3 pasang).
            2. Tas Selempang.
            3. Sandal.
            4. Tas Sandal.
            5. Bantal Leher.
            6. Syal.
            7. Koper Bagasi & Kabin.
            8. Buku Do'a.
            9. Mukenah & Bakal Batik (khusus perempuan).
            10. Tumbler."
    ],
    [
        "question" => "Kapan saya dapat mengambil perlengkapan?",
        "answer" => "Setelah melakukan pembayaran DP, Anda dapat langsung mengambil perlengkapan."
    ],
    [
        "question" => "Kapan manasik dilaksanakan?",
        "answer" => "Manasik akan dilaksanakan 2 minggu sebelum keberangkatan."
    ],
    [
        "question" => "Berapa kali manasik dilaksanakan?",
        "answer" => "Manasik dilaksanakan 2 kali."
    ],
    [
        "question" => "Di mana manasik dilaksanakan?",
        "answer" => "Manasik biasanya dilakukan di Asrama Haji Embarkasi Medan, Jl. Jenderal Besar A.H.Nasution, Pangkalan Masyhur, Kec. Medan Johor. Namun untuk lebih jelas akan disampaikan di undangan manasik."
    ],
    [
        "question" => "Apa saja yang dibahas ketika manasik?",
        "answer" => "Pembahasan ketika manasik, antara lain:

            1. Rukun, Wajib, dan Sunnah Umroh,
            2. Cara menggunakan kain ihram,
            3. Informasi terkait perjalanan yang didalamnya mencakup rencana program perjalanan, prakiraan cuaca, dan barang bawaan yang perlu diperhatikan."
    ]

];
@endphp

<div
    class="accordion"
    data-stisla-accordion
    data-stisla-accordion-type="single"
>
    @foreach ($faq as $index => $item)
    <div
        class="accordion__item"
        data-state="closed"
    >
        <h3 class="accordion__heading">
            <button 
                class="accordion__trigger"
                data-stisla-accordion-trigger
                aria-expanded="false"
                aria-controls="acc-{{ $index }}"
                id="acc-{{ $index }}-trigger"
            >
                {{ $item['question'] }}
                <x-lucide-chevron-down class="accordion__icon"/>
            </button>
        </h3>
        <div 
            class="accordion__body" 
            id="acc-{{ $index }}"
            role="region"
            aria-labelledby="acc-{{ $index }}-trigger"
        >
            <div class="accordion__body-inner whitespace-pre-line">
                {{ $item['answer'] }}
            </div>
        </div>
    </div>
    @endforeach 
</div>