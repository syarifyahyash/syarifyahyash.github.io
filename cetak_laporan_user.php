<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas 8 Case</title>
<link rel="stylesheet" type="text/css" href="style-cetak-user.css">
</head>
<body>
<center>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table>
  <tr>
    <th scope="col">NO</th>
    <th scope="col">USERNAME</th>
    <th scope="col">PASSWORD</th>
    <th scope="col">TIPE</th>
  </tr>
  <?php
  include 'koneksi.php';
  		$no=1;
		$kata_kunci=$_POST['tipe'];
		$ambil=mysqli_query($connect,"select * from user2 where tipe='$kata_kunci' ");
		while($array=mysqli_fetch_array($ambil)) 
		{
		?>
  <tr>
    <td><div align="center"><?php echo"$no"; $no++; ?></div></td>
    <td><div align="center"><?php echo"$array[username]"; ?></div></td>
    <td><div align="center"><?php echo"$array[password]"; ?></div></td>
    <td><div align="center"><?php echo"$array[tipe]"; ?></div></td>
  </tr>
  <?php
  }
  ?>
</table>
<script>
	window.load=print_d();
	function print_d() {
	window.print();
	}
</script>
</center>

</body>
</html>
