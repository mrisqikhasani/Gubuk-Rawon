<?php
// Establish database connection
// $db_host = "localhost";
// $db_user = "gubukrawon";
// $db_password = "rawon2020";
// $db_name = "reservasi";
// $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

@include('koneksi.php');

$db = new database();

// Get data from form
$name = $_POST["name"];
$phone = $_POST["phone"];
$datetime = $_POST["tanggal_waktu"];
$tamu = $_POST["tamu"];

$date = new DateTime($datetime);

// Mengubah format ke format yang diinginkan (contoh: DD/MM/YYYY HH:mm)
$new_format_datetime = $date->format('d/m/Y H:i');


// $db->insert_reservarsi($name, $phone, $tanggal, $tamu);

// Memasukan data ke database
// $query = "INSERT INTO reservations (id, name, phone, tanggal, waktu, tamu) 
//           VALUES ('','$name', '$phone', '$tanggal', '$waktu', $tamu)";
// $result = mysqli_query($conn, $query);

// Send WhatsApp message
$whatsappMessage = "Reservasi Baru Gubuk Rawon\nNama: $name\nTanggal dan waktu reservarsi: $new_format_datetime\nJumlah Tamu: $tamu";
$whatsappMessage = urlencode($whatsappMessage);
$whatsappNumber = "+6281286541225"; // Replace with your WhatsApp number

header("Location: https://api.whatsapp.com/send?phone=$whatsappNumber&text=$whatsappMessage");

// Close database connection
mysqli_close($conn);
?>
