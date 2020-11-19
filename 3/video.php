<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>e-SUPERVISION</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../aset/foto/favico.PNG">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../aset/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../aset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../aset/dist/css/skins/_all-skins.min.css">
    <style type="text/css">
<!--
.style1 {font-size: 16px}
-->
    </style>
</head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include "content_header.php";  
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
				<li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
					<li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
					<li><a href="deskripsisekolah.php"><i class="fa fa-university"></i><span>Visi & Misi Sekolah</span></a></li>
					<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal Supervisi</span></a></li>
          <li class="active"><a href="video.php"><i class="fa fa-film"></i><span>Video Mengajar</span></a></li>
					<li><a href="nilai.php"><i class="fa fa-book"></i><span>Nilai</span></a></li>
					<li><a href="tindaklanjut.php"><i class="fa fa-book"></i><span>Link Tindak Lanjut</span></a></li>
					<li><a href="about.php"><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Video Mengajar
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-film"></i> Video Mengajar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box"><div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
					       <?php
                 $queryvideo = mysqli_query ($konek, "SELECT * FROM video 
                  INNER JOIN jadwal ON jadwal_id=Id_Jadwal
                  INNER JOIN guru ON NIP_Guru_Jadwal=NIP_Guru
                  WHERE NIP_Guru_Jadwal='$_SESSION[Username]'");
                 if($queryvideo == false){
                  die("Terjadi Kesalahan : ".mysqli_error($konek));
                 }
                 $queryjadwal = mysqli_query ($konek, "SELECT Id_Jadwal, NIP_Kepsek_Jadwal, NIP_Guru_Jadwal, Kode_Kelas_Jadwal, Tanggal_Jadwal, Hari,
              Jam, NIP_Kepsek, Nama_Kepsek, NIP_Guru, Nama_Guru, Kode_Kelas, Nama_Kelas FROM jadwal 
              INNER JOIN kepsek ON NIP_Kepsek_Jadwal=NIP_Kepsek
              INNER JOIN guru ON NIP_Guru_Jadwal=NIP_Guru
              INNER JOIN kelas ON Kode_Kelas_Jadwal=Kode_Kelas
              WHERE NIP_Guru_Jadwal='$_SESSION[Username]'");
            if($queryjadwal == false){
              die ("Terjadi Kesalahan : ". mysqli_error($konek));
            }
            $video = mysqli_fetch_array($queryvideo);
                        $jadwal = mysqli_fetch_array ($queryjadwal);
                          if ($video['NIP_Guru'] > 0){
                            echo "<h4><center><strong>Anda Sudah Mengupload Video! Silahkan Hubungi Supervisor</strong></center></h4>";
                          }
                          else if ($jadwal['NIP_Guru'] > 0){
                            echo "
                            <form action='tambahvideo.php' method='post' enctype='multipart/form-data' name='form2'>
<div class='row'>
  <div class='col-lg-12'>
                    <h4>Upload Video Mengajar</h4>
                        <input type='hidden' name='idj' id='idj' value='$jadwal[Id_Jadwal]'/>
    </div>
</div>
<div class='row'>
  <div class='col-lg-12'>
                <div class='form-group row'>
                <label for='video1' class='col-sm-2 col-form-label'>Video 1</label>
                <div class='col-sm-2'>
                <div class='custom-file'>
                  <input type='file' class='custom-file-input' id='File' name='File' accept='video/mp4'>
                </div>                
                </div>
            </div>
  </div>
</div>
<div class='row'>
  <div class='col-lg-12'>
                <div class='form-group row'>
                <label for='video2' class='col-sm-2 col-form-label'>Video 2</label>
                <div class='col-sm-2'>
                <div class='custom-file'>
                  <input type='file' class='custom-file-input' id='File2' name='File2' accept='video/mp4'>
                </div>                
                </div>
            </div>
  </div>
</div>
            <div class='form-group row justify-content-end'>
                <div class='col-sm-10'>
                    <button type='submit' class='btn btn-primary'>Upload Video</button>
                </div>
            </div>
</form>";
                          }
                          else {
                            echo "<h4><center><strong>Jadwal Supervisi Belum Diupload! Silahkan Kontak Supervisor</strong></center></h4>";
                          }
                 ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
  </body>
</html>
