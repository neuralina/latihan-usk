<?php
include "koneksi.php";

$title = $_POST['title'];
$deskripsi = $_POST['deskripsi'];
$id_category = $_POST['id_category'];
$status = $_POST['status'];
$id_user = "1";

$query = mysqli_query($koneksi, "INSERT INTO todo (title,deskripsi,id_category,status)
        VALUES ('$title','$deskripsi','$id_category','$status')");
if($query) {
    header("location:index.php?tambah=yes");
}else{
    header("location:index.php?tambah=no");
}
exit();
?>