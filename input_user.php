<?php
include'koneksi.php';
$username=$_POST['username'];
$pass=$_POST['password'];
$tipe=$_POST['tipe'];
$simpan=mysqli_query($connect,"INSERT INTO user2(username, password, tipe)VALUES('$username','$pass','$tipe')");
header('location:form_input_user.php');
?>