<?php 
require 'function.php';
$id = $_GET['id'];
$produk = query("SELECT * FROM produk WHERE id= '$id'")[0];

if(isset($_POST['edit'])){
    if(edit($_POST) == 1){
        echo "<script>
            alert('Data Berhasil Diubah');
            document.location.href ='index.php';    
        </script>";
    }else{
        echo "<script>
            alert('Data Gagal Diubah');
            document.location.href ='index.php';    
        </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        form{
            width:500px;
        }
    </style>
    <title>Edit</title>
</head>
<body>
<div class="row justify-content-center ">
    <form method="post" action="" class="p-5 m-5 border border-primary">
        <h3 class="row justify-content-center text-primary mb-5">UBAH DATA PRODUK</h3>
        <input type="hidden" value="<?= $produk['id'] ?>" name="id">
    <div class="row mt-3">
        <label for="nama" class="col-4" col-form-label" >Nama Produk</label>
        <input type="text" class="form-control col-8 col-form-label" name="nama" id="nama" value="<?= $produk['nama_produk'] ?>">
        </div>
    <div class="row mt-3">
        <label for="keterangan" class="col-4" col-form-label" >Keterangan produk</label>
        <input type="text" class="form-control col-8 col-form-label"  name="keterangan" id="keterangan" value="<?= $produk['keterangan'] ?>">
        </div>
    <div class="row mt-3">
        <label for="harga" class="col-4" col-form-label" >Harga Produk</label>
        <input type="number" class="form-control col-8 col-form-label"  name="harga" id="harga" value="<?= $produk['harga'] ?>">
        </div>
    <div class="row mt-3">
        <label for="jumlah" class="col-4" col-form-label" >Jumlah Produk</label>
        <input type="number" class="form-control col-8 col-form-label" name="jumlah" id="jumlah" value="<?= $produk['jumlah'] ?>">
    </div>
    <div class="row justify-content-center m-4">
        <button name="edit" class="btn btn-outline-primary col-6 col-form-label center">Edit produk</button>
    </div>
    </form>
</div>














    
</body>
</html>














