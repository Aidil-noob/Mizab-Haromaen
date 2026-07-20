import '@stisla/vanilla';

import { createIcons, Menu, Hotel } from 'lucide';
createIcons({ icons: { Menu, Hotel } });

function kirimWa(data) {
    const pesan = `Assalamualaikum, Saya ingin mendaftar Umroh\nPaket: ${data.paket}\nJumlah Orang: ${data.jumlah}\nNama-nama Jamaah:\n${data.nama}`;
    const url = `https://wa.me/6281373732200?text=${encodeURIComponent(pesan)}`;
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