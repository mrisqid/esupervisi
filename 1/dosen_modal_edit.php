<?php

include "../koneksi.php";

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$NIP_Kepsek	= $_GET["NIP_Kepsek"];

$querykepsek = mysqli_query($konek, "SELECT * FROM kepsek WHERE NIP_Kepsek='$NIP_Kepsek'");
if($querykepsek == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($kepsek = mysqli_fetch_array($querykepsek)){

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
}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold; }
.style4 {font-size: 18px}
-->
</style>

			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4><span class="style3">EDIT KEPALA SEKOLAH</span></h4>
					</div>
					<div class="modal-body">
						<form action="dosen_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIP_Kepsek" type="text" class="form-control" value="<?php echo $kepsek["NIP_Kepsek"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Kepala Sekolah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_Kepsek" type="text" class="form-control" value="<?php echo $kepsek["Nama_Kepsek"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir2" name="Tanggal_Lahir" type="text" class="form-control" value="<?php echo $kepsek["Tanggal_Lahir"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
										<select name="JK" class="form-control">
											<option value="<?php echo $kepsek["JK"]; ?>" selected>
											<?php
												if ($kepsek["JK"]=="L"){
													echo "Laki - laki";
												}
												else{
													echo "Perempuan";
												}
											?>
											</option>
											<?php
												if ($kepsek["JK"]=="L"){
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
										<input name="No_Telp" type="text" class="form-control" value="<?php echo $kepsek["No_Telp"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Alamat" type="text" class="form-control" value="<?php echo $kepsek["Alamat"]; ?>"/>
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