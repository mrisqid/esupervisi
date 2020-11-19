<?php
include "../koneksi.php";

$Id_User 			= $_POST["Id_User"];
$Id_Usergroup_User	= $_POST["Id_Usergroup_User"];
$Username			= $_POST["User_Guru"];
$Password			= $_POST["Password"];
$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);
$Foto				= $filename=$_FILES['Foto']['name'];

if($edit = mysqli_query($konek, "UPDATE user SET Id_Usergroup_User='$Id_Usergroup_User', Username='$Username', Password='$Password_Hash', Foto='$filename' WHERE Id_User='$Id_User'"))
move_uploaded_file($_FILES['Foto']['tmp_name'], "../aset/foto/".$_FILES['Foto']['name']);
{
	mysql_query($edit);
	echo "<script> alert('Data Berhasil Diubah. Silahkan Login Ulang Untuk Melihat Perubahan'); </script>";
	echo "<script> window.location='index.php';</script>";
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));


?>