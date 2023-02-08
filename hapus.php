<?php
include("koneksi.php");
$id=$_GET['id'];

$sql="DELETE FROM tb_motor WHERE id_motor=$id";
$query=mysqli_query($koneksi, $sql);

$sql="DELETE FROM tb_peminjam WHERE id_peminjam=$id";
$query=mysqli_query($koneksi, $sql);

if($query){
    header("Location:tampil.php?status=sukses");
}else{
    die("akses dilarang");
}
?>

