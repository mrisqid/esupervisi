<?php

include "../koneksi.php";

$Id_Jadwal	= $_GET["Id_Jadwal"];

$daftarhari[] = "Senin";
$daftarhari[] = "Selasa";
$daftarhari[] = "Rabu";
$daftarhari[] = "Kamis";
$daftarhari[] = "Jumat";
$daftarhari[] = "Sabtu";
$daftarhari[] = "Minggu";

$queryjadwal = mysqli_query($konek, "SELECT * FROM jadwal WHERE Id_Jadwal='$Id_Jadwal'");
if($queryjadwal == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($jadwal = mysqli_fetch_array($queryjadwal)){

?>
	<link rel="stylesheet" href="../aset/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Jadwal2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
	<!-- Date Time Picker -->
	<script>
		$(function (){
			$('#Jam_Mulai2').datetimepicker({
				format: 'HH:mm'
			});
			
			$('#Jam_Selesai2').datetimepicker({
				format: 'HH:mm'
			});
		});
	</script>
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Kelas</h4>
					</div>
					<div class="modal-body">
						<form action="jadwal_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="Id_Jadwal" type="hidden" value="<?php echo "$jadwal[Id_Jadwal]"; ?>">
							<div class="form-group">
								<label>Kepala Sekolah</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="NIP_Kepsek_Jadwal" class="form-control" readonly>
										<?php
											
											$queryjdwks = mysqli_query($konek, "SELECT NIP_Kepsek_Jadwal, NIP_Kepsek, Nama_Kepsek FROM jadwal INNER JOIN kepsek ON NIP_Kepsek_Jadwal=NIP_Kepsek WHERE Id_Jadwal='$Id_Jadwal'");
											if ($queryjdwks == false){
												die ("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while ($jdwks = mysqli_fetch_array($queryjdwks)){
												echo "<option value='$jdwks[NIP_Kepsek_Jadwal]' selected>$jdwks[Nama_Kepsek]</option>";
											}
											
											$querykepsek = mysqli_query($konek, "SELECT * FROM kepsek WHERE NIP_Kepsek='$_SESSION[Username]'");
											if($querykepsek == false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($kepsek = mysqli_fetch_array($querykepsek)){
												if($kepsek["NIP_Kepsek"] != $jadwal["NIP_Kepsek_Jadwal"])
												{
													echo "<option value='$kepsek[NIP_Kepsek]'>$kepsek[Nama_Kepsek]</option>";
												}
											}
										?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="NIP_Guru_Jadwal" class="form-control">
											<?php
												
												$queryjdwgr = mysqli_query($konek, "SELECT NIP_Guru_Jadwal, NIP_Guru, Nama_Guru FROM jadwal INNER JOIN guru ON NIP_Guru_Jadwal=NIP_Guru WHERE Id_Jadwal='$Id_Jadwal'");
												if($queryjdwgr == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($jdwgr = mysqli_fetch_array($queryjdwgr)){
													echo "<option value='$jdwgr[NIP_Guru_Jadwal]'>$jdwgr[Nama_Guru]</option>";
												}
												
												$querygr = mysqli_query ($konek, "SELECT * FROM guru INNER JOIN sekolah ON Kode_Sekolah_Guru=Kode_Sekolah WHERE NIP_Kepsek_Sekolah='$_SESSION[Username]'");
												if ($querygr == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($gr = mysqli_fetch_array($querygr)){
													if($gr["NIP_Guru"] != $jadwal["NIP_Guru_Jadwal"]){
														echo "<option value='$gr[NIP_Guru]'>$gr[Nama_Guru]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Kelas/Bidang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-columns"></i>
										</div>
										<select name="Kode_Kelas_Jadwal" class="form-control">
											<?php
											
												$queryjdwkls = mysqli_query($konek, "SELECT Kode_Kelas_Jadwal, Kode_Kelas, Nama_Kelas FROM jadwal INNER JOIN kelas ON Kode_Kelas_Jadwal=Kode_Kelas WHERE Id_Jadwal='$Id_Jadwal'");
												if($queryjdwkls == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($jdwkls = mysqli_fetch_array($queryjdwkls))
												{
													echo "<option value='$jdwkls[Kode_Kelas_Jadwal]' selected>$jdwkls[Nama_Kelas]</option>";
												}
												
												$querykelas = mysqli_query($konek, "SELECT * FROM kelas");
												if($querykelas == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($kelas = mysqli_fetch_array($querykelas)){
													if($kelas["Kode_Kelas"] != $jadwal["Kode_Kelas_Jadwal"]){
														echo "<option value='$kelas[Kode_Kelas]'>$kelas[Nama_Kelas]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Semester</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Semester" type="text" class="form-control" value="<?php echo $jadwal["Semester"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Jadwal2" name="Tanggal" type="text" class="form-control" value="<?php echo $jadwal["Tanggal_Jadwal"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Hari</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<select name="Hari" class="form-control">
										<?php
											echo "<option value='$jadwal[Hari]' selected>$jadwal[Hari]</option>";
											for($hari=0; $hari<count($daftarhari); $hari++){
												if($jadwal["Hari"] != $daftarhari[$hari])
												{
													echo "<option value='$daftarhari[$hari]'>$daftarhari[$hari]</option>";
												}
												
											}
										?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Jam Mulai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input id="Jam_Mulai2" name="Jam_Mulai" type="text" class="form-control" value="<?php echo substr($jadwal["Jam"],0,5); ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jam Selesai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input id="Jam_Selesai2" name="Jam_Selesai" type="text" class="form-control" value="<?php echo substr($jadwal["Jam"],-5); ?>">
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-primary" style="width:70px;font-size:13px;font-family:arial;text-align:center" type="submit">
									Add
								</button>
								<button type="reset" class="btn btn-primary" style="width:70px;font-size:13px;font-family:arial;text-align:center" data-dismiss="modal" aria-hidden="true">
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