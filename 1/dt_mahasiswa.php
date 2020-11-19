				<thead>
					<tr>
						<th>NIP</th>
						<th>Guru</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Telpon</th>
						<th>Alamat</th>
						<th>Kelas/Bidang</th>
                        <th>Sekolah</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryguru = mysqli_query ($konek, "SELECT NIP_Guru, Nama_Guru, DATE_FORMAT(Tanggal_Lahir, '%d-%m-%Y')as Tanggal_Lahir, JK, No_Telp, Alamat, Kode_Kelas_Guru, Nama_Kelas, Kode_Sekolah_Guru, Nama_Sekolah FROM guru INNER JOIN kelas ON Kode_Kelas_Guru = Kode_Kelas INNER JOIN sekolah ON Kode_Sekolah_Guru = Kode_Sekolah");
						if($queryguru == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($guru = mysqli_fetch_array ($queryguru)){
							
							echo "
								<tr>
									<td>$guru[NIP_Guru]</td>
									<td>$guru[Nama_Guru]</td>
									<td>$guru[Tanggal_Lahir]</td>
									<td>
								";
									if($guru["JK"] == "L"){
										echo "Laki - laki";
									}
									else{
										echo "Perempuan";
									}
							echo "
									</td>
									<td>$guru[No_Telp]</td>
									<td>$guru[Alamat]</td>
									<td>$guru[Nama_Kelas]</td>
									<td>$guru[Nama_Sekolah]</td>
									<td>
										<a href='#' class='open_modal' id='$guru[NIP_Guru]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"mahasiswa_delete.php?NIP_Guru=$guru[NIP_Guru]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>