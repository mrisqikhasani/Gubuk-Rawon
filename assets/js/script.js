function sendWhatsAppMessage() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var date = document.getElementById("date").value;
    var time = document.getElementById("time").value;
    var guests = document.getElementById("guests").value;

    // Format pesan reservasi yang akan dikirimkan via WhatsApp
    var message = "Nama: " + name + "%0A" +
                  "Nomor WhatsApp: " + phone + "%0A" +
                  "Tanggal Reservasi: " + date + "%0A" +
                  "Waktu Reservasi: " + time + "%0A" +
                  "Jumlah Tamu: " + guests;

    // Membuat URL WhatsApp dengan nomor tujuan dan pesan
    var whatsappURL = "https://wa.me/628561163076?text=" + encodeURIComponent(message);

    // Redirect pengguna ke URL WhatsApp
    window.open(whatsappURL, '_blank');
}
