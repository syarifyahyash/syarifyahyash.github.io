<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas 8 Case</title>
<link rel="stylesheet" type="text/css" href="style-input-user.css">
</head>
<body>
<center>
<form action="input_user.php" method="post" enctype="multipart/form-data">
  <table width="316" height="198" border="0">
    <tr>
      <th colspan="2" scope="col">INPUT DATA USER</th>
    </tr>
    <tr>
      <td>USERNAME</td>
      <td><label>
        <input type="text" name="username" id="username" />
      </label></td>
    </tr>
    <tr>
      <td>PASSWORD</td>
      <td><input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td>TIPE</td>
      <td><label>
        <select name="tipe" id="tipe">
          <option>0</option>
          <option>1</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="SIMPAN" class="tombol" />
      </label></td>
    </tr>
  </table>
</form>
<table class="subtabel"">
  <tr>
    <th  scope="col">NO</th>
    <th  scope="col">USERNAME</th>
    <th  scope="col">PASSWORD</th>
    <th  scope="col">TIPE</th>
    <th colspan="2" scope="col">TINDAKAN</th>
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

    <td ><div align="center">
    <form method="post" action="form_edit_user.php?idnya=<?php echo $array['id_user']; ?>p">
    <p><input type="submit" value="EDIT" class="btn2"></p>
    </form>

    <td ><div align="center">
    <form method="post" action="delete_user.php?idnya=<?php echo $array['id_user']; ?>" onClick="alert('USER TELAH DI HAPUS !')">
    <p><input type="submit" value="DELETE" class="btn3"></p>
    </form>
    </tr>
  <?php
  }
  ?>
</table>
<p>&nbsp;</p>
<p>
  <form method="post" action="home1.php">
  <p><input type="submit" value="HOME ADMIN" class="btn1"></p>
  </form>
</p>
</center>

</body>
</html>
