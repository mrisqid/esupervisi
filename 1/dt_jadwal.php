				<thead>
					<tr>
						<th>Kepala Sekolah</th>
						<th>Guru</th>
						<th>Kelas/Bidang</th>
                        <th>Sekolah</th>
                        <th>Semester</th>
                        <th>Tanggal</th>
						<th>Hari</th>
						<th>Jam</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryjadwal = mysqli_query ($konek, "SELECT Id_Jadwal, NIP_Kepsek_Jadwal, NIP_Guru_Jadwal, Kode_Kelas_Jadwal, kode_Sekolah_Jadwal, Semester,DATE_FORMAT(Tanggal_Jadwal, '%d-%m-%Y')as Tanggal_Jadwal, Hari, Jam, 
							NIP_Kepsek, Nama_Kepsek, NIP_Guru, Nama_Guru, Kode_Kelas, Nama_Kelas, Kode_sekolah, Nama_Sekolah FROM jadwal
							INNER JOIN kepsek ON NIP_Kepsek_Jadwal=NIP_Kepsek
							INNER JOIN guru ON NIP_Guru_Jadwal=NIP_Guru
							INNER JOIN kelas ON Kode_Kelas_Jadwal=Kode_Kelas
							INNER JOIN sekolah ON Kode_Sekolah_Jadwal=Kode_Sekolah");
						if($queryjadwal == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($jadwal = mysqli_fetch_array ($queryjadwal)){
							
							echo "
								<tr>
									<td>$jadwal[Nama_Kepsek]</td>
									<td>$jadwal[Nama_Guru]</td>
									<td>$jadwal[Nama_Kelas]</td>
									<td>$jadwal[Nama_Sekolah]</td>
									<td>$jadwal[Semester]</td>
									<td>$jadwal[Tanggal_Jadwal]</td>
									<td>$jadwal[Hari]</td>
									<td>$jadwal[Jam]</td>
									<td>
										<a href='#' class='open_modal' id='$jadwal[Id_Jadwal]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"jadwal_delete.php?Id_Jadwal=$jadwal[Id_Jadwal]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>