<?php
  include "koneksi.php";
  $judul  = $_POST['judul'];
  $isi  = $_POST['isi'];
  $tanggal  = $_POST['tanggal'];
  $penulis  = $_POST['penulis'];
  $mysqli  = "INSERT INTO DataBerita(Judul, Isi, Tanggal, Penulis) VALUES ('$judul', '$isi', '$tanggal','$penulis')";
  //echo $mysqli;
  $simpandata  = mysqli_query($koneksi, $mysqli);
  if ($simpandata) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }
?>