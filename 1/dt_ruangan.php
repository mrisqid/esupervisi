				<thead>
					<tr>
						<th>Kode Kelas/Bidang</th>
						<th>Kelas/Bidang</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querykelas = mysqli_query ($konek, "SELECT * FROM kelas");
						if($querykelas == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($kelas = mysqli_fetch_array ($querykelas)){
							
							echo "
								<tr>
									<td>$kelas[Kode_Kelas]</td>
									<td>$kelas[Nama_Kelas]</td>
									<td>
										<a href='#' class='open_modal' id='$kelas[Kode_Kelas]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"ruangan_delete.php?Kode_Kelas=$kelas[Kode_Kelas]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>