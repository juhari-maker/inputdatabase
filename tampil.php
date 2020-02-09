<?php
    include "koneksi.php"
?>
<h2>Data Berita</h2>

<table>

    <tr>
        <th>Judul</th>
        <th>Isi</th>
        <th>Tanggal</th>
        <th>Penulis</th>
    </tr>

    <?php

        $data = mysqli_query($koneksi,"select * from DataBerita");

        while ($arraydata = mysqli_fetch_array($data)) {
    ?>

    <tr>
            <td><?php echo $arraydata['Judul'] ?></td>
            <td><?php echo $arraydata['Isi'] ?></td>
            <td><?php echo $arraydata['Tanggal'] ?></td>
            <td><?php echo $arraydata['Penulis'] ?></td>
    </tr>
     <?php   } ?>

</table>