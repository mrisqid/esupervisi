<?php
include "../koneksi.php";
					  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					$nip=$_POST['nip'];
					$b=$_POST['idj'];
					$komen=$_POST['Komentar'];
					$filename=$_FILES['File']['name'];
					$filename2=$_FILES['File2']['name'];
					$filename3=$_FILES['File3']['name'];
                    if ($add = mysqli_query($konek, "UPDATE nilai set Komentar='$komen', File='$filename',File2='$filename2',File3='$filename3' WHERE Id_Jadwal_Nilai='$b' AND NIP_Guru_Nilai='$nip'"))
                    {
    				mysqli_query($add);
					move_uploaded_file($_FILES['File']['tmp_name'], "../aset/FileUnduh/".$_FILES['File']['name']);
					move_uploaded_file($_FILES['File2']['tmp_name'], "../aset/FileUnduh/".$_FILES['File2']['name']);
					move_uploaded_file($_FILES['File3']['tmp_name'], "../aset/FileUnduh/".$_FILES['File3']['name']);
					echo "<script> alert('Komentar berhasil ditambahkan.'); </script>";
					
					echo "<script> window.location='nilai.php';</script>";
					exit();
					}
				die ("Terdapat kesalahan : ". mysqli_error($konek));
				  
				   ?>