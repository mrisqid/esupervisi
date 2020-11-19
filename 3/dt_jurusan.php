				<tbody>
					<?php
						$querysekolah = mysqli_query ($konek, "SELECT Kode_Sekolah_Guru, Kode_Sekolah, Nama_Sekolah, NIP_Kepsek_Sekolah, NIP_Kepsek, Nama_Kepsek, Foto FROM guru INNER JOIN sekolah ON Kode_Sekolah_Guru=Kode_Sekolah INNER JOIN kepsek ON NIP_Kepsek_Sekolah=NIP_Kepsek WHERE NIP_Guru='$_SESSION[Username]'");
						if($querysekolah == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($sekolah = mysqli_fetch_array ($querysekolah)){
							
							echo "
								<tr>
									<td align='center' style='font-family:arial;font-size:18px;color:#0c1f39;'><h2><Strong>$sekolah[Nama_Sekolah]</Strong></h2></td>
								</tr>
								<tr>
										<td align='center'><img src='../aset/sekolah/$sekolah[Foto]' width='1000' height='600'/></td>
								</tr>";
						}
					?>
				</tbody>
