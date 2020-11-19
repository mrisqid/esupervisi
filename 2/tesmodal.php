
<?php
			include "../koneksi.php";
			//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
          //	$a=$_GET['a'];
			$a=$_GET['Kode_Sekolah'];

?>
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Profil Sekolah</h4>
					</div>
					<div class="modal-body">

			<?php
            $querysekolah = mysqli_query ($konek, "SELECT * FROM sekolah where Kode_Sekolah='$a'");
            if($querysekolah == false){
              die ("Terjadi Kesalahan : ". mysqli_error($konek));
            }
            $sekolah = mysqli_fetch_array ($querysekolah);
			?>
						<center>
						<?php 
						echo "<p style=\"font-size: 18px;font-family:arial;\"><b>$sekolah[Nama_Sekolah]</b></p>"; 
						echo "<br><br>";
						?>
                        <img src="../aset/sekolah/<?php echo $sekolah['Foto']; ?>" width="500" height="350"/>
                        </center>
						</form>
					</div>
				</div>
			</div>

				</tbody>