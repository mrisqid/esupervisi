<?php

include "../koneksi.php";

$NIP_Guru_Nilai			= $_POST["NIP_Guru_Nilai"];
$Kode_Sekolah_Nilai		= $_POST["Kode_Sekolah_Nilai"];
$Kode_Kelas_Nilai		= $_POST["Kode_Kelas_Nilai"];
$Nilai					= $_POST["Nilai"];

if($add = mysqli_query($konek, "INSERT INTO nilai (NIP_Guru_Nilai, Kode_Sekolah_Nilai, Kode_Kelas_Nilai, Nilai) VALUES ('$NIP_Guru_Nilai', '$Kode_Sekolah_Nilai', '$Kode_Kelas_Nilai', '$Nilai')")){
	header("Location: nilai.php");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>