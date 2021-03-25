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
    echo "Data Gagal di ubah Ditambahkan!!!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h3>Ubah Data Mahasiswa</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required value="<?= $mhs['nama']; ?>">
        </label>
      </li>
      <li>
        <label>
          Nim :
          <input type="text" name="nim" required value="<?= $mhs['nim']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required value="<?= $mhs['email']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required value="<?= $mhs['jurusan']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" value="<?= $mhs['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah"> Ubah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>