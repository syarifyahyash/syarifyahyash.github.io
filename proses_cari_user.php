<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas 8 Case</title>
<link rel="stylesheet" type="text/css" href="style-hasil-cari.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<body>
<?php
include 'koneksi.php';
$kata_kunci=$_POST['tipe'];
$sql=mysqli_query($connect,"select * from user2 where tipe='$kata_kunci' order by username asc");
$cek=mysqli_num_rows($sql);
	if($cek==0)
	{
	echo "<center><b>Tipe belum dipilih/Pencarian data user tidak ditemukan!!!</center></b>";
	}
?>
<center>
<h3><div class="header style1 style1"> 
  <p>&nbsp;</p>
  <p>HASIL PENCARIAN </p>
</div>
</h3>
  <table>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">USERNAME</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">TIPE</th>
    </tr>
    <?php
		$no=1;
		while($array=mysqli_fetch_array($sql)) 
		{
		?>
    <tr>
      <td><div align="center"><?php echo "$no"; $no++; ?></div></td>
      <td><div align="center"><?php echo $array['username'] ?></div></td>
      <td><div align="center"><?php echo $array['password'] ?></div></td>
      <td><div align="center"><?php echo $array['tipe'] ?></div></td>
    </tr>
    <?php
	}
	?>
  </table>
  <form method="post" action="form_pencarian_user.php">
  <p><input type="submit" value="KEMBALI KE PENCARIAN" class="btn3"></p>
  </form>
</center>

</body>
</html>
