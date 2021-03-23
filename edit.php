<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$gambar = $_POST['gambar'];
$detail = $_POST['detail'];
$harga_produk = $_POST['harga_produk'];
     

    $sql = "UPDATE products SET nama_produk='$nama_produk', gambar='$gambar' , detail='$detail', harga_produk='$harga_produk'
    WHERE id='$id'";
    $query =mysqli_query($connect,$sql);
    if ($query) {
    header('Location: tampilan.php');
    }else{
    header('location: edit.php?status=gagal');
    }
}
?>