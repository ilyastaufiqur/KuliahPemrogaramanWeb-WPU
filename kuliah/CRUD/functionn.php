<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'wpumahasiswa');
}

function query($query)
{
  $konek = koneksi();
  $result = mysqli_query($konek, $query);

  //jika data satu 
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $konek = koneksi();
  $query = " INSERT INTO mahasiswa
  VALUES (null , '$nama', '$nim', '$email', '$jurusan', '$gambar');
  ";

  mysqli_query($konek, $query) or die(mysqli_error($konek));
  echo mysqli_error($konek);
  return mysqli_affected_rows($konek);
}


function hapus($id)
{
  $konek = koneksi();
  mysqli_query($konek, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($konek));
  return mysqli_affected_rows($konek);
}

function ubah($data)
{
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $konek = koneksi();
  $query = " UPDATE mahasiswa SET 
     nama ='$nama', 
     nim = '$nim', 
     email = '$email', 
     jurusan = '$jurusan',
      gambar='$gambar' 
      WHERE id = $id;
  ";

  mysqli_query($konek, $query) or die(mysqli_error($konek));
  echo mysqli_error($konek);
  return mysqli_affected_rows($konek);
}
