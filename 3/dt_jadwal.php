				<thead>
					<tr>
						<th>Kepala Sekolah</th>
						<th>Guru</th>
						<th>Kelas/Bidang</th>
                        <th>Tanggal</th>
						<th>Hari</th>
						<th>Jam</th>
					</tr>
				</thead>
				<tbody>
					<?php
							$queryjadwal = mysqli_query ($konek, "SELECT Id_Jadwal, NIP_Kepsek_Jadwal, NIP_Guru_Jadwal, Kode_Kelas_Jadwal, Tanggal_Jadwal, Hari,
							Jam, NIP_Kepsek, Nama_Kepsek, NIP_Guru, Nama_Guru, Kode_Kelas, Nama_Kelas, Kode_Sekolah, Nama_Sekolah FROM jadwal 
							INNER JOIN kepsek ON NIP_Kepsek_Jadwal=NIP_Kepsek
							INNER JOIN guru ON NIP_Guru_Jadwal=NIP_Guru
							INNER JOIN kelas ON Kode_Kelas_Jadwal=Kode_Kelas
							INNER JOIN sekolah ON Kode_Sekolah_Jadwal=Kode_Sekolah WHERE NIP_Guru_Jadwal='$_SESSION[Username]'");
							if($queryjadwal == false){
								die ("Terjadi Kesalahan : ". mysqli_error($konek));
							}
							while ($jadwal = mysqli_fetch_array ($queryjadwal)){
							
								echo "
									<tr>
										<td>$jadwal[Nama_Kepsek]</td>
										<td>$jadwal[Nama_Guru]</td>
										<td>$jadwal[Nama_Kelas]</td>
										<td>$jadwal[Tanggal_Jadwal]</td>
										<td>$jadwal[Hari]</td>
										<td>$jadwal[Jam]</td>
									</tr>";
							}
							
						
					
						
					?>
				</tbody>