<?php

include "../koneksi.php";

$Kode_Sekolah	= $_GET["Kode_Sekolah"];

$querysekolah = mysqli_query($konek, "SELECT Kode_Sekolah, Nama_Sekolah, NIP_Kepsek_Sekolah, NIP_Kepsek, Nama_Kepsek, Foto FROM sekolah INNER JOIN kepsek ON NIP_Kepsek_Sekolah='$NIP_Kepsek'");
if($querysekolah == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($sekolah = mysqli_fetch_array($querysekolah)){

?>
	
<!-- Modal Popup Dosen -->
<div id="ModalProfil" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Profil Sekolah</h4>
					</div>
					<div class="modal-body">
						<center><img src="../aset/foto/sekolah/<?php echo $sekolah['Foto']?>" width="650" height="350" /></center>
						</form>
					</div>
				</div>
			</div>
</div>
			
			
<?php
			}

?>