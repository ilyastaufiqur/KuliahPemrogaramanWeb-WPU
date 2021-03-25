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
