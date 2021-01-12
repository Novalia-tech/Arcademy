<?php 
$conn = mysqli_connect('localhost', 'root', '', 'fazztrack');

function query($data){
    global $conn;
    $query = mysqli_query($conn, $data);
    $results = [];
    while ($result =mysqli_fetch_assoc($query)) {
        $results[]= $result;
    }return $results;
}

function tambah($data){
    global $conn;
    $namaProduk = htmlspecialchars($data['nama']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $harga= $data['harga'];
    $jumlah = $data['jumlah'];
    $query = "INSERT INTO produk VALUES('','$namaProduk','$keterangan','$harga','$jumlah')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = $data['id'];
    $namaProduk = htmlspecialchars($data['nama']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $harga= $data['harga'];
    $jumlah = $data['jumlah'];
    $query = "UPDATE produk SET nama_produk = '$namaProduk',
    keterangan = '$keterangan',
    harga = '$harga',
    jumlah = '$jumlah'  WHERE id = '$id'
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    $query = "DELETE FROM produk WHERE id= '$id'";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}



















?>