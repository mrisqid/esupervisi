<?php
include "../koneksi.php";

$Kode_Kelas	= $_POST["Kode_Kelas"];
$Nama_Kelas	= $_POST["Nama_Kelas"];

if($add = mysqli_query($konek, "INSERT INTO kelas (Kode_Kelas, Nama_Kelas) VALUES ('$Kode_Kelas', '$Nama_Kelas')")){
	header("Location: ruangan.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>