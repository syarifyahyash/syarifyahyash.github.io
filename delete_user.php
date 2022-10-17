<?php
include'koneksi.php';
mysqli_query($connect,"DELETE FROM user2 WHERE id_user='$_GET[idnya]'");
header('location:form_input_user.php');
?>

