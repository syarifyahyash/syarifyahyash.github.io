<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas 8 Case</title>
<link rel="stylesheet" type="text/css" href="style-edit-user.css">
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {font-size: 16pt}
-->
</style>
</head>
<body>
<center>
<?php
include'koneksi.php';
$kode=$_GET['idnya'];
$ambil=mysqli_query($connect,"SELECT * FROM user2 WHERE id_user='$kode'");
$array=mysqli_fetch_array($ambil);
?>
<form id="form1" name="form1" method="post" action="edit_user.php">
  <table>
    <tr>
    <td colspan="2"><center>
      <div align="center" class="style1">
        <p class="style2">EDIT DATA USER</p>
        <p>&nbsp;</p>
      </div>
    </tr>
    <tr>
      <td>USERNAME</td>
      <td><label>
      	<input type="hidden" value="<?php echo"$_GET[idnya]"?>" name="id_user" />
        <input type="text" name="username" id="username" value="<?php echo"$array[username]"; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>PASSWORD</td>
      <td><input type="password" name="password" id="password" value="<?php echo"$array[password]"; ?>" /></td>
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
      <td colspan="2"><label>
        <div align="center">
        <form method="post">
        <p><input type="submit" value="SAVE &amp; QUIT" class="btn1"></p>
         </form>
          </div>
      </label></td>
      </tr>
  </table>
</form>
</center>

</body>
</html>
