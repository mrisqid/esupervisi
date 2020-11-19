<?php

include "../koneksi.php";

$Id_Usergroup_User	= $_POST["Id_Usergroup_User"];
$Username			= $_POST["User_Kepsek"];
$Password			= $_POST["Password"];
$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);
$Foto				= $filename=$_FILES['Foto']['name'];

if($add = mysqli_query($konek, "INSERT INTO user (Id_Usergroup_User, Username, Password, Foto) VALUES ('$Id_Usergroup_User', '$Username', '$Password_Hash', '$filename')"))
move_uploaded_file($_FILES['Foto']['tmp_name'], "../aset/foto/".$_FILES['Foto']['name']);
{
	header("Location: user.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>