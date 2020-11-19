<?php

include "../koneksi.php";

$NIP_Kepsek	= $_GET["NIP_Kepsek"];

if($delete = mysqli_query ($konek, "DELETE FROM kepsek WHERE NIP_Kepsek='$NIP_Kepsek'")){
	header("Location: dosen.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>