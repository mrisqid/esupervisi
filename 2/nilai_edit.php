<?php

include "../koneksi.php";

$Id_Nilai				= $_POST["Id_Nilai"];
$NIP_Guru_Nilai			= $_POST["NIP_Guru_Nilai"];
$Kode_Sekolah_Nilai		= $_POST["Kode_Sekolah_Nilai"];
$Kode_Kelas_Nilai		= $_POST["Kode_Kelas_Nilai"];
$Nilai					= $_POST["Nilai"];

if($edit = mysqli_query($konek, "UPDATE nilai SET NIP_Guru_Nilai='$NIP_Guru_Nilai', Kode_Sekolah_Nilai='$Kode_Sekolah_Nilai', Kode_Kelas_Nilai='$Kode_Kelas_Nilai',Nilai='$Nilai' WHERE Id_Nilai='$Id_Nilai'")){
	header("Location: nilai.php");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>