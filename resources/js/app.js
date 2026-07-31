import Alpine from 'alpinejs';
import '@stisla/vanilla';

window.Alpine = Alpine;
Alpine.start();

// kirim pesan ke wa admin mizab haromaen

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
