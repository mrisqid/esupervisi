<?php

include "../koneksi.php";

$Id_Nilai	= $_GET["Id_Nilai"];

$daftarnilai[] = "A";
$daftarnilai[] = "B";
$daftarnilai[] = "C";
$daftarnilai[] = "D";

$querynilai = mysqli_query($konek, "SELECT * FROM nilai WHERE Id_Nilai='$Id_Nilai'");
if($querynilai == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($nilai = mysqli_fetch_array($querynilai)){

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
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Nilai</h4>
					</div>
					<div class="modal-body">
						<form action="nilai_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input type="hidden" name="Id_Nilai" value="<?php echo $nilai["Id_Nilai"]; ?>">
							<div class="form-group">
								<label>Guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-users"></i>
										</div>
										<select name="NIP_Guru_Nilai" class="form-control">
										<?php
										
											$querynilaigr = mysqli_query($konek, "SELECT NIP_Guru_Nilai, NIP_Guru, Nama_Guru FROM nilai INNER JOIN guru ON NIP_Guru_Nilai=NIP_Guru WHERE Id_Nilai='$Id_Nilai'");
											if($querynilaigr == false){
												die("Terdapat Kesalahan : ". mysqli_query($konek));
											}
											while($nilaigr = mysqli_fetch_array($querynilaigr)){
												echo "<option value='$nilaigr[NIP_Guru_Nilai]' selected>$nilaigr[Nama_Guru]</option>";
											}
											
											$querygr = mysqli_query($konek, "SELECT * FROM guru");
											if($querygr == false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($gr = mysqli_fetch_array($querygr)){
												if($gr["NIP_guru"] != $nilai["NIP_Guru_Nilai"]){
													echo "<option value='$gr[NIP_Guru]'>$gr[Nama_Guru]</option>";
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
											<i class="fa fa-book"></i>
										</div>
										<select name="Kode_Sekolah_Nilai" class="form-control">
										<?php
										
											$querynilaiskl = mysqli_query($konek, "SELECT Kode_Sekolah_Nilai, Kode_Sekolah, Nama_Sekolah FROM nilai INNER JOIN sekolah ON Kode_Sekolah_nilai=Kode_Sekolah WHERE Id_Nilai='$Id_Nilai'");
											if($querynilaiskl == false){
												die("Terdapat Kesalahan : ". mysqli_query($konek));
											}
											while($nilaiskl = mysqli_fetch_array($querynilaiskl)){
												echo "<option value='$nilaiskl[Kode_Sekolah_Nilai]' selected>$nilaiskl[Nama_Sekolah]</option>";
											}
											
											$queryskl = mysqli_query($konek, "SELECT * FROM sekolah");
											if($queryskl == false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($skl = mysqli_fetch_array($queryskl)){
												if($skl["Kode_Sekolah"] != $nilai["Kode_Sekolah_Nilai"]){
													echo "<option value='$skl[Kode_Sekolah]'>$skl[Nama_Sekolah]</option>";
												}
											}
										?>
										</select>
									</div>
							</div>
                            <div class="form-group">
								<label>Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<select name="Kode_Kelas_Nilai" class="form-control">
										<?php
										
											$querynilaikls = mysqli_query($konek, "SELECT Kode_Kelas_Nilai, Kode_Kelas, Nama_Kelas FROM nilai INNER JOIN sekolah ON Kode_Kelas_nilai=Kode_Kelas WHERE Id_Nilai='$Id_Nilai'");
											if($querynilaikls == false){
												die("Terdapat Kesalahan : ". mysqli_query($konek));
											}
											while($nilaikls = mysqli_fetch_array($querynilaikls)){
												echo "<option value='$nilaikls[Kode_Kelas_Nilai]' selected>$nilaikls[Nama_Kelas]</option>";
											}
											
											$querykls = mysqli_query($konek, "SELECT * FROM kelas");
											if($querykls == false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($kls = mysqli_fetch_array($querykls)){
												if($kls["Kode_Kelas"] != $nilai["Kode_Kelas_Nilai"]){
													echo "<option value='$kls[Kode_Kelas]'>$kls[Nama_Kelas]</option>";
												}
											}
										?>
										</select>
									</div>
							</div>

							<div class="form-group">
								<label>Nilai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<select name="Nilai" class="form-control">
										<?php
										
										echo "<option value='$nilai[Nilai]' selected>$nilai[Nilai]</option>";
											for($nilai=0; $nilai<count($daftarnilai); $nilai++){
												if($nilai["Nilai"] != $daftarnilai[$nilai])
												{
													echo "<option value='$daftarnilai[$nilai]'>$daftarnilai[$nilai]</option>";
												}
												
											}
										?>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
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