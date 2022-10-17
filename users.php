<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas 8 Case</title>
<link rel="stylesheet" type="text/css" href="style-users.css">
</head>
<body>
<center>

<table class="subtabel">
  <tr>
    <th  scope="col">NO</th>
    <th  scope="col">USERNAME</th>
    <th  scope="col">PASSWORD</th>
    <th  scope="col">TIPE</th>
  </tr>
  <?php
  include'koneksi.php';
  $no=1;
  $ambil=mysqli_query($connect,"SELECT * FROM user2");
  while($array=mysqli_fetch_array($ambil))
  {
  ?>
  <tr>
    <td ><div align="center"><?php echo"$no"; $no++; ?></div></td>
    <td ><div align="center"><?php echo"$array[username]"; ?></div></td>
    <td ><div align="center"><?php echo"$array[password]"; ?></div></td>
    <td ><div align="center"><?php echo"$array[tipe]"; ?></div></td>

    </tr>
  <?php
  }
  ?>
</table>
<p>&nbsp;</p>
<p>
  <form method="post" action="index.php">
  <p><input type="submit" value="LOGIN PAGE" class="btn1"></p>
  </form>
</p>
</center>
