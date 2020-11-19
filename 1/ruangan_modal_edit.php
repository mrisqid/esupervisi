<?php

include "../koneksi.php";

$Kode_Kelas	= $_GET["Kode_Kelas"];

$querykelas = mysqli_query($konek, "SELECT * FROM kelas WHERE Kode_Kelas='$Kode_Kelas'");
if($querykelas == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($kelas = mysqli_fetch_array($querykelas)){

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
						<h4><span class="style3"><strong>EDIT KELAS</strong></span></h4>
					</div>
					<div class="modal-body">
						<form action="ruangan_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<input name="Kode_Kelas" type="text" class="form-control" value="<?php echo $kelas["Kode_Kelas"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<input name="Nama_Kelas" type="text" class="form-control" value="<?php echo $kelas["Nama_Kelas"]; ?>"/>
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