<?php

session_start();
include "../koneksi.php";
include "auth_user.php";

$daftarhari[] = "Senin";
$daftarhari[] = "Selasa";
$daftarhari[] = "Rabu";
$daftarhari[] = "Kamis";
$daftarhari[] = "Jumat";
$daftarhari[] = "Sabtu";
$daftarhari[] = "Minggu";

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
    <style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
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
              <li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
              <li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
              <li><a href="deskripsisekolah.php"><i class="fa fa-university"></i><span>Visi & Misi Sekolah</span></a></li>
					<li class="active"><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal Supervisi</span></a></li>
					<li><a href="nilai.php"><i class="fa fa-book"></i><span>Nilai</span></a></li>
					<li><a href="nilai.php"><i class="fa fa-book"></i><span>Link Tindak Lanjut</span></a></li>
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
            Jadwal
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-calendar"></i> Jadwal</li>
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
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_jadwal.php";
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
						<h4 class="modal-title">Tambah Jadwal</h4>
					</div>
					<div class="modal-body">
						<form action="jadwal_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label><span class="style1">Kepala Sekolah</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="NIP_Kepsek_Jadwal" class="form-control">
										<?php
											
											$querykepsek = mysqli_query($konek, "SELECT * FROM kepsek");
											if ($querykepsek == false){
												die ("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while ($kepsek = mysqli_fetch_array($querykepsek)){
												echo "<option value='$kepsek[NIP_Kepsek]'>$kepsek[Nama_Kepsek]</option>";
											}
										?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label class="style1">Guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<select name="NIP_Guru_Jadwal" class="form-control">
											<?php
												
												$querygr = mysqli_query ($konek, "SELECT * FROM guru");
												if ($querygr == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($gr = mysqli_fetch_array($querygr)){
													echo "<option value='$gr[NIP_Guru]'>$gr[Nama_Guru]</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label class="style1">Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<select name="Kode_Kelas_Jadwal" class="form-control">
											<?php
												
												$querykls = mysqli_query($konek, "SELECT * FROM kelas");
												if($querykls == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($kls = mysqli_fetch_array($querykls)){
													echo "<option value='$kls[Kode_Kelas]'>$kls[Nama_Kelas]</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label class="style1">Sekolah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<select name="Kode_Sekolah_Jadwal" class="form-control">
											<?php
												
												$querysekolah = mysqli_query($konek, "SELECT * FROM sekolah");
												if($querysekolah == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($sekolah = mysqli_fetch_array($querysekolah)){
													echo "<option value='$sekolah[Kode_Sekolah]'>$sekolah[Nama_Sekolah]</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label class="style1">Hari</label>
							  <div class="input-group">
								  <div class="input-group-addon">
									</div>
								  <span class="style1">
								  <select name="Hari" class="form-control">
								    <?php
											for($hari=0; $hari<count($daftarhari); $hari++)
											{
												echo "<option value='$daftarhari[$hari]'>$daftarhari[$hari]</option>";
											}
										?>
							      </select>
								  </span></div>
							</div>
							<div class="form-group">
								    <span class="style1">
								    <label>Jam Mulai</label>
									</span>
								    <div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input id="Jam_Mulai" name="Jam_Mulai" type="text" class="form-control" placeholder="Jam Mulai">
									</div>
							</div>
							<div class="form-group">
								<label class="style1">Jam Selesai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input id="Jam_Selesai" name="Jam_Selesai" type="text" class="form-control" placeholder="Jam Selesai">
									</div>
							</div>
							<div class="modal-footer">
								<button class="style1" type="submit">
									Add
								</button>
								<button type="reset" class="style1"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Dosen Edit -->
		<div id="ModalEditJadwal" class="modal fade" tabindex="-1" role="dialog"></div>
		
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this data ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		
    </div><!-- /.content-wrapper -->
	<?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
