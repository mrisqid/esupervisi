				<thead>
					<tr>
						<th>NIP</th>
						<th>Kepala Sekolah</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Telpon</th>
						<th>Alamat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querykepsek = mysqli_query ($konek, "SELECT NIP_Kepsek, Nama_Kepsek, DATE_FORMAT(Tanggal_Lahir, '%d-%m-%Y')as Tanggal_Lahir, JK, No_Telp, Alamat FROM kepsek");
						if($querykepsek == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($kepsek = mysqli_fetch_array ($querykepsek)){
							
							echo "
								<tr>
									<td>$kepsek[NIP_Kepsek]</td>
									<td>$kepsek[Nama_Kepsek]</td>
									<td>$kepsek[Tanggal_Lahir]</td>
									<td>
								";
									if($kepsek["JK"] == "L"){
										echo "Laki - laki";
									}
									else{
										echo "Perempuan";
									}
							echo "
									</td>
									<td>$kepsek[No_Telp]</td>
									<td>$kepsek[Alamat]</td>
									<td>
										<a href='#' class='open_modal' id='$kepsek[NIP_Kepsek]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"kepsek_delete.php?NIP_Kepsek=$kepsek[NIP_Kepsek]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>