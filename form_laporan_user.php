<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas 8 Case</title>
<link rel="stylesheet" type="text/css" href="style-laporan-user.css">
</head>
<body>
<center>
<form action="cetak_laporan_user.php" method="post">
<p>&nbsp;</p>
<p>&nbsp;</p>
<table>
  <tr>
    <th colspan="2" scope="col">
      <label>CETAK DATA USER</label>
      <p>
  </tr>
  <tr>
    <td>PILIH TIPE USER</td>
    <td><label>
      <select name="tipe" id="tipe" onChange="javascript:dinamis(this)">
      <?php
	  include 'koneksi.php';
	  		$a=mysqli_query($connect,"SELECT * FROM user2 group by tipe");
			while($brstipe=mysqli_fetch_array($a)) 
			{
			echo "<option value='$brstipe[tipe]'>$brstipe[tipe]</option>";
			}
			?>
            </select>
    </label></td>
  </tr>
  <tr>
  <td colspan="2"><label>
      <div align="center">
        <input type="submit" name="button" id="button" value="CETAK USER" class="tombol">
        </div>
    </label></td>
    </tr>
</table>
</form>
<form method="post" action="home1.php">
  <p><input type="submit" value="HOME ADMIN" class="btn3"></p>
  </form>
  </body>
</center>