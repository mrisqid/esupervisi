<?php

include "../koneksi.php";

$Kode_Sekolah	= $_GET["Kode_Sekolah"];

if($delete = mysqli_query($konek, "DELETE FROM sekolah WHERE Kode_Sekolah='$Kode_Sekolah'")){
	header("Location: jurusan.php");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>