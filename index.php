<?php 
require 'function.php';

$produk = query("SELECT * FROM produk");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Produk Arcademy</title>
    
</head>
<body>
    
    <!-- DATA -->
    <div class="container">
    <h3 class="text-center m-5">DATA PRODUK</h3>
    <table class="table table-hover p-3">
    <thead class="thead-dark text-center">
        <tr>
        <th>Nama Produk</th>
        <th>Keterangan</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Aksi</th>
        </tr>
    </thead>
        <?php foreach($produk as $pdk):?>
        <tr>
            <input type="hidden" value="<?= $pdk["id"]; ?>">
        <td><?= $pdk["nama_produk"]; ?></td>
        <td><?= $pdk["keterangan"]; ?></td>
        <td><?= $pdk["harga"]; ?></td>
        <td><?= $pdk["jumlah"]; ?></td>
        <td>
        <a href="edit.php?id=<?= $pdk["id"];?>" type="button" class="btn btn-outline-primary col-lg-5" >Edit</a>
        <a href="delete.php?id=<?= $pdk["id"];?>" type="button" class="btn btn-outline-danger col-lg-5" onclick="return confirm('Anda yakin ingin menghapus data?')">
        Hapus</a>
        </td>
        </tr>
        <?php endforeach;?>
    </table>
    <a href="tambah.php" class="mt-5 btn btn-outline-success">Tambah Data Produk</a>
    </div>


</body>
</html>




