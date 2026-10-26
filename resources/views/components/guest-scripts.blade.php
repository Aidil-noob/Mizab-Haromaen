<script>
    function salin() {
        let teks = document.getElementById('bsi').value; //ambil tombol
        navigator.clipboard.writeText(teks); //tambahkan ke papan klip
    }

    const _nomorJamaah = {}; //penomoran id blok, tidak pernah direset biar id tetap unik walau blok dihapus

    // tambah blok isian jamaah lain, jadi pendaftar bisa mendaftarkan lebih dari 1 orang
    function tambahJamaah(id) {
        const template = document.getElementById('dlg-tmpl-' + id);
        const nomor = (_nomorJamaah[id] = (_nomorJamaah[id] || 1) + 1);
        const grup = template.content.firstElementChild.cloneNode(true);

        grup.innerHTML = grup.innerHTML.replace(/__n__/g, String(nomor));
        template.before(grup);

        window.Stisla?.init?.(); // inisialisasi combobox pada select hasil klon
        grup.querySelector('[data-field="nama"]').focus();
    }

    // hapus blok isian jamaah tambahan (blok pertama tidak punya tombol ini)
    function hapusJamaah(button) {
        button.closest('.jamaah').remove();
    }

    // kirim isi formulir pendaftaran ke WhatsApp admin
    function kirimPendaftaran(id, harga) {
        const form = document.getElementById('dlg-' + id).querySelector('form');

        if (!form.checkValidity()) { //nama jamaah pertama wajib diisi
            form.reportValidity();
            return;
        }

        const jamaah = [];
        form.querySelectorAll('.jamaah').forEach((grup) => {
            const nama = grup.querySelector('[data-field="nama"]').value.trim();
            if (!nama) return; //blok tambahan yang kosong dilewati
            const kelamin = grup.querySelector('[data-field="kelamin"]').value;
            const kamar = grup.querySelector('[data-field="kamar"]').value;
            jamaah.push(nama + ' (' + kelamin + ', Kamar ' + kamar + ')');
        });

        const pesan = [
            'Assalamualaikum,',
            '',
            'Saya ingin mendaftar paket umroh:',
            'Paket: ' + document.getElementById('dlg-package-' + id).value,
            'Harga mulai: ' + harga,
            '',
            'Jamaah (' + jamaah.length + ' orang):',
            ...jamaah.map((orang, i) => (i + 1) + '. ' + orang),
            '',
            'Mohon informasi selanjutnya. Terima kasih.',
        ].join('\n');

        window.open(
            'https://wa.me/6281161613435?text=' + encodeURIComponent(pesan),
            '_blank'
        );
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
