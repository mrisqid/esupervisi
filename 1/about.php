<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
    <title>e-SUPERVISION</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../aset/foto/favico.png">
	<?php
		include "bundle_css.php";
	?>
    <style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style13 {color: #000000; font-size: 16px; }
.style14 {font-size: 18px}
.style15 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
-->
    </style>
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
        <li class="header"><h4>
          <center>
                  <b>Menu Panel</b>
          </center>
              </h4></li>
              <li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
			        <li><a href="dosen.php"><i class="fa fa-user"></i><span>Kepala Sekolah</span></a></li>
			        <li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Guru</span></a></li>
			        <li><a href="ruangan.php"><i class="fa fa-columns"></i><span>Kelas/Bidang</span></a></li>
			        <li><a href="jurusan.php"><i class="fa fa-university"></i><span>Sekolah</span></a></li>
					<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal Supervisi</span></a></li>
					<li><a href="user.php"><i class="fa fa-user-circle-o"></i><span>User</span></a></li>
			        <li class="active"><a href="about.php"><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
      </ul>
      </section>
        <span class="style1">
        <!-- /.sidebar -->
        </span></aside>

      <span class="style1">
      <!-- Content Wrapper. Contains page content -->
      </span>
      <div class="content-wrapper">
          <span class="style1">
          <!-- Content Header (Page header) -->
          <section class="content-header">
          </section></span><section class="content-header"><h1 class="style1">
            Tentang Aplikasi
          </h1>
          <ol class="breadcrumb">
            <li class="style1"><i class="fa fa-info-circle"></i>Tentang Aplikasi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
					<h1><center>
					  </center></h1>
					<center>
					  <p><img src="../aset/foto/logo.PNG" width="250" height="250" />	</p>
				      <form name="form1" method="post" action="">
				        <table width="600" border="0" class="table table-bordered table-striped table-scalable">
                          <tr>
                            <th colspan="4" scope="col"><div align="left"><span class="style15">DESKRIPSI APLIKASI </span></div></th>
                          </tr>
                          <tr>
                            <td colspan="4"><div align="justify" class="style3 style14"><span class="style4">Aplikasi e-Supervision adalah aplikasi berbasis web yang menggunakan bahasa pemrograman PHP. Aplikasi e-Supervision dapat menyelesaikan masalah  penjadwalan, penilaian,</span> tindak lanjut dan pengarsipan dalam kegiatan supervisi akademik. </div></td>
                          </tr>
                          <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="4"><h3><span class="style15">PERANCANG APLIKASI </span></h3></td>
                          </tr>
                          <tr>
                            <td colspan="4"><img src="../aset/foto/gantino%20habibi.jpg" width="182" height="180">                              <div align="center"></div></td>
                          </tr>
                          <tr>
                            <td width="153" class="style4"><p align="left" class="style14">Nama Lengkap</p>                            </td>
                          <td width="24" class="style13"><div align="center">:</div></td>
                            <td width="409" colspan="2" class="style4 style14"> Gantino Habibi, M.Pd </td>
                          </tr>
                          <tr>
                            <td class="style4 style14">Telp.Kantor/HP</td>
                          <td class="style13"><div align="center">:</div></td>
                            <td colspan="2" class="style4 style14"> 0752-21114/085274646891 </td>
                          </tr>
                          <tr>
                            <td class="style4 style14">Email</td>
                          <td class="style13"><div align="center">:</div></td>
                            <td colspan="2" class="style4 style14"> abi_hii@yahoo.co.id </td>
                          </tr>
                          <tr>
                            <td class="style4 style14">Alamat Kantor </td>
                          <td class="style13"><div align="center">:</div></td>
                            <td colspan="2" class="style4 style14"> Jl. TDR Parak Kongsi </td>
                          </tr>
                          <tr>
                            <td class="style13">&nbsp;</td>
                          <td class="style13"><div align="center">:</div></td>
                            <td colspan="2" class="style4 style14"> Kel. Bukit Apit Puhun </td>
                          </tr>
                          <tr>
                            <td class="style13">&nbsp;</td>
                          <td class="style13"><div align="center">:</div></td>
                            <td colspan="2" class="style4 style14"> Kec. Guguk Panjang </td>
                          </tr>
                          <tr>
                            <td class="style13">&nbsp;</td>
                          <td class="style13"><div align="center">:</div></td>
                            <td colspan="2"><span class="style14"> Bukittinggi – Sumatera Barat </span></td>
                          </tr>
                       </table>
			          </form>
					  <p>&nbsp;				              </p>
					</center>
					<center><h2>&nbsp;  </h2>
					</center>
				  <center>
				    
			        <center>
                      <h4 class="style1">&nbsp;</h4>
                    </center>
				    <h4 class="style1">&nbsp;</h4>
			      </center>
                </div>
                
                <span class="style1"><!-- /.box-header -->
                
                </span><div class="box-body">
					
                </div><span class="style1"><!-- /.box-body -->
              </span></div><span class="style1"><!-- /.box -->
            </span></div>
            <span class="style1"><!-- /.col -->
          </span></div><span class="style1"><!-- /.row -->
        </span></section><span class="style1"><!-- /.content -->
    </span></div><span class="style1"><!-- /.content-wrapper -->
	<?php
		include	"content_footer.php";
	?>
    </span></div>
    <span class="style1"><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </span></body>
</html>
