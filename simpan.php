<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$gambar = $_POST['gambar'];
$detail = $_POST['detail'];
$harga_produk = $_POST['harga_produk'];

$sql = "INSERT INTO products (id, nama_produk, gambar, detail, harga_produk) VALUES ('$id','$nama_produk','$gambar','$detail','$harga_produk')";
$query = mysqli_query ($connect,$sql);
if($query) {
    header('Location: tampilan.php');
}else{
    header('Location : simpan.php?status=gagal');
}
}
?>
