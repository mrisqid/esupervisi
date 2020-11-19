<?php

include "../koneksi.php";
error_reporting(E_ALL * (E_NOTICE | E_WARNING));
$Kode_Sekolah	= $_GET["Kode_Sekolah"];

$querysekolah = mysqli_query($konek, "SELECT * FROM sekolah WHERE Kode_Sekolah='$Kode_Sekolah'");
if($querysekolah == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($sekolah = mysqli_fetch_array($querysekolah)){

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
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>

			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4><span class="style3"><strong>EDIT SEKOLAH</strong></span></h4>
					</div>
					<div class="modal-body">
						<form action="jurusan_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode Sekolah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="Kode_Sekolah" type="text" class="form-control" value="<?php echo $sekolah["Kode_Sekolah"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Sekolah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="Nama_Sekolah" type="text" class="form-control" value="<?php echo $sekolah["Nama_Sekolah"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Kepala Sekolah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="NIP_Kepsek_Sekolah" class="form-control">
											<?php
												
												$querysklks = mysqli_query($konek, "SELECT NIP_Kepsek_Sekolah, NIP_Kepsek, Nama_Kepsek FROM sekolah INNER JOIN kepsek ON NIP_Kepsek_Sekolah = NIP_Kepsek WHERE NIP_Kepsek='$NIP_Kepsek'");
												if($querysklks == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($sklks = mysqli_fetch_array($querysklks)){
													echo "<option value='$sklks[NIP_Kepsek_Sekolah]' selected>$sekolahks[Nama_Kepsek]</option>";
												}
												
												$queryks = mysqli_query($konek, "SELECT * FROM kepsek");
												if($queryks == false){
													die("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($ks = mysqli_fetch_array($queryks)){
													if($ks["NIP_Kepsek"]!=$skl["NIP_Kepsek_Sekolah"]){
														echo "<option value='$ks[NIP_Kepsek]'>$ks[Nama_Kepsek]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
                            <div class="form-group">
								<label>Foto Sekolah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Foto" type="file" class="form-control" id="Foto">
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