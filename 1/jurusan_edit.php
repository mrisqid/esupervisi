<?php

include "../koneksi.php";

$Kode_Sekolah		= $_POST["Kode_Sekolah"];
$Nama_Sekolah		= $_POST["Nama_Sekolah"];
$NIP_Kepsek_Sekolah	= $_POST["NIP_Kepsek_Sekolah"];
$Foto				= $filename=$_FILES['Foto']['name'];

if($edit = mysqli_query($konek, "UPDATE sekolah SET Nama_Sekolah='$Nama_Sekolah', NIP_Kepsek_Sekolah='$NIP_Kepsek_Sekolah', Foto='$filename' WHERE Kode_Sekolah='$Kode_Sekolah'"))
move_uploaded_file($_FILES['Foto']['tmp_name'], "../aset/sekolah/".$_FILES['Foto']['name']);
{
	header("Location: jurusan.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>