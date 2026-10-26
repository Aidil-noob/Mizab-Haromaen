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
