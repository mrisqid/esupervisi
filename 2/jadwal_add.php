<?php

include "../koneksi.php";

$NIP_Kepsek_Jadwal		= $_POST["NIP_Kepsek_Jadwal"];
$NIP_Guru_Jadwal		= $_POST["NIP_Guru_Jadwal"];
$Kode_Kelas_Jadwal		= $_POST["Kode_Kelas_Jadwal"];
$Kode_Sekolah_Jadwal	= $_POST["Kode_Sekolah_Jadwal"];
$Semester				= $_POST["Semester"];
$Tanggal_Jadwal	 		= $_POST["Tanggal_Jadwal"];
$Hari					= $_POST["Hari"];
$Jam_Mulai				= $_POST["Jam_Mulai"];
$Jam_Selesai			= $_POST["Jam_Selesai"];
$Jam					= $Jam_Mulai."-".$Jam_Selesai;

if($add = mysqli_query($konek, "INSERT INTO jadwal(NIP_Kepsek_Jadwal, NIP_Guru_Jadwal, Kode_Kelas_Jadwal, Kode_Sekolah_Jadwal, Semester, Tanggal_Jadwal, Hari, Jam) VALUES ('$NIP_Kepsek_Jadwal', '$NIP_Guru_Jadwal', '$Kode_Kelas_Jadwal', '$Kode_Sekolah_Jadwal', '$Semester','$Tanggal_Jadwal','$Hari', '$Jam')")){
	header("Location: jadwal.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>