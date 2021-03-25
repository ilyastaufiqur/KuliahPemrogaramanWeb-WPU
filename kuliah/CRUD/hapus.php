<?php
require 'functionn.php';

if (!isset($_GET['id'])) {
  header("Location: index.php");
}
//mengambil id dari url
$id = $_GET['id'];
if (hapus($id) > 0) {
  echo "
  <script>
   alert('data berhasil di hapus !!!');
   document.location.href = 'index.php';
  </script>";
} else {
  echo "Data Gagal Dihapus!!!";
}
