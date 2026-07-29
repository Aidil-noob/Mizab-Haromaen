import Alpine from 'alpinejs';
import '@stisla/vanilla';
import { createIcons, Menu, Hotel } from 'lucide';
import eruda from 'eruda';

window.Alpine = Alpine;
Alpine.start();

createIcons({ icons: { Menu, Hotel } });

if (window.instgrm) {
  window.instgrm.Embeds.process();
}

if (import.meta.env.DEV) { // panggil eruda saat dalam mode pengembangan
    eruda.init();
}

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
