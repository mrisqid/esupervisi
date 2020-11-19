<?php

session_start();
include "koneksi.php";
include "1/auth_user.php";

?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>E-SUPERVISI</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="aset/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="aset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="aset/dist/css/skins/_all-skins.min.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include "1/content_header.php";  
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
              <li class="active"><a href="1/index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
			        <li><a href="1/dosen.php"><i class="fa fa-user"></i><span>Kepala Sekolah</span></a></li>
			        <li><a href="1/mahasiswa.php"><i class="fa fa-users"></i><span>Guru</span></a></li>
			        <li><a href="1/ruangan.php"><i class="fa fa-columns"></i><span>Kelas/Bidang</span></a></li>
			        <li><a href="1/jurusan.php"><i class="fa fa-university"></i><span>Sekolah</span></a></li>
					<li><a href="1/jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal Supervisi</span></a></li>
					<li><a href="1/user.php"><i class="fa fa-user-circle-o"></i><span>User</span></a></li>
			        <li><a href="1/about.php"><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Edit Profil</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i>Profil</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
				  <h1><center>
				    <p><b>Edit Profil</b></p>
					</center>
				  </h1>
					<center></center>
				  <center>
				    <table width="526" height="233" border="0" cellpadding="0" cellspacing="0">
					    <tr bgcolor="#CCCCCC">
					      <td width="241" rowspan="4"><form name="form3" method="post" action="">
					        <p>Ubah Password</p>
					        <p>
					          <label for="Password">Masukkan Password Baru</label>
					          <input type="text" name="Password" id="Password">
                            </p>
					      </form></td>
					      <td width="282" rowspan="5"><div align="center">
					        <p>Foto Profil
					          <input name="Foto" type="file" id="Foto">
					        </p>
					        <p>&nbsp;</p>
				          </div></td>
					      <td width="3" height="26">&nbsp;</td>
				        </tr>
					    <tr bgcolor="#CCCCCC">
					      <td height="28">&nbsp;</td>
				        </tr>
					    <tr bgcolor="#CCCCCC">
					      <td height="27">&nbsp;</td>
				        </tr>
					    <tr bgcolor="#CCCCCC">
					      <td height="29">&nbsp;</td>
				        </tr>
					    <tr bgcolor="#006666">
					      <td height="29" colspan="3" bgcolor="#333"><div align="center">
					        <input name="edit" type="submit" id="edit" value="Selesai Mengubah">
					        <?php
							
			//---variabel yang akan disimpan
			$Password	=$_POST['Password'];
			$Password_Hash		= password_hash($Password, PASSWORD_DEFAULT);
			$Foto		=$filename=$_FILES['Foto']['name'];
			
			//--- CODING SIMPAN 
			if($add = mysqli_query($konek, "INSERT INTO user (Password, Foto) VALUES ('$Password_Hash', '$filename')"))
move_uploaded_file($_FILES['Foto']['tmp_name'], "../aset/foto/".$_FILES['Foto']['name']);
{
	header("Location: user.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

			
		?>
				          </div></td>
				        </tr>
			        </table>
					  <p>&nbsp;</p>
				  </center>
					<center></center>
                </div><!-- /.box-header -->
                <div class="box-body">
					
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php
		include	"1/content_footer.php";
	?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
  <script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
  <script src="aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
  <script src="aset/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
  <script src="aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
  <script src="aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
  <script src="aset/dist/js/app.min.js"></script>
</body>
</html>
