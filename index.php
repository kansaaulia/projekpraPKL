<?php
include "koneksi.php";
$sql= "SELECT * FROM barang"; 
$query= mysqli_query($koneksi, $sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <h1>Data Barang</h1>
    <table border= "1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
        </tr>

        <?php while($barang = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?= $barang['no']; ?></td>
                <td><?= $barang['nama']; ?></td>
                <td><?= $barang['jenis']; ?></td>
            </tr>

       <?php  } ?>
    </table>
</body>
</html>