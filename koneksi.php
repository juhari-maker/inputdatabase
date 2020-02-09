<?php

// variabel php  awalan simbol $
// koneksi ke mySQL fungsi (IP server, userDB, namaDB)
$koneksi = mysqli_connect("127.0.0.1","root","","belajarPHP");

// Check connection
if (mysqli_connect_errno()){
    // memunculkan pesan koneksi gagal (tanda titik->tanda hubung) untuk isi pesan
    echo "koneksi database gagal : " . mysqli_connect_eror();
} else {
 echo "koneksi sukses" . " silakan Bekerja";
}
?>