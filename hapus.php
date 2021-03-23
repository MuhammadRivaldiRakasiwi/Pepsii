<?php
include 'koneksi.php';

if(isset($_GET['id'])){
    header ('location : tampilan.php');
}

$id = $_GET ['id'];
$sql = "DELETE FROM products WHERE id = '$id'";
$query = mysqli_query($connect,$sql);

if($query) {
    header ('location: tampilan.php');
}else{
    header ('location : hapus.php?status=gagal');
}
?>