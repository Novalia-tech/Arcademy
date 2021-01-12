<?php 
require 'function.php';

// if(empty($_POST['nama']) || empty($_POST['keterangan']) || empty($_POST['harga']) || empty($_POST['jumlah'])){
//     $error = "<h3 style='color:red;'> Data tidak boleh kosong</h3>";
//     return false;
// }

if(isset($_POST["tambah"])){
    if(tambah($_POST) == 1){
        echo "<script>
        alert ('Produk Berhasil Ditambah')
        document.location.href = 'index.php'
        </script>";
    }else{
        "<script>
        alert ('Produk Gagal Ditambah')
        document.location.href = 'index.php'
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
<div class="row justify-content-center  ">
    <form method="post" action="" class="card m-5 p-5 bg-success text-light">
        <h3 class="row justify-content-center text-light mb-5">TAMBAH DATA PRODUK</h3>
        <input type="hidden" value="<?= $produk['id'] ?>" name="id">
    <div class="row mt-3">
        <label for="nama" class="col-4" col-form-label" >Nama Produk</label>
        <input type="text" class="form-control col-8 col-form-label" name="nama" id="nama"  autocomplete="off" required>
        </div>
    <div class="row mt-3">
        <label for="keterangan" class="col-4" col-form-label" >Keterangan produk</label>
        <input type="text" class="form-control col-8 col-form-label"  name="keterangan" id="keterangan" autocomplete="off" required>
        </div>
    <div class="row mt-3">
        <label for="harga" class="col-4" col-form-label" >Harga Produk</label>
        <input type="number" class="form-control col-8 col-form-label"  name="harga" id="harga" required>
        </div>
    <div class="row mt-3">
        <label for="jumlah" class="col-4" col-form-label" >Jumlah Produk</label>
        <input type="number" class="form-control col-8 col-form-label" name="jumlah" id="jumlah" required>
    </div>
    <div class="row justify-content-center mt-5">
        <button name="tambah" class="btn btn-outline-light col-6 col-form-label center mr-3">Tambah Data produk</button>
        <a href="index.php" class="btn btn-outline-light col-4 col-form-label center">Kembali</a>
    </div>
    </form>
</div>

</body>
</html>


