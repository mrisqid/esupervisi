<?php

include "../koneksi.php";

$NIP_Guru = $_GET["NIP_Guru"];

if($delete = mysqli_query($konek, "DELETE FROM guru WHERE NIP_Guru='$NIP_Guru'")){
	header("Location: mahasiswa.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>