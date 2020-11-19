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
  <link rel="shortcut icon" type="image/icon" href="../favico.png">
  <!-- Library CSS -->
  <?php
    include "bundle_css.php";
  ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
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
                    <li class="active"><a href="deskripsisekolah.php"><i class="fa fa-university"></i><span>Visi & Misi Sekolah</span></a></li>
                    <li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Data Guru</span></a></li>
          <li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal Supervisi</span></a></li>
          <li><a href="video.php"><i class="fa fa-film"></i><span>Video Mengajar Guru</span></a></li>
          <li><a href="nilai.php"><i class="fa fa-book"></i><span>Penilaian Guru</span></a></li>
                    <li><a href="arsipnilai.php"><i class="fa fa-book"></i><span>Arsip Penilaian</span></a></li>
                    <li><a href="tindaklanjut.php"><i class="fa fa-book"></i><span>Tindak Lanjut</span></a></li>
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
            Visi dan Misi Sekolah
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-calendar"></i> Visi dan Misi Sekolah</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div style="overflow:auto;width:auto;height:auto;padding:10px;border:0px solid #CCCCCC">
          <table class="table table-bordered table-striped table-scalable">
            <?php
              include "dt_jurusan.php";
            ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        
    <!-- Modal Popup Dosen Edit -->
    <div id="ModalProfil" class="modal fade" tabindex="-1" role="dialog"></div>
        
    </div><!-- /.content-wrapper -->
  <?php
    include "content_footer.php";
  ?>
    </div><!-- ./wrapper -->
  <!-- Library Scripts -->
  <?php
    include "bundle_script.php";
  ?>
  </body>
</html>
