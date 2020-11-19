				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
                        <th>Kelas/Bidang</th>
						<th>Tanggal</th>
                        <th>Hasil Laporan</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
							$no=1;
							$querynilai = mysqli_query ($konek, "SELECT Id_Nilai, Id_Jadwal_Nilai, NIP_Guru_Nilai, tgl_a, Skor_A,tgl_b, Skor_B, tgl_c, Skor_C, Id_Jadwal, Tanggal_Jadwal, NIP_Guru, Nama_Guru, Kode_Kelas, Nama_Kelas FROM nilai
							INNER JOIN jadwal ON Id_Jadwal_Nilai=Id_Jadwal
							INNER JOIN kepsek ON NIP_Kepsek_Jadwal=NIP_Kepsek 
							INNER JOIN guru ON NIP_Guru_Jadwal=NIP_Guru
							INNER JOIN kelas ON Kode_Kelas_Jadwal=Kode_Kelas
							WHERE NIP_Kepsek_Jadwal='$_SESSION[Username]'");
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
									<form id='form1' name='form1' method='post' action='laporan2.php'>

										    <input type='hidden' name='idj' id='idj' value='$nilai[Id_Jadwal]'/>
											<input type='hidden' name='a' id='a' value='$nilai[NIP_Guru]'/>
											
										<input type='submit' class='btn btn-primary' name='submit' id='submit' value='Lihat' />
									</form>	  										
									</td>
									<td>
									<a href='#' onClick='confirm_delete(\"nilai_delete.php?Id_Nilai=$nilai[Id_Nilai]\")'>Delete</a>
									</td>
								</tr>";
								$no++;
						}
					?>
				</tbody>