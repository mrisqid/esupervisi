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
					<li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
					<li><a href="deskripsisekolah.php"><i class="fa fa-university"></i><span>Visi & Misi Sekolah</span></a></li>
					<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal Supervisi</span></a></li>
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
            Dashboard
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i> Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box"><div class="box-header">
                <center>
                  <form name="form1" method="post" action="">
					    <table width="791" border="0" class="table table-bordered table-striped table-scalable">
                          <tr>
                            <td width="785"><div align="center"><img src="../aset/foto/logo.PNG" width="216" height="237" /></div></td>
                          </tr>
                          <tr>
                            <td><h4><strong>DESKRIPSI SUPERVISI </strong></h4>
                                <p align="justify" class="style1">Supervisi akademik adalah serangkaian kegiatan membantu guru mengembangkan kemampuannya mengelola proses pembelajaran untuk mencapai tujuan pembelajaran (Prasojo &amp; Sudiyono, 2015). S upervisi akademik didesain agar dapat memengaruhi perilaku guru secara langsung dalam proses pengelolaan pembelajaran. (Barnawi &amp; Arifin , 2014). </p>
                                <p align="justify" class="style1">Supervisi akademik memiliki wawasan dan pandangan baru tentang supervisi yang mengandung ide-ide pokok, seperti menggalakkan pertumbuhan profesional guru, mengembangkan kepemimpinan demokratis, melepaskan energi, dan memecahkan berbagai masalah yang berkaitan dengan efektifitas proses belajar mengajar (Fahriani &amp; Ava, 2018) . </p>
                                <p align="justify" class="style1">Pelaksanaan supervisi kepala sekolah harus memiliki 3 kompetensi supervise akademik, yaitu 1) merencanakan program supervisi akademik dalam rangka peningkatan profesionalisme guru; 2) melaksanakan supervisi akademik terhadap guru dengan menggunakan pendekatan dan teknik supervisi yang tepat; dan 3) menindaklanjuti hasil supervisi akademik terhadap guru dalam rangka peningkatan profesionalisme guru (Permendiknas Nomor 13 Tahun 2007). </p>
                                <h4><strong>TUJUAN SUPERVISI </strong></h4>
                                <p align="justify" class="style1">Tujuan supervisi adalah untuk mengembangkan situasi proses pembelajaran yang lebih baik melalui pembinaan dan peningkatan profesi mengajar. Secara lebih terperinci tujuan superevisi adalah (Burhanuddin, 2005 : 100): </p>
                                <ol>
                                  <li class="style1">
                                    <div align="justify"> Meningkatkan efektivitas dan efisiensi proses pembelajaran. </div>
                                  </li>
                                <li class="style1">
                                  <div align="justify">Mengendalikan penyelenggaraan bidang tehnis edukatif di sekolah sesuai dengan ketentuan dan kebijakan yang telah ditetapkan. Menjamin agar kegiatan sekolah berlangsung sesuai dengan ketentuan yang berlaku, sehingga berjalan lancar dan memperoleh hasil yang optimal. </div>
                                </li>
                                <li class="style1">
                                  <div align="justify">Menilai sekolah dalam pelaksanaan tugasnya.</div>
                                </li>
                                <li class="style1">
                                  <div align="justify">Memberikan bimbingan langsung untuk memperbaiki kesalahan, kekuranga n , membantu memecahkan masalah yang dihadapi sekolah. </div>
                                </li>
                                </ol>                                <p><strong>&nbsp; </strong></p>
                                <p align="center"><strong><img width="347" height="276" src="../aset/foto/deskrip.PNG"></strong><strong></strong></p>
                                <h4><strong>DASAR HUKUM </strong></h4>
                                <ol>
                                  <li class="style1">
                                    <div align="justify">Undang Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional.</div>
                                  </li>
                              <li class="style1">
                                <div align="justify"> Undang Undang Nomor 14 Tahun 2005 tentang Guru dan Dosen.</div>
                              </li>
                              <li class="style1">
                                <div align="justify">Peraturan Pemerintah Nomor 19 Tahun 2005 tentang Standar Nasional Pendidikan.</div>
                              </li>
                              <li class="style1">
                                <div align="justify">Permendiknas Nomor 13 Tahun 2007 tentang Standar Kualifikasi Akademik dan Kompetensi&nbsp;&nbsp;Kepala Sekolah / Madrasah.</div>
                              </li>
                              <li class="style1">
                                <div align="justify">Permendiknas Nomor 16 Tahun 2007 tentang Standar Kualifikasi Akademik dan Kompetensi Guru.</div>
                              </li>
                              <li class="style1">
                                <div align="justify">Permendiknas Nomor 19 Tahun 2007 tentang Standar Pengelolaan.</div>
                              </li>
                              <li class="style1">
                                <div align="justify">Permendiknas Nomor 13 Tahun 2007 tentang Standar Kepala Sekolah/ Madrasah.</div>
                              </li>
                              <li class="style1">
                                <div align="justify">Permendikbud Nomor 6 Tahun 2018 tentang Penugasan Guru Sebagai Kepala Sekolah </div>
                              </li>
                              </ol>                                <h4><strong>PRINSIP-PRINSIP PELAKSANAAN </strong></h4>
                                <p align="justify" class="style1">Agar pelaksanaan supervisi akademik berjalan dengan baik maka perlu mengetahui prinsip-prinsinya. Adapun prinsip-prinsip adalah sebagai berikut. </p>
                                <div align="justify" class="style1">
                                  <ol>
                                    <li>Praktis, artinya mudah dikerjakan sesuai kondisi sekolah. </li>
                                    <li>Sistematis, artinya dikembangan sesuai perencanaan program&nbsp; supervise yang matang dan tujuan pembelajaran.</li>
                                    <li>Objektif, artinya masukan sesuai aspek-aspek instrumen. </li>
                                    <li>Realistis, artinya berdasarkan kenyataan sebenarnya. </li>
                                    <li>Antisipatif, artinya mampu menghadapi masalah-masalah yang mungkin akan terjadi. </li>
                                    <li>Konstruktif, artinya mengembangkan kreativitas dan inovasi guru dalam engembangkan proses pembelajaran. Dan kelompok kerja guru, dan membimbing penelitian tindakan kelas (PTK). </li>
                                    <li>Kooperatif, artinya ada kerja sama yang baik antara supervisor dan guru dalam mengembangkan pembelajaran.</li>
                                    <li>Kekeluargaan, artinya mempertimbangkan saling asah, asih, dan asuh dalam mengembangkan pembelajaran. </li>
                                    <li>Demokratis, artinya supervisor tidak boleh mendominasi pelaksanaan supervisi akademik. </li>
                                    <li>Aktif, artinya guru dan supervisor harus aktif berpartisipasi. </li>
                                    <li>Humanis, artinya mampu menciptakan hubungan kemanusiaan yang harmonis, terbuka, jujur, ajeg, sabar, antusias, dan penuh humor. </li>
                                    <li>Berkesinambungan (supervisi akademik dilakukan secara teratur dan berkelanjutan oleh Kepala SD.</li>
                                    <li>Terpadu, artinya menyatu dengan dengan program pendidikan. </li>
                                    <li>Komprehensif, artinya memenuhi ketiga tujuan supervisi akademik di atas. </li>
                                  </ol>
                                </div>
                                </td>
                          </tr>
                        </table>
					    <p>&nbsp;</p>
					    <p>&nbsp;</p>
                  </form>
					  <p>&nbsp;					    </p>
			    </center>
				  <center>
				    <h4>&nbsp;</h4>
				    <p>&nbsp;</p>
				  </center>
					<center>
				  </center>
                </div><!-- /.box-header -->
                <div class="box-body">
					
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
