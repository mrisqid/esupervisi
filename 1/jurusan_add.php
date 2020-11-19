<?php

include "../koneksi.php";

$Kode_Sekolah 		= $_POST["Kode_Sekolah"];
$Nama_Sekolah		= $_POST["Nama_Sekolah"];
$NIP_Kepsek_Sekolah	= $_POST["NIP_Kepsek_Sekolah"];
$Foto				= $filename=$_FILES['Foto']['name'];

if($add = mysqli_query($konek, "INSERT INTO sekolah (Kode_Sekolah, Nama_Sekolah, NIP_Kepsek_Sekolah, Foto) VALUES ('$Kode_Sekolah', '$Nama_Sekolah', '$NIP_Kepsek_Sekolah', '$filename')"))
move_uploaded_file($_FILES['Foto']['tmp_name'], "../aset/sekolah/".$_FILES['Foto']['name']);
{
	header("Location: jurusan.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>