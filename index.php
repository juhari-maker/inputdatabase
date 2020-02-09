<?php
// include menambahkan file dari folder dan nama file
include "koneksi.php";
$pesan="PHP adalah wesite dinamis";
echo $pesan;
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Data Berita</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="container">
        <h1>Data Berita</h1>
        <form method="post" id="form-berita" class="form">
            <label>Judul Berita:</label>
            <br>
            <input class="texarea" type="text" name="judul" placeholder="Judul Berita">
            <br><br>
            <label>Isi:</label>
            <br>
            <textarea class="textarea" type="text" name="isi" placeholder="Isi Berita"></textarea>
            <br><br>
            <label>Tanggal Pembuatan:</label>
            <br>
            <input class="texarea" type="date" name="tanggal" placeholder="Tanggal Pembuatan">
            <br><br>
            <label>Penulis:</label>
            <br>
            <input class="texarea" type="text" name="penulis" placeholder="Penulis Berita">
            <br><br>
            <input class="button" type="button" id="tombol-simpan" value="Tampilkan Data">
        </form>
    </div>
    <br>   <br>  <br>
    <div class="table">
            <p id="hasil" class="data"></p> 
</div>
</body>

<!-- plugin ajax jquery -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!-- include javascript -->
<script src="insert.js"></script>
</html>