<?php

include "../koneksi.php";

$NIP_Guru 			= $_POST["NIP_Guru"];
$Nama_Guru			= $_POST["Nama_Guru"];
$Tanggal_Lahir		= $_POST["Tanggal_Lahir"];
$JK					= $_POST["JK"];
$No_Telp			= $_POST["No_Telp"];
$Alamat				= $_POST["Alamat"];
$Kode_Kelas_Guru	= $_POST["Kode_Kelas_Guru"];
$Kode_Sekolah_Guru	= $_POST["Kode_Sekolah_Guru"];


if($edit = mysqli_query($konek, "UPDATE guru SET Nama_Guru='$Nama_Guru', Tanggal_Lahir='$Tanggal_Lahir', JK='$JK', 
	No_Telp='$No_Telp', Alamat='$Alamat', Kode_Kelas_Guru='$Kode_Kelas_Guru', Kode_Sekolah_Guru='$Kode_Sekolah_Guru' WHERE NIP_Guru='$NIP_Guru'")){
		header("Location: mahasiswa.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>