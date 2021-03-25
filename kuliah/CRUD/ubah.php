<?php
require 'functionn.php';

//jika tidak ada id url
if (!isset($_GET['id'])) {
  header("Location: index.php");
}

// ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

//cek apakah tombol button tambah  sudah di tekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "
    <script>
     alert('data berhasil di ubah !!!');
     document.location.href = 'index.php';
    </script>";
  } else {
    echo "D<script>
    alert('data gagal di ubah !!!');
   </script>";
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
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <img src="img/profil1.png" alt="">
  <h3>Ubah Data Mahasiswa</h3>
  <div id="ubah">
    <form action="" method="POST">
      <input type="hidden" name="id" value="<?= $mhs['id']; ?>"><br>
      <label>Nama</label><br>
      <input type="text" name="nama" autofocus required value="<?= $mhs['nama']; ?>"><br>
      <label>Nim</label><br>
      <input type="text" name="nim" required value="<?= $mhs['nim']; ?>"><br>
      <label>Email</label><br>
      <input type="text" name="email" required value="<?= $mhs['email']; ?>"><br>
      <label>Jurusan</label><br>
      <input type="text" name="jurusan" required value="<?= $mhs['jurusan']; ?>"><br>
      <label>Gambar</label><br>
      <input type="text" name="gambar" value="<?= $mhs['gambar']; ?>"><br>
      <button type="submit" name="ubah"> Ubah Data</button>
    </form>
  </div>
</body>

</html>