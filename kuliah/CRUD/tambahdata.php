<?php
require 'functionn.php';

//cek apakah tombol button tambah  sudah di tekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "
    <script>
     alert('data berhasil di tambahkan !!!');
     document.location.href = 'index.php';
    </script>";
  } else {
    echo "Data Gagal Ditambahkan!!!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/tambahdata.css">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <img src="img/profil1.png" alt="">
  <div id="tambahdata">
    <h3>Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
      <label>Nama</label><br>
      <input type="text" name="nama" autofocus required><br>
      <label>Nim</label><br>
      <input type="text" name="nim" required><br>
      <label>Email</label><br>
      <input type="text" name="email" required><br>
      <label>Jurusan</label><br>
      <input type="text" name="jurusan" required><br>
      <label>Gambar</label><br>
      <input type="text" name="gambar"><br>
      <button type="submit" name="tambah"> Tambah Data</button>
    </form>
  </div>
</body>

</html>