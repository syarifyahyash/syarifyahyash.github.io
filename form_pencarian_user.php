<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas 8 Case</title>
<link rel="stylesheet" type="text/css" href="style-pencarian-user.css">
</head>
<body>
<center>
<form id="form1" name="form1" method="post" action="proses_cari_user.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="316" height="83" border="0">
    <tr>
      <th colspan="2" scope="col">
      <label>CARI DATA USER</label>
      <p>
      </th>
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
            <input type="submit" name="button" id="button" value="CARI USER" class="tombol"/>
          </div>
      </label></td>
      </tr>
  </table>
</form>
<form method="post" action="home1.php">
  <p><input type="submit" value="HOME ADMIN" class="btn1"></p>
  </form>
</center>

</body>
</html>
