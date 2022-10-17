<?php
include 'koneksi.php';
session_start();
if ($connect,$_SESSION[tipe]=="0") {
header ('location:home1.php');
}
else if ($connect,$_SESSION[tipe]=="1") {
header ('location:home2.php');
}
?>