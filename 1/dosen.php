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
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
    <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
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
              <li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
              <li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
			        <li class="active"><a href="dosen.php"><i class="fa fa-user"></i><span>Kepala Sekolah</span></a></li>
			        <li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Guru</span></a></li>
			        <li><a href="ruangan.php"><i class="fa fa-columns"></i><span>Kelas/Bidang</span></a></li>
			        <li><a href="jurusan.php"><i class="fa fa-university"></i><span>Sekolah</span></a></li>
					<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal Supervisi</span></a></li>
					<li><a href="user.php"><i class="fa fa-user-circle-o"></i><span>User</span></a></li>
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
            Kepala Sekolah
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i> Kepala Sekolah</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
				<a href="#"><button class="btn btn-primary" type="button" style="font-size:13px;font-family:arial;text-align:center" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_kepsek.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup Dosen -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="style1 modal-title"><strong>TAMBAH KEPALA SEKOLAH </strong></h4>
					</div>
					<div class="modal-body">
						<form action="dosen_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIP_Kepsek" type="text" class="form-control" placeholder="Nomor Induk Pengajar"/>
									</div>
							</div>
							<div class="form-group">
								<label>Kepala Sekolah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_Kepsek" type="text" class="form-control" placeholder="Nama Kepala Sekolah"/>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir" name="Tanggal_Lahir" type="text" class="form-control" placeholder="Tanggal Lahir">
									</div>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
										<select name="JK" class="form-control">
											<option selected>Pilih Jenis Kelamin</option>
											<option value="L">Laki - laki</option>
											<option value="P">Perempuan</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>No. Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="No_Telp" type="text" class="form-control" placeholder="No Telpon"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Alamat" type="text" class="form-control" placeholder="Alamat"/>
									</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary  style1" style="width:70px;font-size:13px;font-family:arial;text-align:center">
									Add
								</button>
								<button type="reset" class="btn btn-primary style1" style="width:70px;font-size:13px;font-family:arial;text-align:center" data-dismiss="modal" aria-hidden="true">
									Cancel

								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Dosen Edit -->
		<div id="ModalEditDosen" class="modal fade" tabindex="-1" role="dialog"></div>
		
		<!-- Modal Popup untuk delete--> 
	  <div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this data ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-primary" style="width:70px;font-size:13px;font-family:arial;text-align:center" id="delete_link">Delete</a>
						<button type="button" class="btn btn-primary" style="width:70px;font-size:13px;font-family:arial;text-align:center" data-dismiss="modal">Cancel</button>
					</div>
				</div>
		</div>
	  </div>
		
    </div>
      <span class="style1">
      <!-- /.content-wrapper -->
      </span><span class="style2">
      </span>
    <?php
		include	"content_footer.php";
	?>
  </div>
    <!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
