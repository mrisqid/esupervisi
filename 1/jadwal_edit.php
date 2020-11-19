<?php

include "../koneksi.php";

$Id_Jadwal				= $_POST["Id_Jadwal"];
$NIP_Kepsek_Jadwal		= $_POST["NIP_Kepsek_Jadwal"];
$NIP_Guru_Jadwal	    = $_POST["NIP_Guru_Jadwal"];
$Kode_Kelas_Jadwal	    = $_POST["Kode_Kelas_Jadwal"];
$Kode_Sekolah_Jadwal	= $_POST["Kode_Sekolah_Jadwal"];
$Semester				= $_POST["Semester"];
$Tanggal_Jadwal 		= $_POST["Tanggal_Jadwal"];
$Hari					= $_POST["Hari"];
$Jam_Mulai				= $_POST["Jam_Mulai"];
$Jam_Selesai			= $_POST["Jam_Selesai"];
$Jam					= $Jam_Mulai."-".$Jam_Selesai;

if($edit = mysqli_query($konek, "UPDATE jadwal SET NIP_Kepsek_Jadwal='$NIP_Kepsek_Jadwal', NIP_Guru_Jadwal='$NIP_Guru_Jadwal', Kode_Kelas_Jadwal='$Kode_Kelas_Jadwal', Kode_Sekolah_Jadwal='$Kode_Sekolah_Jadwal', Semester='$Semester', Tanggal_Jadwal='$Tanggal_Jadwal',
	Hari='$Hari', Jam='$Jam' WHERE Id_Jadwal='$Id_Jadwal'")){
		header("Location: jadwal.php");
		exit();
	}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>