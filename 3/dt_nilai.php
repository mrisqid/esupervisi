				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
                        <th>Kelas/Bidang</th>
						<th>Tanggal</th>
                        <th>Laporan Penilaian</th>
					</tr>
				</thead>
				<tbody>
					<?php
							$no=1;
							$querynilai = mysqli_query ($konek, "SELECT Id_Nilai, Id_Jadwal_Nilai, NIP_Guru_Nilai, tgl_a, Skor_A,tgl_b, Skor_B, tgl_c, Skor_C, Id_Jadwal, Tanggal_Jadwal, NIP_Guru, Nama_Guru, Kode_Kelas, Nama_Kelas FROM nilai
							INNER JOIN jadwal ON Id_Jadwal_Nilai=Id_Jadwal 
							INNER JOIN guru ON NIP_Guru_Jadwal=NIP_Guru
							INNER JOIN kelas ON Kode_Kelas_Jadwal=Kode_Kelas
							WHERE NIP_Guru_Nilai='$_SESSION[Username]'");
							if($querynilai == false){
								die ("Terjadi Kesalahan : ". mysqli_error($konek));
							}
							while ($nilai = mysqli_fetch_array ($querynilai)){
							
								echo "
								<tr>
									<td>$no</td>
									<td>$nilai[Nama_Guru]</td>
									<td>$nilai[Nama_Kelas]</td>
									<td>$nilai[Tanggal_Jadwal]</td>
									<td>
									<form id='form1' name='form1' method='post' action='laporan.php'>

										    <input type='hidden' name='idj' id='idj' value='$nilai[Id_Jadwal]'/>
											<input type='hidden' name='a' id='a' value='$nilai[NIP_Guru]'/>
											
										<input type='submit' class='btn btn-primary' name='submit' id='submit' value='Lihat' />
									</form>	  										
									</td>
								</tr>";
								$no++;
						}
					?>
				</tbody>