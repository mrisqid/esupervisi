<?php
include "../koneksi.php";

$NIP_Kepsek 	= $_POST["NIP_Kepsek"];
$Nama_Kepsek 	= $_POST["Nama_Kepsek"];
$Tanggal_Lahir 	= $_POST["Tanggal_Lahir"];
$JK 			= $_POST["JK"];
$Alamat 		= $_POST["Alamat"];
$No_Telp 		= $_POST["No_Telp"];

if ($add = mysqli_query($konek, "INSERT INTO kepsek (NIP_Kepsek, Nama_Kepsek, Tanggal_Lahir, JK, No_Telp, Alamat) VALUES 
	('$NIP_Kepsek', '$Nama_Kepsek', '$Tanggal_Lahir', '$JK', '$No_Telp', '$Alamat')")){
		header("Location: dosen.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>