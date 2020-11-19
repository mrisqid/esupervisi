				<thead>
					<tr>
						<th width="20">No</th>
						<th width="80">NIP</th>
                        <th width="80">Guru</th>
						<th width="80">Kelas/Bidang</th>
						<th width="120" align="center">Penilaian</th>
                        <th width="120">Keterangan</th>
                        <th width="55">Nilai</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no=1;
						$queryjadwal = mysqli_query ($konek, "SELECT Id_Jadwal, NIP_Kepsek_Jadwal, NIP_Guru_Jadwal, Kode_Kelas_Jadwal, Tanggal_Jadwal, Hari,
							Jam, NIP_Kepsek, Nama_Kepsek, NIP_Guru, Nama_Guru, Kode_Kelas, Nama_Kelas FROM jadwal 
							INNER JOIN kepsek ON NIP_Kepsek_Jadwal=NIP_Kepsek
							INNER JOIN guru ON NIP_Guru_Jadwal=NIP_Guru
							INNER JOIN kelas ON Kode_Kelas_Jadwal=Kode_Kelas
							WHERE NIP_Kepsek_Jadwal='$_SESSION[Username]'");
						if($queryjadwal == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($jadwal = mysqli_fetch_array ($queryjadwal)){
							//========================
							$querynilai = mysqli_query ($konek, "SELECT *FROM nilai WHERE Id_Jadwal_Nilai='$jadwal[Id_Jadwal]' AND NIP_Guru_Nilai='$jadwal[NIP_Guru]'");
            				if($querynilai == false){
              				die ("Terjadi Kesalahan : ". mysqli_error($konek));
            				}
        						$data=mysqli_fetch_array ($querynilai);
								
								if ($data['Skor_A']>0)
								{
									$ket="<font color='green'>Telah Dinilai</font>";
								}
								else
								{
									$ket="<font color='red'>Belum Dinilai</font>";
								}
								if ($data['Skor_B']>0)
								{
									$ket2="<font color='green'>Telah Dinilai</font>";
								}
								else
								{
									$ket2="<font color='red'>Belum Dinilai</font>";
								}
								if ($data['Skor_C']>0)
								{
									$ket3="<font color='green'>Telah Dinilai</font>";
								}
								else
								{
									$ket3="<font color='red'>Belum Dinilai</font>";
								}
								
							echo "
								<tr>
									<td>$no</td>
									<td>$jadwal[NIP_Guru]</td>
									<td>$jadwal[Nama_Guru]</td>
									<td>$jadwal[Nama_Kelas]</td>
									<td>
									<form id='form2' name='form2' method='get' action='nilai1.php'>

										    <input type='hidden' name='idj' id='idj' value='$jadwal[Id_Jadwal]'/>
											<input type='hidden' name='a' id='a' value='$jadwal[NIP_Guru]'/>
											
										<input type='submit' style='width:250px;height:40px;font-size:13px;font-family:arial;text-align:left' class='btn btn-primary' name='submit' id='submit' value='1. Kelengkapan Administrasi' />
									</form>
									<form id='form3' name='form3' method='get' action='nilai3.php'>

										    <input type='hidden' name='idj' id='idj' value='$jadwal[Id_Jadwal]'/>
											<input type='hidden' name='a' id='a' value='$jadwal[NIP_Guru]'/>
											
										<input type='submit' style='width:250px;height:40px;font-size:13px;font-family:arial;text-align:left' class='btn btn-primary' name='submit' id='submit' value='2. Rencana Pelaksanaan Pembelajaran' />
									</form>
									<form id='form4' name='form4' method='get' action='nilai2.php'>

										    <input type='hidden' name='idj' id='idj' value='$jadwal[Id_Jadwal]'/>
											<input type='hidden' name='a' id='a' value='$jadwal[NIP_Guru]'/>
											
										<input type='submit' style='width:250px;height:40px;font-size:13px;font-family:arial;text-align:left' class='btn btn-primary' name='submit' id='submit' value='3. Pelaksanaan Pembelajaran' />
									</form>	
									</td>
									<td><p><p>
										$ket<br></br>
										$ket2<br></br>
										$ket3<br></br>								
									</td>
									<td>
									<form id='form1' name='form1' method='post' action='laporan.php'>

										    <input type='hidden' name='idj' id='idj' value='$jadwal[Id_Jadwal]'/>
											<input type='hidden' name='a' id='a' value='$jadwal[NIP_Guru]'/>
											
										<input type='submit' class='btn btn-primary' name='submit' id='submit' value='Lihat' />
									</form>	  										
									</td>
						
								</tr>";
								$no++;
						}
					?>
				</tbody>