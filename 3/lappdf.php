<?php
error_reporting(0);
$nama_dokumen='Laporan Supervisi'; //Beri nama file PDF hasil.
define('../mpdf60/');//lokasi folder mpdf60
require_once("../mpdf60/mpdf.php");
$mpdf=new mPDF('utf-8', 'A4-P'); // PDF mau L lanscape P potrait


ob_start();
?>
<!DOCTYPE html>
<html>
<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
$nip = $_POST['nip'];
$queryjadwal = mysqli_query ($konek, "SELECT *FROM guru WHERE NIP_Guru='$nip'");
            if($queryjadwal == false){
              die ("Terjadi Kesalahan : ". mysqli_error($konek));
            }
    
    $data=mysqli_fetch_array ($queryjadwal);
    $namaguru=$data['Nama_Guru'];
	$kodekelas=$data['Kode_Kelas_Guru'];
	$kodesekolah=$data['Kode_Sekolah_Guru'];
			$queryjadwal = mysqli_query ($konek, "SELECT *FROM kelas WHERE Kode_Kelas='$kodekelas'");
            if($queryjadwal == false){
              die ("Terjadi Kesalahan : ". mysqli_error($konek));
            }
			$data=mysqli_fetch_array ($queryjadwal);
			$namakelas=$data['Nama_Kelas'];
			
			$queryjadwal = mysqli_query ($konek, "SELECT *FROM sekolah WHERE Kode_Sekolah='$kodesekolah'");
            if($queryjadwal == false){
              die ("Terjadi Kesalahan : ". mysqli_error($konek));
            }
			$data=mysqli_fetch_array ($queryjadwal);
			$namasekolah=$data['Nama_Sekolah'];
			
			$queryjadwal = mysqli_query ($konek, "SELECT *FROM user WHERE Username='$nip'");
            if($queryjadwal == false){
              die ("Terjadi Kesalahan : ". mysqli_error($konek));
            }
			$data=mysqli_fetch_array ($queryjadwal);
			$foto=$data['Foto'];
			//-----------------------------------------------------
			$b=$_POST['idj'];
			$queryjadwal = mysqli_query ($konek, "SELECT *FROM nilai WHERE NIP_Guru_Nilai='$nip' AND Id_Jadwal_Nilai='$b'");
            if($queryjadwal == false){
              die ("Terjadi Kesalahan : ". mysqli_error($konek));
            }
    
    		$data=mysqli_fetch_array ($queryjadwal);
    		$tgla=$data['tgl_a'];
			$skora=$data['Skor_A'];
			$skorb=$data['Skor_B'];
			$skorc=$data['Skor_C'];
			$komen=$data['Komentar'];
			$namafile=$data['File'];
			
			$queryjadwal = mysqli_query ($konek, "SELECT *FROM jadwal WHERE NIP_Guru_Jadwal='$nip' AND Id_Jadwal='$b'");
            if($queryjadwal == false){
              die ("Terjadi Kesalahan : ". mysqli_error($konek));
            }
			$data=mysqli_fetch_array ($queryjadwal);			
			$smt=$data['Semester'];
			$nipk=$data['NIP_Kepsek_Jadwal'];
			$queryjadwal = mysqli_query ($konek, "SELECT * FROM kepsek WHERE NIP_Kepsek =$nipk");
			if($queryjadwal == false){
              die ("Terjadi Kesalahan : ". mysqli_error($konek));
            }
			$data=mysqli_fetch_array ($queryjadwal);
			$nmk=$data['Nama_Kepsek'];
?>
 <head>
    <meta charset="utf-8">
    <title>laporan supervisi</title>
	<!-- Library CSS -->
	
    <style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.hold-transition.skin-blue.sidebar-mini .wrapper .content-wrapper .content .row .col-xs-12 .box .box-body form table tr td div strong {
	font-family: Arial, Helvetica, sans-serif;
}
.hold-transition.skin-blue.sidebar-mini .wrapper .content-wrapper .content .row .col-xs-12 .box .box-body form table tr td div strong {
	font-size: 18px;
}
.hold-transition.skin-blue.sidebar-mini .wrapper .content-wrapper .content .row .col-xs-12 .box .box-body form table {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
}
.hold-transition.skin-blue.sidebar-mini .wrapper .content-wrapper .content .row .col-xs-12 .box .box-body form table tr td {
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.cttn {
	font-size: 16px;
}
.hold-transition.skin-blue.sidebar-mini .wrapper .content-wrapper .content .row .col-xs-12 .box .box-body form table tr td .cttn strong {
	font-size: 16px;
}
.hold-transition.skin-blue.sidebar-mini .wrapper .content-wrapper .content .row .col-xs-12 .box .box-body form table tr td strong {
	font-weight: normal;
	font-family: Arial, Helvetica, sans-serif;
}
.hold-transition.skin-blue.sidebar-mini .wrapper .content-wrapper .content .row .col-xs-12 .box .box-body form table tr td {
	font-weight: normal;
}
-->
    </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
    <!-- Left side column. contains the logo and sidebar -->
      

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <form action="lappdf.php" method="post" enctype="multipart/form-data" name="form1">
                  
                    <table width="576" height="351" border="0" align="center">
                      <tr>
                        <td height="29" colspan="5" align="center"><div align="center"><img src="../aset/foto/logo.PNG" width="100" height="100"></div></td>
                      </tr>
                      <tr>
                        <td colspan="5" align="center"><div align="center"><strong>LAPORAN HASIL PENILAIAN</strong></div>
                        <div align="center"><strong>SUPERVISI AKADEMIK GURU</strong></div></td>
                      </tr>
                      <tr>
                        <td height="21" colspan="5">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="25">Nama</td>
                        <td><div align="center"><strong>:</strong></div></td>
                        <td colspan="2"><?php echo $namaguru;?></td>
                        <td>Tanggal, <?php echo $tgla;?></td>
                      </tr>
                      <tr>
                        <td height="23">NIP</td>
                        <td><div align="center"><strong>:</strong></div></td>
                        <td colspan="2"><?php echo $nip;?>
                          <label for="nip"></label>
                        <input name="nip" type="hidden" id="nip" value="<?php echo $nip;?>">
                        <input name="idj" type="hidden" id="idj" value="<?php echo $b;?>"></td>
                        <td rowspan="5"><div align="center"><strong><?php echo " <img src='../aset/foto/".$foto."' width='140px' height='140px'/>"; ?></strong></div></td>
                      </tr>
                      <tr>
                        <td height="23">Guru Kelas</td>
                        <td><div align="center"><strong>:</strong></div></td>
                        <td colspan="2"><?php echo $namakelas;?></td>
                      </tr>
                      <tr>
                        <td height="23">Semester</td>
                        <td><div align="center"><strong>:</strong></div></td>
                        <td colspan="2"><?php echo $smt; ?></td>
                      </tr>
                      <tr>
                        <td height="23">Nama Sekolah</td>
                        <td><div align="center"><strong>:</strong></div></td>
                        <td colspan="2"><?php echo $namasekolah; ?></td>
                      </tr>
                      <tr>
                        <td height="21" colspan="5">&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="121" height="26"><strong>Penilaian</strong></td>
                        <td width="8"><div align="center"></div></td>
                        <td colspan="2">&nbsp;</td>
                        <td width="142">&nbsp;</td>
                      </tr>
                    </table>
                    <table width="576" height="138" border="1" align="center" cellpadding="5" cellspacing="0">
                      <tr>
                        <td width="28" height="32" align="center"><div align="center"><strong>No</strong></div></td>
                        <td width="263" align="center"><div align="center"><strong>Komponen Penilaian </strong></div></td>
                        <td width="120" align="center"><div align="center"><strong>Nilai</strong></div></td>
                        <td width="155" align="center"><div align="center"><strong>Interpretasi</strong></div></td>
                      </tr>
                      <tr>
                        <td height="32"><div align="center"><center>1</center></div></td>
                        <td> Kelengkapan Administrasi</td>
                        <td><div align="center"><center><?php echo $skora; ?></center></div></td>
                        <td><div align="center"><center>
                          <?php if ($skora >= 75){ echo "Sangat Baik";} 
						else if ($skora < 75 && $skora >=51){echo "Baik";}
						else if ($skora < 51 && $skora >=25){echo "Cukup";}
						else {echo "Kurang";} ?></center>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="31"><div align="center"><center>2</center></div></td>
                        <td>Rencana Pelaksana Pembelajaran</td>
                        <td><div align="center"><center><?php echo $skorb; ?></center></div></td>
                        <td><div align="center">
                          <center><?php if ($skorb >= 75){ echo "Sangat Baik";} 
						else if ($skorb < 75 && $skorb >=51){echo "Baik";}
						else if ($skorb < 51 && $skorb >=25){echo "Cukup";}
						else {echo "Kurang";} ?></center>
                        </div></td>
                      </tr>
                      <tr>
                        <td height="31"><div align="center"><center>3</center></div></td>
                        <td>Pelaksanaan Pembelajaran</td>
                        <td><div align="center"><center><?php echo $skorc; ?></center></div></td>
                        <td><div align="center">
                          <center><?php if ($skorc >= 75){ echo "Sangat Baik";} 
						else if ($skorc < 75 && $skorc >=51){echo "Baik";}
						else if ($skorc < 51 && $skorc >=25){echo "Cukup";}
						else {echo "Kurang";} ?></center>
                        </div></td>
                      </tr>
                    </table>
                    <table width="577" height="221" border="0" align="center">
                      <tr>
                        <td width="121" height="20">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="23"><strong>Keterangan</strong></td>
                        <td width="9">&nbsp;</td>
                        <td width="424">&nbsp;</td>
                        <td width="5">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="23"><div align="center">75 - 100 </div></td>
                        <td><div align="center">=</div></td>
                        <td><div align="left"> Sangat Baik</div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="23"><div align="center">51 - 75 </div></td>
                        <td><div align="center">=</div></td>
                        <td><div align="left">Baik</div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="23"><div align="center">26 - 50 </div></td>
                        <td><div align="center">=</div></td>
                        <td><div align="left">Cukup</div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="23"><div align="center">0 - 25</div></td>
                        <td><div align="center">=</div></td>
                        <td><div align="left">Kurang</div></td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="20">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="23"><div align="left" class="cttn"> <strong>Catatan</strong></div></td>
                        <td>&nbsp;</td>
                        <td><div align="center"></div></td>
                        <td><div align="center"></div></td>
                      </tr>
                      <tr>
                        <td height="23" colspan="4">
                          <div align="center">
                          <?php echo $komen;?>
                        </div></td>
                      </tr>
                    </table>
                    <table width="578" height="206" border="0" align="center">
                      <tr>
                        <td width="377">&nbsp;</td>
                        <td width="191"><p>Bukittinggi, <?php echo $tgla;?></p>
                        <p>Supervisor</p></td>
                      </tr>
                      <tr>
                        <td height="68">&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="69">&nbsp;</td>
                        <td><p><Strong><?php echo $nmk;?></Strong></p>
                        <p>Nip.<?php echo $nipk;?></p></td>
                      </tr>
                    </table>
                  <p>&nbsp;</p></form></div>
              </div></div></div></section>
              </div>
              </div>
      </div>
    </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>