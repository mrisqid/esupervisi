<?php
include "../koneksi.php";

$NIP_Kepsek 	= $_POST["NIP_Kepsek"];
$Nama_Kepsek 	= $_POST["Nama_Kepsek"];
$Tanggal_Lahir 	= $_POST["Tanggal_Lahir"];
$JK 			= $_POST["JK"];
$Alamat 		= $_POST["Alamat"];
$No_Telp 		= $_POST["No_Telp"];

if ($edit = mysqli_query($konek, "UPDATE kepsek SET Nama_Kepsek='$Nama_Kepsek', Tanggal_Lahir='$Tanggal_Lahir', JK='$JK', No_Telp='$No_Telp',  Alamat='$Alamat' WHERE NIP_Kepsek='$NIP_Kepsek'")){
		header("Location: dosen.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>