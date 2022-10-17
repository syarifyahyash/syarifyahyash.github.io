<?php
include'koneksi.php';
$id=$_POST[id_user];
$username=$_POST['username'];
$pass=$_POST['password'];
$tipe=$_POST['tipe'];
mysqli_query($connect,"UPDATE user2 SET username='$username', password='$pass', tipe='$tipe' WHERE id_user='$id'");
header('location:form_input_user.php');
?>