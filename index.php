<?php 
    require 'function.php';

    $plakat = query("SELECT * FROM data");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        img{
            width: 50px;
        }
    </style>
</head>
<body>
    <h1>Data Palakat</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Id Plakat</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Jumlah Barang</th>
            <th>Aksi</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach($plakat as $row) : ?>
            
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["id_plakat"]; ?></td>
            <td><img src="./img/<?= $row["gambar_barabg"]; ?>" alt=""></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["jenis"]; ?></td>
            <td>RP. <?= $row["harga"]; ?></td>
            <td><?= $row["deskripsi"]; ?></td>
            <td><?= $row["jumlah_barang"]; ?></td>
            <td>
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>