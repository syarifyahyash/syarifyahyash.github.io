<?php
include 'koneksi.php';
	$nama=$_POST['username'];
	$pass=$_POST['password'];
	$ceklogin=mysqli_query($connect,"select * from user2 where username='$nama' AND password='$pass' ");
	$cekdata=mysqli_fetch_array($ceklogin);
	$periksa=mysqli_num_rows($ceklogin);
session_start();

if ($periksa!=0) {

	if ($cekdata['tipe']=="0"){
		$_SESSION['username'] = $nama;
		
		$_SESSION['tipe'] = "0";
		header('location:home1.php');
	}

	else if($cekdata['tipe']=="1"){
		$_SESSION['username'] = $nama;
		
		$_SESSION['tipe'] = "1";
		header('location:home2.php');
	}

} 

/* SCRIPT ASLI !!!!
if ($periksa!=0) {
	/*
	session_register("username");
	session_register("password");
	* /
	
	$_SESSION[username]=$cekdata[username];
	$_SESSION[password]=$cekdata[password];
	
	header('location:ceklogin.php');
	} */

	?>

	<script language="javascript">
	alert('USERNAME / PASSWORD ANDA SALAH !!!');
	alert('RELAX !! TENANG !! INGETIN USERNAME / PASSWORD');
	alert('SOALNYA GADA FITUR GANTI PASSWORD AKOWKOAWK XD');
	history.go(-1);
	</script>
	
	<?
	
	?>