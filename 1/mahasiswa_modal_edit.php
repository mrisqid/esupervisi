<?php

include "../koneksi.php";

$NIP_Guru	= $_GET["NIP_Guru"];

$queryguru = mysqli_query($konek, "SELECT * FROM guru WHERE NIP_Guru='$NIP_Guru'");
if($queryguru == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($guru = mysqli_fetch_array($queryguru)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
<!-- Modal Popup Dosen -->
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
-->
</style>

			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4><span class="style3"><strong>EDIT GURU</strong></span></h4>
					</div>
					<div class="modal-body">
						<form action="mahasiswa_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIP_Guru" type="text" class="form-control" value="<?php echo $guru["NIP_Guru"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_Guru" type="text" class="form-control" value="<?php echo $guru["Nama_Guru"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir2" name="Tanggal_Lahir" type="text" class="form-control" value="<?php echo $guru["Tanggal_Lahir"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
										<select name="JK" class="form-control">
											<option value="<?php echo $guru["JK"]; ?>" selected>
											<?php
												if ($guru["JK"]=="L"){
													echo "Laki - laki";
												}
												else{
													echo "Perempuan";
												}
											?>
											</option>
											<?php
												if ($guru["JK"]=="L"){
													echo "<option value='P'>Perempuan</option>";
												}
												else{
													echo "<option value='L'>Laki - laki</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>No. Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="No_Telp" type="text" class="form-control" value="<?php echo $guru["No_Telp"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Alamat" type="text" class="form-control" value="<?php echo $guru["Alamat"]; ?>"/>
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
										
											$querygurukelas=mysqli_query($konek, "SELECT Kode_Kelas_Guru, Kode_Kelas, Nama_Kelas FROM guru INNER JOIN kelas ON Kode_Kelas_Guru=Kode_Kelas WHERE NIP_Guru='$NIP_Guru'");
											if($querygurukelas==false){
												die("Terdapat Kesalahan : ".mysqli_error($konek));
											}
											while($gurukelas=mysqli_fetch_array($querygurukelas)){
												echo "<option value=$gurukelas[Kode_Kelas_Guru] selected>$gurukelas[Nama_Kelas]</option>";
											}
										
											$querykelas = mysqli_query($konek, "SELECT * FROM kelas");
											if($querykelas==false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($kelas=mysqli_fetch_array($querykelas)){
												if($kelas["Kode_Kelas"]!=$guru["Kode_Kelas_Guru"]){
													echo "<option value=$kelas[Kode_Kelas]>$kelas[Nama_Kelas]</option>";
												}
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
										
											$querygurusekolah=mysqli_query($konek, "SELECT Kode_Sekolah_Guru, Kode_Sekolah, Nama_Sekolah FROM guru INNER JOIN sekolah ON Kode_Sekolah_Guru=Kode_Sekolah WHERE NIP_Guru='$NIP_Guru'");
											if($querygurusekolah==false){
												die("Terdapat Kesalahan : ".mysqli_error($konek));
											}
											while($gurusekolah=mysqli_fetch_array($querygurusekolah)){
												echo "<option value=$gurusekolah[Kode_Sekolah_Guru] selected>$gurusekolah[Nama_Sekolah]</option>";
											}
										
											$querysekolah = mysqli_query($konek, "SELECT * FROM sekolah");
											if($querysekolah==false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($sekolah=mysqli_fetch_array($querysekolah)){
												if($sekolah["Kode_Sekolah"]!=$guru["Kode_Sekolah_Guru"]){
													echo "<option value=$sekolah[Kode_Sekolah]>$sekolah[Nama_Sekolah]</option>";
												}
											}
											
										?>
										</select>
									</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary style1" style="width:70px;font-size:13px;font-family:arial;text-align:center">
									Save
								</button>
								<button type="reset" class="btn btn-primary style1" style="width:70px;font-size:13px;font-family:arial;text-align:center"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>