				<thead>
					<tr>
						<th>No</th>
						<th>Guru</th>
						<th>Unduh Video Mengajar</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=1;
						$queryvideo = mysqli_query ($konek, "SELECT * FROM video 
							INNER JOIN jadwal ON jadwal_id=Id_Jadwal
							INNER JOIN kepsek ON NIP_Kepsek_Jadwal=NIP_Kepsek
							INNER JOIN guru ON NIP_Guru_Jadwal=NIP_Guru
							WHERE NIP_Kepsek_Jadwal='$_SESSION[Username]'");
						if($queryvideo == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($video = mysqli_fetch_array ($queryvideo)){
							$namafile=$video['File'];
            				$namafile2=$video['File2'];
							
							echo "
								<tr>
									<td>$i</td>
									<td>$video[Nama_Guru]</td>
									<td>
										<a href=\"donlot.php?file=$namafile\"> $namafile </a> |
										<a href=\"donlot.php?file=$namafile2\"> $namafile2 </a>
									</td>

								</tr>";
						}
					
						$i++;
					
					?>
				</tbody>