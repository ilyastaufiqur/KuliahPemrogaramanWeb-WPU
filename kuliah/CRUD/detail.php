<?php
require 'functionn.php';

//ambil id dari url
$id  = $_GET['id'];

//query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/detail.css">
  <title>Detail Mahasiswa</title>
</head>

<body class="detail">
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $mhs['gambar']; ?>"></li>
    <li><?= $mhs['nim']; ?></li>
    <li><?= $mhs['nama']; ?></li>
    <li><?= $mhs['email']; ?></li>
    <li><?= $mhs['jurusan']; ?></li>
    <li>
      <button id="ubah">
        <a href="ubah.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Apakah anda yakin ingin mengubah data')">Ubah</a>
      </button> |
      <button id="hapus">
        <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data')">Hapus</a>
      </button>
    </li>
    <li><a href="index.php">Kembali Ke Data mahasiswa</a></li>
  </ul>
</body>

</html>