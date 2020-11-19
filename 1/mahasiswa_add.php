<?php
include "../koneksi.php";

$NIP_Guru 			= $_POST["NIP_Guru"];
$Nama_Guru			= $_POST["Nama_Guru"];
$Tanggal_Lahir 		= $_POST["Tanggal_Lahir"];
$JK 				= $_POST["JK"];
$Alamat 			= $_POST["Alamat"];
$No_Telp 			= $_POST["No_Telp"];
$Kode_Kelas_Guru 	= $_POST["Kode_Kelas_Guru"];
$Kode_Sekolah_Guru 	= $_POST["Kode_Sekolah_Guru"];


if ($add = mysqli_query($konek, "INSERT INTO guru (NIP_Guru, Nama_Guru, Tanggal_Lahir, JK, No_Telp, Alamat, Kode_Kelas_Guru, Kode_Sekolah_Guru) VALUES 
	('$NIP_Guru', '$Nama_Guru', '$Tanggal_Lahir', '$JK', '$No_Telp', '$Alamat', '$Kode_Kelas_Guru', '$Kode_Sekolah_Guru')")){
		header("Location: mahasiswa.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>