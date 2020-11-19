<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
$nip = $_GET['a'];
$idj = $_GET['idj'];

$queryjadwal = mysqli_query ($konek, "SELECT * FROM jadwal WHERE NIP_Guru_Jadwal='$nip' AND Id_Jadwal='$idj'");
            if($queryjadwal == false){
              die ("Terjadi Kesalahan : ". mysqli_error($konek));
            }
    
    $data=mysqli_fetch_array ($queryjadwal);
    $Id_Jadwal=$data['Id_Jadwal'];
	$NIP_Guru_Jadwal=$data['NIP_Guru_Jadwal'];
?>

<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>e-SUPERVISION</title>
    <script> 
function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
soal1 = document.form1.A1.value;
soal2 = document.form1.A2.value; 
soal3 = document.form1.A3.value;
soal4 = document.form1.A4.value;
soal5 = document.form1.A5.value; 
soal6 = document.form1.A6.value;
soal7 = document.form1.A7.value;
soal8 = document.form1.A8.value; 
soal9 = document.form1.A9.value;
soal10 = document.form1.A10.value;
soal11 = document.form1.A11.value; 
soal12 = document.form1.A12.value;
soal13 = document.form1.A13.value;
soal14 = document.form1.A14.value; 
document.form1.hasil.value = ((soal1 * 1) + (soal2 * 1) + (soal3 * 1)+(soal4 * 1) + (soal5 * 1) + (soal6 * 1)+(soal7 * 1) + (soal8 * 1) + (soal9 * 1)+(soal10 * 1) + (soal11 * 1) + (soal12 * 1)+(soal13 * 1) + (soal14 * 1)) / 14 * 100 ;}
function stopCalc(){
clearInterval(interval);}
</script>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../favico.png">
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
    <style type="text/css">
<!--
.style5 {color: #FFFFFF}
.style6 {font-family: Arial, Helvetica, sans-serif}
.style8 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; }
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
            Penilaian Guru          
        </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-book"></i>Penilaian Guru </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box"> 
                <div class="box-header"></div>
                <div class="box-body">
                  <form name="form1" method="post" action="">
                  <?php
                  echo "NIP Guru : $nip"; 
                  
                  ?>
                  <input name="Id_Jadwal_Nilaia" type="hidden" value="<?php echo "$Id_Jadwal"; ?>">
                  <input name="Nip_Guru_Nilaia" type="hidden" value="<?php echo "$NIP_Guru_Jadwal"; ?>">
                    <div>
                      <h3 align="center"><strong>KELENGKAPAN ADMINISTRASI</strong></h3>
                    </div>
                    <div class="box-body">
                      <table width="50%" border="1" align="center" cellpadding="7" cellspacing="1">
                        <tr bgcolor="#0c1f39">
                          <td rowspan="2" bgcolor="#0c1f39"><div align="center" class="style8">
                            <h4>No.</h4>
                          </div></td>
                          <td rowspan="2" bgcolor="#0c1f39">
                          <div align="center" class="style5">
                            <h4 class="style6">Indikator Pengamatan </h4>
                          </div></td>
                          <td colspan="2" bgcolor="#0c1f39"> <div align="center" class="style5">
                            <h4 class="style6">Indikator Penilaian </h4>
                          </div></td>
                        </tr>
                        <tr>
                          <td width="20" bgcolor="#0c1f39"><div align="center" class="style5"><h4 class="style6"> Ada </h4></div></td>
                          <td width="20" bgcolor="#0c1f39"><div align="center" class="style5"><h4 class="style6"> Tidak Ada</h4></div></td>
                        </tr>
                        <tr>
                          <td width="30"><div align="center" class="style6">1</div></td>
                          <td width="100" class="style6">  Program Tahunan </td>
                          <td><div align="center">
                              <input name="A1" id="A1" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A1" id="A1" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">2</div></td>
                          <td><span class="style6">  Program Semester</span></td>
                          <td><div align="center">
                              <input name="A2" id="A2" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A2" id="A2" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">3</div></td>
                          <td class="style6">  Silabus</td>
                          <td><div align="center">
                              <input name="A3" id="A3" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A3"  id="A3" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">4</div></td>
                          <td class="style6">  RPP</td>
                          <td><div align="center">
                              <input name="A4" id="A4" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A4" id="A4" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">5</div></td>
                          <td><span class="style6">  Kalender Pendidikan </span></td>
                          <td><div align="center">
                              <input name="A5" id="A5" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A5" id="A5" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">6</div></td>
                          <td class="style6">  Jadwal Pembelajaran</td>
                          <td><div align="center">
                              <input name="A6" id="A6" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A6" id="A6" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">7</div></td>
                          <td><span class="style6">  Batas Pembelajaran</span></td>
                          <td><div align="center">
                              <input name="A7" id="A7" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A7" id="A7" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">8</div></td>
                          <td><span class="style6">  Daftar Nilai </span></td>
                          <td><div align="center">
                              <input name="A8" id="A8" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A8" id="A8" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">9</div></td>
                          <td><span class="style6">  KKM</span></td>
                          <td><div align="center">
                              <input name="A9" id="A9" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A9" id="A9" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">10</div></td>
                          <td><span class="style6">  Daftar Kelas</span></td>
                          <td><div align="center">
                              <input name="A10" id="A10" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A10" id="A10" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">11</div></td>
                          <td><span class="style6">  Buku Administrasi</span></td>
                          <td><div align="center">
                              <input name="A11" id="A11" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A11" id="A11" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">12</div></td>
                          <td><span class="style6">  Analisis Ulangan Harian </span></td>
                          <td><div align="center">
                              <input name="A12" id="A12" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A12" id="A12" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">13</div></td>
                          <td><span class="style6">  Bank Soal </span></td>
                          <td><div align="center">
                              <input name="A13" id="A13" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A13" id="A13" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr>
                          <td><div align="center" class="style6">14</div></td>
                          <td><span class="style6">  Bahan Ajar</span></td>
                          <td><div align="center">
                              <input name="A14" id="A14" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="1">
                          </div></td>
                          <td><div align="center">
                              <input name="A14" id="A14" onFocus="startCalc();" onBlur="stopCalc();" type="radio" value="0">
                          </div></td>
                        </tr>
                        <tr bgcolor="#0c1f39">
                          <td colspan="2" bgcolor="#FFFFFF"></td>
                          <td colspan="2" bgcolor="#FFFFFF"><div align="center">
                          <span class="style6">Skor Total
                        </span>                          
<p>
                              <input type="text" id="hasil" maxlength="4" readonly="readonly"/>
                            </p>
                            <p>
                              <input class="btn-primary" type="submit" name="simpan" id="simpan" value="Save">
                            </p>
                          </div>	
                          <?php
                          error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                          $A1=$_POST["A1"];
                          $A2=$_POST["A2"];
                          $A3=$_POST["A3"];
                          $A4=$_POST["A4"];
                          $A5=$_POST["A5"];
                          $A6=$_POST["A6"];
                          $A7=$_POST["A7"];
                          $A8=$_POST["A8"];
                          $A9=$_POST["A9"];
                          $A10=$_POST["A10"];
                          $A11=$_POST["A11"];
                          $A12=$_POST["A12"];
                          $A13=$_POST["A13"];
                          $A14=$_POST["A14"];
                          $Skor_A=$_POST["Skor_A"];
                           if (isset($_POST['proses']))
                            {
                              $Skor_A=($A1+$A2+$A3+$A4+$A5+$A6+$A7+$A8+$A9+$A10+$A11+$A12+$A13+$A14)/14*100;
                              echo "<script> alert('Skor Totalnya = $Skor_A') </script>";
                              echo "<script> window.history.go(-1); return false;</script>";
                            }     
                            ?>
                          </td>
                        </tr>
                      </table>
                      

                      <?php
					  
	if (isset($_POST['simpan']))
   {
	      $Skor_A=($A1+$A2+$A3+$A4+$A5+$A6+$A7+$A8+$A9+$A10+$A11+$A12+$A13+$A14)/14*100;
   //kita simpan duluu
	date_default_timezone_set('Asia/Jakarta');
      $tgl=date('Y-m-d');
  if ($add = mysqli_query($konek, "INSERT INTO nilai (Id_Jadwal_Nilai, NIP_Guru_Nilai, tgl_a, Skor_A) VALUES 
	('$Id_Jadwal','$nip', '$tgl','$Skor_A')")){
		mysql_query($add);
		echo "<script> alert('Data Berhasil Disimpan.'); </script>";
		echo "<script> window.location='nilai.php';</script>";
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));
   }
   ?>
					  
                    </div>
                  </form>
    <!-- /.content-wrapper -->
	 	<?php
		include	"content_footer.php";
	?>

    </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
	<!-- Modal -->
	<div align="left"></div>
	<div id="ModalSkor" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Skor Totalnya</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
                          <?php
                            ?>

					<p><?php echo $Skor_A;?></p>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
				</div>
			</div>
		</div>
	</div>
   </div>
  </body>
</html>
