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
                    <li><a href="deskripsisekolah.php"><i class="fa fa-university"></i><span>Visi & Misi Sekolah</span></a></li>
                    <li class="active"><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Data Guru</span></a></li>
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
            Guru
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-users"></i> Guru</li>
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
				<a href="#"><button class="btn btn-primary" style="width:70px;font-size:13px;font-family:arial;text-align:center" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_mahasiswa.php";
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
						<h4 class="modal-title">Tambah Guru</h4>
					</div>
					<div class="modal-body">
						<form action="mahasiswa_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIP_Guru" type="text" class="form-control" placeholder="Nomor Induk Pengajar"/>
									</div>
							</div>
							<div class="form-group">
								<label>Guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_Guru" type="text" class="form-control" placeholder="Nama Guru"/>
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
							<div class="form-group">
								<label>Kelas/Bidang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="Kode_Kelas_Guru" class="form-control">
											<?php
												
												$querykelas = mysqli_query($konek, "SELECT * FROM kelas");
												if($querykelas == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($kelas = mysqli_fetch_array($querykelas)){
													echo "
														<option value='$kelas[Kode_Kelas]'>$kelas[Nama_Kelas]</option>";
												}
											?>
										</select>
									</div>
							</div>
                        	<div class="form-group">
								<label>Sekolah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="Kode_Sekolah_Guru" class="form-control">
											<?php
												
												$querysekolah = mysqli_query($konek, "SELECT * FROM sekolah WHERE NIP_Kepsek_Sekolah='$_SESSION[Username]'");
												if($querysekolah == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($sekolah = mysqli_fetch_array($querysekolah)){
													echo "
														<option value='$sekolah[Kode_Sekolah]'>$sekolah[Nama_Sekolah]</option>";
												}
											?>
										</select>
									</div>
							</div>

							<div class="modal-footer">
								<button class="btn btn-primary" style="width:70px;font-size:13px;font-family:arial;text-align:center" type="submit">
									Add
								</button>
								<button type="reset" class="btn btn-primary" style="width:70px;font-size:13px;font-family:arial;text-align:center"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Dosen Edit -->
		<div id="ModalEditMahasiswa" class="modal fade" tabindex="-1" role="dialog"></div>
		
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
