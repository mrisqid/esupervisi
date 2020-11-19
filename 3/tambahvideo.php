<?php
include "../koneksi.php";
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
          $b=$_POST['idj'];
          $filename=$_FILES['File']['name'];
          $filename2=$_FILES['File2']['name'];
                    if ($add = mysqli_query($konek, "INSERT INTO video (jadwal_id, file, file2) VALUES ('$b', '$filename', '$filename2')"))
                    {
            mysqli_query($add);
          move_uploaded_file($_FILES['File']['tmp_name'], "../aset/FileUnduh/".$_FILES['File']['name']);
          move_uploaded_file($_FILES['File2']['tmp_name'], "../aset/FileUnduh/".$_FILES['File2']['name']);
          echo "<script> alert('Video berhasil ditambahkan.'); </script>";
          echo "<script> window.location='video.php';</script>";
          exit();
          }
        die ("Terdapat kesalahan : ". mysqli_error($konek));
           ?>