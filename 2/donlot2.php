<?php
//-------------foldernya
$folder="../aset/FileUnduh/";
//----------cek apakah filenya exists
if(!file_exists($folder.$_GET['file']))
{
	echo "<h1> File doesn't Exists!</h1> <p> 
	File tidak ditemukan, kemungkinan telah terhapus. </p>";
	exit;
}
else {
	header("Content-Type:octet/stream");
	header("Content-Disposition : attachment; filename=".$_GET['file']."");
	$fp=fopen($folder.$_GET['file'], "r");
	$data=fread($fp, filesize($folder.$_GET['file']));
	fclose($fp);
	print $data;
}
?>