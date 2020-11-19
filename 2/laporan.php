<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
$nip = $_POST['a'];
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
			
			$queryjadwal = mysqli_query ($konek, "SELECT *FROM jadwal WHERE NIP_Guru_Jadwal='$nip' AND Id_Jadwal='$b'");
            if($queryjadwal == false){
              die ("Terjadi Kesalahan : ". mysqli_error($konek));
            }
			$data=mysqli_fetch_array ($queryjadwal);			
			$smt=$data['Semester'];
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>E-Supervision</title>
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
    <style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
}
.style4 {font-family: Arial, Helvetica, sans-serif}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
-->
    </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
		
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
				<li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
			        <li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                    <li><a href="deskripsisekolah.php"><i class="fa fa-university"></i><span>Visi & Misi Sekolah</span></a></li>
                    <li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Data Guru</span></a></li>
					<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal Supervisi</span></a></li>
          <li><a href="video.php"><i class="fa fa-film"></i><span>Video Mengajar Guru</span></a></li>
					<li class="active"><a href="nilai.php"><i class="fa fa-book"></i><span>Penilaian Guru</span></a></li>
                    <li><a href="arsipnilai.php"><i class="fa fa-book"></i><span>Arsip Penilaian</span></a></li>
                     <li><a href="tindaklanjut.php"><i class="fa fa-book"></i><span>Tindak Lanjut</span></a></li>
					<li><a href="about.php"><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Laporan</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-book"></i> Laporan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box"> 
                <div class="box-header"></div>
                <div class="box-body">
                  <form action="tes.php" method="post" enctype="multipart/form-data" name="form1">
                  
                    <table width="50%" border="0" align="center">
                      <tr>
                        <td height="29"><div align="center"><img src="../aset/foto/logo.PNG" width="120" height="120"></div></td>
                      </tr>
                      <tr>
                        <td height="29"><div align="center"><span class="style3"><strong>LAPORAN HASIL PENILAIAN<br>
                        </strong><strong>SUPERVISI AKADEMIK GURU</strong></span> </div></td>
                      </tr>
                    </table>
                    <p>&nbsp;</p>
                    <p align="center"></p>
                    <table width="50%" border="0" align="center" cellpadding="5" cellspacing="1">
                      <tbody>
                        <tr valign="top">
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td><span class="style6">Tanggal,<?php echo $tgla;?></span></td>
                        </tr>
                        <tr valign="top">
                          <td width="13%"><div align="left" class="style4">Nama</div></td>
                        <td width="3%"><div align="center">:</div></td>
                          <td width="41%"><span class="style4"><?php echo $namaguru;?></span></td>
                        <td width="19%">&nbsp;</td>
                        <input name="nip" type="hidden" id="nip" value="<?php echo $nip;?>">
                        <input name="idj" type="hidden" id="idj" value="<?php echo $b;?>"></td>
                          <td width="24%" rowspan="5"><div align="center"><?php echo " <img src='../aset/foto/".$foto."' width='100px' height='120px'/>"; ?></div></td>
                        </tr>
                        <tr valign="top">
                          <td><span class="style4">NIP</span></td>
                        <td><div align="center">:</div></td>
                          <td><span class="style4"><?php echo $nip;?></span></td>
                        <td>&nbsp;</td>
                        </tr>
                        <tr valign="top">
                          <td><span class="style4">Kelas</span></td>
                        <td><div align="center">:</div></td>
                          <td><span class="style4"><?php echo $namakelas;?></span></td>
                        <td>&nbsp;</td>
                        </tr>
                        <tr valign="top">
                          <td><span class="style4">Semester</span></td>
                        <td><div align="center">:</div></td>
                          <td><span class="style4"><?php echo $smt; ?></span></td>
                        <td>&nbsp;</td>
                        </tr>
                        <tr valign="top">
                          <td><span class="style4">Sekolah</span></td>
                        <td><div align="center">:</div></td>
                          <td><span class="style4"><?php echo $namasekolah; ?></span></td>
                        <td>&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                    <p align="center">
                        
                  </p>
                    <table width="50%" border="0" align="center" cellpadding="5" cellspacing="1">
                      <tr>
                        <td height="32" valign="bottom"><div align="left" class="style4"><strong>Penilaian</strong></div>                          <div align="center"></div>                          </td>
                      </tr>
                    </table>
                    <p>
                    <table width="50%" border="1" align="center" cellpadding="5" cellspacing="1">
                      <tr>
                        <td width="32" height="32"><div align="center" class="style4"><strong>No.</strong></div></td>
                        <td width="277"><div align="center" class="style4"><strong>Komponen Penilaian </strong></div></td>
                        <td width="120"><div align="center" class="style4"><strong>Nilai</strong></div></td>
                        <td width="173"><div align="center" class="style4"><strong>Interpretasi</strong></div></td>
                      </tr>
                      <tr>
                        <td height="32"><div align="center" class="style4">1.</div></td>
                        <td><span class="style4">Kelengkapan Administrasi</span></td>
                        <td><center class="style4">
                            <?php echo $skora; ?>
                        </center></td>
                        <td><center class="style4">
                            <?php if ($skora >= 76){ echo "Sangat Baik";} 
						else if ($skora < 76 && $skora >=51){echo "Baik";}
						else if ($skora < 51 && $skora >=26){echo "Cukup";}
						else {echo "Kurang";} ?>
                        </center></td>
                      </tr>
                      <tr>
                        <td height="31"><div align="center" class="style4">2.</div></td>
                        <td><span class="style4">Rencana Pelaksana Pembelajaran</span></td>
                        <td><center class="style4">
                            <?php echo $skorb; ?>
                        </center></td>
                        <td><center class="style4">
                            <?php if ($skorb >= 76){ echo "Sangat Baik";} 
						else if ($skorb < 76 && $skorb >=51){echo "Baik";}
						else if ($skorb < 51 && $skorb >=26){echo "Cukup";}
						else {echo "Kurang";} ?>
                        </center></td>
                      </tr>
                      <tr>
                        <td height="31"><div align="center" class="style4">3.</div></td>
                        <td><span class="style4">Pelaksanaan Pembelajaran</span></td>
                        <td><center class="style4">
                            <?php echo $skorc; ?>
                        </center></td>
                        <td><center class="style4">
                            <?php if ($skorc >= 76){ echo "Sangat Baik";} 
						else if ($skorc < 76 && $skorc >=51){echo "Baik";}
						else if ($skorc < 51 && $skorc >=26){echo "Cukup";}
						else {echo "Kurang";} ?>
                        </center></td>
                      </tr>
                    </table>
                    <p>&nbsp;</p>
                    <table width="50%" border="0" align="center" cellpadding="5" cellspacing="1">
                      <tr valign="bottom">
                        <td colspan="3"><div align="left" class="style4"><strong>Keterangan</strong></div></td>
                      </tr>
                      <tr>
                        <td width="58"><div align="left" class="style4">
                          <div align="justify">76-100</div>
                        </div></td>
                        <td width="9">                                                <div align="left">=</div></td>
                        <td width="556">                                                <div align="left" class="style4">Sangat Baik</div></td>
                      </tr>
                      <tr>
                        <td><div align="left" class="style4">
                          <div align="justify">51-75</div>
                        </div></td>
                        <td>                                                <div align="left">=</div></td>
                        <td>                                                <div align="left" class="style4">Baik</div></td>
                      </tr>
                      <tr>
                        <td><div align="left" class="style4">
                          <div align="justify">26-50</div>
                        </div></td>
                        <td><div align="left">=</div></td>
                        <td><div align="left" class="style4">Cukup</div></td>
                      </tr>
                      <tr>
                        <td><div align="left" class="style4">
                          <div align="justify">0-25</div>
                        </div></td>
                        <td>                                                    <div align="left">=</div></td>
                        <td>                                                <div align="left" class="style4">Kurang</div></td>
                      </tr>
                    </table>
                    <table width="50%" border="0" align="center" cellpadding="5" cellspacing="1">
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td width="643" valign="bottom"><span class="style4"><strong>Catatan</strong></span></td>
                      </tr>
                      <tr>
                        <td><p align="left">
                            <textarea name="Komentar" cols="70" rows="5" id="textarea"></textarea>
                        </p></td>
                      </tr>
                      <tr>
                        <td><h5><strong> </strong></h5></td>
                      </tr>
                      <tr>
                        <td><strong>Upload File </strong></td>
                      </tr>
                      <tr>
                        <td>
                          <div align="left">
                            <input name="File" type="file" id="File" size="30">
                          </div></td>
                      </tr>
                      <tr>
                        <td><div align="left">
                            <input name="File2" type="file" id="File2" size="30">
                          </div></td>
                      </tr>
                      <tr>
                        <td><div align="left">
                            <input name="File3" type="file" id="File3" size="30">
                          </div></td>
                      </tr>
                    </table>
                    <div align="center">
                      <table width="50%" height="38" border="0" align="center" cellpadding="5" cellspacing="1">
                        <tr>
                          <td><div align="right"><span class="style1">
                            <input type="submit" class="btn btn-primary" name="proses" id="proses4" value="Send">
                          </span> </div></td>
                        </tr>
                      </table>
                      <br>
                    <span class="style1">                      </span></div>
                  </form>
                  <p>&nbsp;</p>
                </div></div></div></div></section><div class="modal fade" id="modal_delete"><div class="modal-dialog"><div class="modal-content" style="margin-top:100px;"><div class="modal-header">
                  <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		
    </div><!-- /.content-wrapper -->
	<?php
		include	"content_footer.php";
	?>
  </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
