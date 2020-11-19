				<thead>
					<tr>
						<th>Kode Sekolah</th>
						<th>Sekolah</th>
                        <th>Kepala Sekolah</th>
                        <th>Foto</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querysekolah = mysqli_query ($konek, "SELECT Kode_Sekolah, Nama_Sekolah, NIP_Kepsek_Sekolah, NIP_Kepsek, Nama_Kepsek, Foto FROM sekolah INNER JOIN kepsek ON NIP_Kepsek_Sekolah=NIP_Kepsek");
						if($querysekolah == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($sekolah = mysqli_fetch_array ($querysekolah)){
							
							echo "
								<tr>
									<td>$sekolah[Kode_Sekolah]</td>
									<td>$sekolah[Nama_Sekolah]</td>
									<td>$sekolah[Nama_Kepsek]</td>
									<td>$sekolah[Foto]</td>
									<td>
										<a href='#' class='open_modal' id='$sekolah[Kode_Sekolah]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"jurusan_delete.php?Kode_Sekolah=$sekolah[Kode_Sekolah]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>