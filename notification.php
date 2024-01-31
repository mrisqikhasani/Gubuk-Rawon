<?php
include('layout/header.php');
?>
<!-- Bootstrap -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .container {
    max-width: 400px;
  }

  .card {
    border: 1px solid #17a2b8;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .card-header {
    background-color: #17a2b8;
    color: #fff;
    padding: 10px;
    text-align: center;
  }

  .card-body {
    padding: 20px;
  }

  .card-title {
    font-size: 2rem;
    margin-bottom: 10px;
  }

  .card-text {
    color: #333;
  }

  .note {
    background-color: #d4edda;
    border: 1px solid #c3e6cb;
    border-radius: 4px;
    padding: 10px;
    margin-top: 15px;
  }

  .bank-info {
    list-style: none;
    padding: 0;
  }

  .bank-info li {
    margin-bottom: 5px;
  }


</style>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header">Sukses!</div>
      <div class="card-body">
        <h2 class="card-title">Pesanan Anda Berhasil</h2>
        <p class="card-text">Terima kasih atas pesanan Anda. Kami akan segera memprosesnya.</p>
        <p class="card-text note">Jika Anda membayar dengan transfer bank, agar pesanan kami dapat proses, silahkan transfer ke rekening berikut</p>
        <ul class="bank-info">
          <li><strong>Bank:</strong> Bank ABC</li>
          <li><strong>Nomor Rekening:</strong> 1234-5678-9012</li>
          <li><strong>Atas Nama:</strong> Nama Anda</li>
        </ul>
        <p class="card-text note">Setelah melakukan transfer, konfirmasikan ke nomor WhatsApp kami: <strong>+6281234567890</strong></p>
        <a href="../index.php" class="btn btn-primary">Kembali ke Halaman Utama </a>
      </div>
    </div>
  </div>

  <?php
  include('layout/footer.php');
  ?>