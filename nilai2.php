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
document.form1.hasil.value = ((soal1 * 1) + (soal2 * 1) + (soal3 * 1)+(soal4 * 1) + (soal5 * 1) + (soal6 * 1)) / 24 * 100 ;}
function stopCalc(){
clearInterval(interval);}
</script>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>e-SUPERVISION</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../favico.png">
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
    <style type="text/css">
<!--
.style5 {
	color: #FFFFFF;
	font-weight: bold;
}
.style6 {color: #FFFFFF}
.style7 {
	color: #f05526;
	font-weight: bold;
}
.style9 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style10 {font-family: Arial, Helvetica, sans-serif}
.style11 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; }
.style12 {font-size: 16px; font-family: Arial, Helvetica, sans-serif; }
.style25 {font-family: Arial, Helvetica, sans-serif; color: #000000; }
.style26 {font-size: 14px}
.style27 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
.style28 {font-size: 12px}
.style29 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
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
                    <li><a href="deskripsisekolah.php"><i class="fa fa-university"></i><span>Profil Sekolah</span></a></li>
                    <li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Data Guru</span></a></li>
					<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal Supervisi</span></a></li>
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
            Penilian Nilai
Guru          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-book"></i> Cetak Nilai </li>
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
                    <h3 align="center"><strong>PELAKSANAAN PEMBELAJARAN</strong></h3>
                    <table width="70%" border="1" align="center">
                      <tr bgcolor="#0c1f39">
                        <td colspan="6"><span class="style9">KEGIATAN PENDAHULUAN </span></td>
                      </tr>
                      <tr bgcolor="#f05526">
                        <td colspan="6"><span class="style9">A. Apresiasi dan Motivasi </span></td>
                      </tr>
                      <tr bgcolor="#0c1f39">
                        <td width="22"><div align="center">
                          <h4><span class="style11">NO.</span></h4>
                        </div></td>
                        <td width="751">
                          <div align="center" class="style6">
                            <h4 class="style10">Indikator Pengamatan </h4>
                          </div></td>
                        <td colspan="4"><div align="center" class="style6">
                          <h4 class="style10">Indikator Penilaian</h4>
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="2">&nbsp;</td>
                        <td width="40"><div align="center" class="style10 style26"> 1 </div></td>
                        <td width="37"><div align="center" class="style27"> 2 </div></td>
                        <td width="34"><div align="center" class="style27"> 3</div></td>
                        <td width="32"><div align="center" class="style27"> 4</div></td>
                      </tr>
                      <tr>
                        <td><div align="center" class="style27">1</div></td>
                        <td valign="middle"><span class="style12">Mencek kehadiran siswa dan berdoa </span></td>
                        <td><div align="center">
                          <input name="A1" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="1">
</div></td>
                        <td><div align="center">
                          <input name="A1" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="2">
</div></td>
                        <td><div align="center">
                          <input name="A1" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="3">
</div></td>
                        <td><div align="center">
                          <input name="A1" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td><div align="center" class="style27">2</div></td>
                        <td valign="middle"><span class="style12">Menyiapkan fisik dan psikis peserta dalam mengawali kegiatan pembelajaran.</span></td>
                                                <td><div align="center">
                          <input name="A2" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="1">
</div></td>
                        <td><div align="center">
                          <input name="A2" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="2">
</div></td>
                        <td><div align="center">
                          <input name="A2" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="3">
</div></td>
                        <td><div align="center">
                          <input name="A2" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td><div align="center" class="style27">3</div></td>
                        <td valign="middle"><span class="style12">Mengaitkan materi pembelajaran sekarang dengan pengalaman peserta didik dalam Perjalanan menuju sekolah atau dengan tema sebelumnya. </span></td>
                                                  <td><div align="center">
                          <input name="A3" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="1">
</div></td>
                        <td><div align="center">
                          <input name="A3" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="2">
</div></td>
                        <td><div align="center">
                          <input name="A3" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="3">
</div></td>
                        <td><div align="center">
                          <input name="A3" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td><div align="center" class="style27">4</div></td>
                        <td valign="middle"><span class="style12">Mengajukan pertanyaan menantang </span></td>
                                                  <td><div align="center">
                          <input name="A4" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="1">
</div></td>
                        <td><div align="center">
                          <input name="A4" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="2">
</div></td>
                        <td><div align="center">
                          <input name="A4" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="3">
</div></td>
                        <td><div align="center">
                          <input name="A4" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td><div align="center" class="style27">5</div></td>
                        <td valign="middle"><span class="style12">Menyampaikan manfaat materi pembelajaran </span></td>
                                                  <td><div align="center">
                          <input name="A5" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="1">
</div></td>
                        <td><div align="center">
                          <input name="A5" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="2">
</div></td>
                        <td><div align="center">
                          <input name="A5" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="3">
</div></td>
                        <td><div align="center">
                          <input name="A5" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td><div align="center" class="style27">6</div></td>
                        <td valign="middle"><span class="style12">Mengajak peserta didik berdinamika/ melakukan sesuatu kegiatan / mendemonstrasikan kegiatan yang terkait dengan materi </span></td>
                                                  <td><div align="center">
                          <input name="A6" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="1">
</div></td>
                        <td><div align="center">
                          <input name="A6" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="2">
</div></td>
                        <td><div align="center">
                          <input name="A6" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="3">
</div></td>
                        <td><div align="center">
                          <input name="A6" onFocus="startCalc();startCalc10();" onBlur="stopCalc();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td colspan="2"><div align="right"></div></td>
                        <td colspan="4"><div align="center">
                          <p class="style10">Skor </p>
                          <p>
                            <input type="text" id="hasil" maxlength="4" readonly="readonly"/>
                          </p>
                        </div>                          <div align="center"></div></td>
                        <script> 
function startCalc1(){
interval = setInterval("calc1()",1);}
function calc1(){
soal7 = document.form1.A7.value;
soal8 = document.form1.A8.value; 
document.form1.hasil1.value = ((soal7 * 1) + (soal8 * 1)) / 8 * 100 ;}
function stopCalc1(){
clearInterval(interval);}
</script>
                      </tr>
                      <tr bgcolor="#f05526">
                        <td colspan="6"><div align="center"></div>
                            <div align="left" class="style10 style6"><strong>B. Penyampaian Materi Kompetensi dan Rencana Kegiatan </strong></div>
                            <div align="center"></div>
                            <div align="center"></div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style10 style28">7</div></td>
                        <td valign="middle"><span class="style12">Menyampaikan kemampuan yang akan dicapai peserta didik </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A7" onFocus="startCalc1();startCalc10();" onBlur="stopCalc1();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A7" onFocus="startCalc1();startCalc10();" onBlur="stopCalc1();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A7" onFocus="startCalc1();startCalc10();" onBlur="stopCalc1();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A7" onFocus="startCalc1();startCalc10();" onBlur="stopCalc1();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style29">8</div></td>
                        <td valign="middle"><span class="style12">Menyampaikan rencana kegiatan misalnya, induvidual, kerja kelompok, dan melakukan observasi </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A8" onFocus="startCalc1();startCalc10();" onBlur="stopCalc1();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A8" onFocus="startCalc1();startCalc10();" onBlur="stopCalc1();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A8" onFocus="startCalc1();startCalc10();" onBlur="stopCalc1();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A8" onFocus="startCalc1();startCalc10();" onBlur="stopCalc1();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="4"><div align="center">
                          <p class="style10">Skor </p>
                          <p>
                            <input type="text" id="hasil1" maxlength="4" readonly="readonly"/>
                          </p>
                        </div>                          
                        <div align="center"></div></td>
                        <script> 
function startCalc2(){
interval = setInterval("calc2()",1);}
function calc2(){
soal9 = document.form1.A9.value;
soal10 = document.form1.A10.value; 
soal11 = document.form1.A11.value;
soal12 = document.form1.A12.value;
document.form1.hasil2.value = ((soal9 * 1) + (soal10 * 1) + (soal11 * 1)+(soal12 * 1)) / 16 * 100 ;}
function stopCalc2(){
clearInterval(interval);}
</script>
                      </tr>
                      <tr bgcolor="#0c1f39">
                        <td colspan="6"><div align="center"></div>
                            <div align="left" class="style9">KEGIATAN INTI </div>
                            <div align="center"></div>
                            <div align="center"></div></td>
                      </tr>
                      <tr bgcolor="#f05526">
                        <td colspan="6"><div align="center"></div>
                            <div align="left" class="style11"><strong>A. Penguasaan Materi Pembelajaran </strong></div>
                            <div align="center"></div>
                            <div align="center"></div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style10 style26">9</div></td>
                        <td valign="middle"><span class="style10">Kemampuan menyesuaikan diri dengan tujuan pembelajaran</span></td>
                        <td valign="middle"><div align="center">
                          <input name="A9" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A9" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A9" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A9" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">10</div></td>
                        <td valign="middle"><span class="style12">Kemampuan mengaitkan materi dengan pengetahuan lain yang relevan, perkembangan iptek, dan kehidupan nyata </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A10" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A10" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A10" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A10" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">11</div></td>
                        <td valign="middle"><span class="style12">Menyajikan pembehasan materi pembelajaran dengan tepat </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A11" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A11" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A11" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A11" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">12</div></td>
                        <td valign="middle"><span class="style12">Mengajikan materi secara sistematis (mudah ke sulit, dari konkrit ke abstrak)</span></td>
                        <td valign="middle"><div align="center">
                          <input name="A12" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A12" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A12" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A12" onFocus="startCalc2();startCalc10();" onBlur="stopCalc2();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td colspan="2">&nbsp;</td>
                        <td colspan="4"><div align="center">
                          <p class="style10">Skor</p>
                          <p><input type="text" id="hasil2" maxlength="4" readonly="readonly"/></p>
                        </div>                        <div align="center"></div></td>
                        <script> 
function startCalc3(){
interval = setInterval("calc3()",1);}
function calc3(){
soal13 = document.form1.A13.value;
soal14 = document.form1.A14.value; 
soal15 = document.form1.A15.value;
soal16 = document.form1.A16.value;
soal17 = document.form1.A17.value; 
soal18 = document.form1.A18.value;
soal19 = document.form1.A19.value; 
document.form1.hasil3.value = ((soal13 * 1) + (soal14 * 1) + (soal15 * 1)+(soal16 * 1) + (soal17 * 1) + (soal18 * 1) + (soal19 * 1)) / 28 * 100 ;}
function stopCalc3(){
clearInterval(interval);}
</script>
                      </tr>
                      <tr bgcolor="#f05526">
                        <td colspan="6"><div align="center"></div>
                            <div align="left" class="style11"><strong>B. Penerapan Strategi Pembelajaran yang Mendidik </strong></div>
                            <div align="center"></div>
                            <div align="center"></div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style10 style26">13</div></td>
                        <td valign="middle"><span class="style10">Melaksanakan pembelajran sesuai dengan kompetensi yang akan dicapai </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A13" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A13" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A13" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A13" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">14</div></td>
                        <td valign="middle"><span class="style10">Memfasilitasi kegiatan yang memuat komponen eksplorasi, elaborasi dan konfirmasi </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A14" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A14" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A14" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A14" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">15</div></td>
                        <td valign="middle"><span class="style10">Melaksanakan pembelajaran secara runtut </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A15" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A15" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A15" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A15" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">16</div></td>
                        <td valign="middle"><span class="style10">Menguasai kelas </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A16" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A16" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A16" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A16" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">17</div></td>
                        <td valign="middle"><span class="style10">Melaksanakan pembelajaran yang bersifat konstektual </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A17" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A17" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A17" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A17" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">18</div></td>
                        <td valign="middle"><span class="style10">Melaksanakan pembelajaran yang memungkinkan tumbuhnya kebiasaan positif (nurturant effect) </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A18" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A18" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A18" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A18" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">19</div></td>
                        <td valign="middle"><span class="style10">Melaksanakan pembelajaran sesuai dengan alokasi waktu yang direncanakan </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A19" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A19" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A19" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A19" onFocus="startCalc3();startCalc10();" onBlur="stopCalc3();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="4"><div align="center">
                          <p class="style10">Skor</p>
                          <p><input type="text" id="hasil3" maxlength="4" readonly="readonly"/></p>
                        </div>                          
                        <div align="center"></div></td>
                        <script> 
function startCalc4(){
interval = setInterval("calc4()",1);}
function calc4(){
soal20 = document.form1.A20.value;
soal21 = document.form1.A21.value; 
soal22 = document.form1.A22.value;
soal23 = document.form1.A23.value;
soal24 = document.form1.A24.value; 
soal25 = document.form1.A25.value;
soal26 = document.form1.A26.value; 
document.form1.hasil4.value = ((soal20 * 1) + (soal21 * 1) + (soal22 * 1)+(soal23 * 1) + (soal24 * 1) + (soal25 * 1) + (soal26 * 1)) / 28 * 100 ;}
function stopCalc4(){
clearInterval(interval);}
</script>
                      </tr>
                      <tr bgcolor="#f05526">
                        <td colspan="6"><div align="center"></div>
                            <div align="left" class="style11"><strong>C. Penerapan Pendekatan Scientific </strong></div>
                            <div align="center"></div>
                            <div align="center"></div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style10 style26">20</div></td>
                        <td valign="middle"><span class="style10">Memberikan pertanyaan mengapa dan bagaimana </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A20" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A20" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A20" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A20" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">21</div></td>
                        <td valign="middle"><span class="style10">Memfasilitasi peserta didik untuk mengamati </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A21" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A21" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A21" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A21" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">22</div></td>
                        <td valign="middle"><span class="style10">Memfasilitasi peserta didik untuk bertanya </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A22" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A22" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A22" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A22" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">23</div></td>
                        <td valign="middle"><span class="style10">Memfasilitasi peserta didik untuk mencoba </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A23" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A23" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A23" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A23" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">24</div></td>
                        <td valign="middle"><span class="style10">Memfasilitasi peserta didik untuk menganalisis</span></td>
                        <td valign="middle"><div align="center">
                          <input name="A24" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A24" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A24" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A24" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">25</div></td>
                        <td valign="middle"><span class="style10">Memberikan pertanyaan peserta didik untuk menalar (proses berfikir yang logis dan sistematis) </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A25" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A25" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A25" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A25" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">26</div></td>
                        <td valign="middle"><span class="style10">Menyajikan kegiatan peserta didik untuk berkomunikasi </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A26" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A26" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A26" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A26" onFocus="startCalc4();startCalc10();" onBlur="stopCalc4();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="4"><div align="center">
                          <p class="style10">Skor</p>
                          <p><input type="text" id="hasil4" maxlength="4" readonly="readonly"/></p>
                        </div>                          
                        <div align="center"></div></td>
                        <script> 
function startCalc5(){
interval = setInterval("calc5()",1);}
function calc5(){
soal27 = document.form1.A27.value;
soal28 = document.form1.A28.value; 
soal29 = document.form1.A29.value;
soal30 = document.form1.A30.value;
soal31 = document.form1.A31.value; 
document.form1.hasil5.value = ((soal27 * 1) + (soal28 * 1) + (soal29 * 1)+(soal30 * 1) + (soal31 * 1)) / 20 * 100 ;}
function stopCalc5(){
clearInterval(interval);}
</script>
                      </tr>
                      <tr bgcolor="#f05526">
                        <td colspan="6"><div align="center"></div>
                            <div align="left" class="style11"><strong>D. Pemanfaatan Sumber Belajar/Media dalam Pembelajaran </strong></div>
                            <div align="center"></div>
                            <div align="center"></div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style10 style26">27</div></td>
                        <td valign="middle"><span class="style10">Menunjukan keterampilan dalam penggunaan sumber belajar pembelajaran </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A27" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A27" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A27" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A27" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">28</div></td>
                        <td valign="middle"><span class="style10">Menunjukan keterampilan dalam penggunaan media pembelajaran</span></td>
                        <td valign="middle"><div align="center">
                          <input name="A28" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A28" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A28" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A28" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">29</div></td>
                        <td valign="middle"><span class="style10">Menganalisis pesan yang menarik </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A29" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A29" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A29" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A29" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">30</div></td>
                        <td valign="middle"><span class="style10">Melibatkan peserta didik dalam pemanfaatan sumber belajar pembelajaran</span></td>
                        <td valign="middle"><div align="center">
                          <input name="A30" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A30" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A30" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A30" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">31</div></td>
                        <td valign="middle"><span class="style10">Melibatkan peserta didik dalam pemanfaatan media pembelajaran </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A31" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A31" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A31" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A31" onFocus="startCalc5();startCalc10();" onBlur="stopCalc5();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="4"><div align="center">
                          <p class="style10">Skor</p>
                          <p><input type="text" id="hasil5" maxlength="4" readonly="readonly"/></p>
                        </div>                          
                        <div align="center"></div></td>
                        <script> 
function startCalc6(){
interval = setInterval("calc6()",1);}
function calc6(){
soal32 = document.form1.A32.value;
soal33 = document.form1.A33.value; 
soal34 = document.form1.A34.value;
soal35 = document.form1.A35.value;
soal36 = document.form1.A36.value; 
document.form1.hasil6.value = ((soal32 * 1) + (soal33 * 1) + (soal34 * 1)+(soal35 * 1) + (soal36 * 1)) / 20 * 100 ;}
function stopCalc6(){
clearInterval(interval);}
</script>
                      </tr>
                      <tr bgcolor="#f05526">
                        <td colspan="6"><span class="style11"><strong>E. Pelibatan Peserta Didik dalam Pembelajaran</strong></span></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style10 style26">32</div></td>
                        <td valign="middle"><span class="style10">Menumbuhkan partisipasi aktif peserta didik melalui interaksi guru, peserta didik, sumber belajar</span></td>
                        <td valign="middle"><div align="center">
                          <input name="A32" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A32" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A32" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A32" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">33</div></td>
                        <td valign="middle"><span class="style10">Merespon positif partisipasi peserta didik </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A33" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A33" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A33" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A33" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">34</div></td>
                        <td valign="middle"><span class="style10">Menunjukan sikap terbuka terhadap respon peserta didik </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A34" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A34" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A34" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A34" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">35</div></td>
                        <td valign="middle"><span class="style10">Menunjukan hubungan antar pribadi yang kondusif</span></td>
                        <td valign="middle"><div align="center">
                          <input name="A35" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A35" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A35" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A35" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">36</div></td>
                        <td valign="middle"><span class="style10">Menumbuhkan keceriaan atau antuisme peserta didik dalam belajar </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A36" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A36" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A36" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A36" onFocus="startCalc6();startCalc10();" onBlur="stopCalc6();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="4"><div align="center">
                          <p class="style10">Skor</p>
                          <p><input type="text" id="hasil6" maxlength="4" readonly="readonly"/></p>
                        </div>                          
                        <div align="center"></div></td>
                        <script> 
function startCalc7(){
interval = setInterval("calc7()",1);}
function calc7(){
soal37 = document.form1.A37.value;
soal38 = document.form1.A38.value; 
soal39 = document.form1.A39.value;
document.form1.hasil7.value = ((soal37 * 1) + (soal38 * 1) + (soal39 * 1)) / 12 * 100 ;}
function stopCalc7(){
clearInterval(interval);}
</script>
                      </tr>
                      <tr bgcolor="#f05526">
                        <td colspan="6"><span class="style11"><strong>F. Melaksanakan Penilaian Autentik </strong></span></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style10 style26">37</div></td>
                        <td valign="middle"><span class="style10">Menilai sikap dalam pembealajaran </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A37" onFocus="startCalc7();startCalc10();" onBlur="stopCalc7();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A37" onFocus="startCalc7();startCalc10();" onBlur="stopCalc7();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A37" onFocus="startCalc7();startCalc10();" onBlur="stopCalc7();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A37" onFocus="startCalc7();startCalc10();" onBlur="stopCalc7();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">38</div></td>
                        <td valign="middle"><span class="style10">Menilai pengetahuan dalam proses pembelajaran </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A38" onFocus="startCalc7();startCalc10();" onBlur="stopCalc7();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A38" onFocus="startCalc7();startCalc10();" onBlur="stopCalc7();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A38" onFocus="startCalc7();startCalc10();" onBlur="stopCalc7();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A38" onFocus="startCalc7();startCalc10();" onBlur="stopCalc7();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">39</div></td>
                        <td valign="middle"><span class="style10">Menilai pengetahuan dalam proses pembelajaran</span></td>
                        <td valign="middle"><div align="center">
                          <input name="A39" onFocus="startCalc7();startCalc10();" onBlur="stopCalc7();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A39" onFocus="startCalc7();startCalc10();" onBlur="stopCalc7();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A39" onFocus="startCalc7();startCalc10();" onBlur="stopCalc7();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A39" onFocus="startCalc7();startCalc10();" onBlur="stopCalc7();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="4"><div align="center">
                          <p class="style10">Skor</p>
                          <p><input type="text" id="hasil7" maxlength="4" readonly="readonly"/></p>
                        </div>                          
                        <div align="center"></div></td>
                        <script> 
function startCalc8(){
interval = setInterval("calc8()",1);}
function calc8(){
soal40 = document.form1.A40.value;
soal41 = document.form1.A41.value; 
document.form1.hasil8.value = ((soal40 * 1) + (soal41 * 1)) / 8 * 100 ;}
function stopCalc8(){
clearInterval(interval);}
</script>
                      </tr>
                      <tr bgcolor="#f05526">
                        <td colspan="6"><span class="style11"><strong>G. Penggunaan Bahasa yang Benar dan Tepat dalam Pembelajaran</strong></span></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style10 style26">40</div></td>
                        <td valign="middle"><span class="style10">Menggunakan bahsa lisan secara jelas dan lancar </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A40" onFocus="startCalc8();startCalc10();" onBlur="stopCalc8();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A40" onFocus="startCalc8();startCalc10();" onBlur="stopCalc8();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A40" onFocus="startCalc8();startCalc10();" onBlur="stopCalc8();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A40" onFocus="startCalc8();startCalc10();" onBlur="stopCalc8();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">41</div></td>
                        <td valign="middle"><span class="style10">Menggunakan bahsa tulis yang baik dan benar</span></td>
                        <td valign="middle"><div align="center">
                          <input name="A41" onFocus="startCalc8();startCalc10();" onBlur="stopCalc8();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A41" onFocus="startCalc8();startCalc10();" onBlur="stopCalc8();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A41" onFocus="startCalc8();startCalc10();" onBlur="stopCalc8();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A41" onFocus="startCalc8();startCalc10();" onBlur="stopCalc8();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr>
                        <td valign="top">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td colspan="4"><div align="center">
                          <p class="style10">Skor</p>
                          <p><input type="text" id="hasil8" maxlength="4" readonly="readonly"/></p>
                        </div>                          
                        <div align="center"></div></td>
                        <script> 
function startCalc9(){
interval = setInterval("calc9()",1);}
function calc9(){
soal42 = document.form1.A42.value;
soal43 = document.form1.A43.value;
soal44 = document.form1.A44.value; 
document.form1.hasil9.value = ((soal42 * 1) + (soal43 * 1) + (soal44 * 1)) / 12 * 100 ;}
function stopCalc9(){
clearInterval(interval);}
</script>
                      </tr>
                      <tr bgcolor="#0c1f39">
                        <td colspan="6"><span class="style5">PENUTUP</span></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style10 style26">42</div></td>
                        <td valign="middle"><span class="style10">Melakukan refleksi atau membuat rangkuman dengan melibatkan peserta didik </span></td>
                        <td valign="middle"><div align="center">
                          <input name="A42" onFocus="startCalc9();startCalc10();" onBlur="stopCalc9();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A42" onFocus="startCalc9();startCalc10();" onBlur="stopCalc9();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A42" onFocus="startCalc9();startCalc10();" onBlur="stopCalc9();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A42" onFocus="startCalc9();startCalc10();" onBlur="stopCalc9();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">43</div></td>
                        <td valign="middle"><span class="style10">Mengumpulkan hasil kerja sebagai bahan portofolio</span></td>
                        <td valign="middle"><div align="center">
                          <input name="A43" onFocus="startCalc9();startCalc10();" onBlur="stopCalc9();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A43" onFocus="startCalc9();startCalc10();" onBlur="stopCalc9();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A43" onFocus="startCalc9();startCalc10();" onBlur="stopCalc9();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A43" onFocus="startCalc9();startCalc10();" onBlur="stopCalc9();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr valign="middle">
                        <td><div align="center" class="style27">44</div></td>
                        <td valign="middle"><span class="style10">Melaksankan tindak lanjut dengan memberikan arahan kegiatan berikutnya dan tugas pengayaan</span></td>
                        <td valign="middle"><div align="center">
                          <input name="A44" onFocus="startCalc9();startCalc10();" onBlur="stopCalc9();stopCalc10();" type="radio" value="1">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A44" onFocus="startCalc9();startCalc10();" onBlur="stopCalc9();stopCalc10();" type="radio" value="2">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A44" onFocus="startCalc9();startCalc10();" onBlur="stopCalc9();stopCalc10();" type="radio" value="3">
</div></td>
                        <td valign="middle"><div align="center">
                          <input name="A44" onFocus="startCalc9();startCalc10();" onBlur="stopCalc9();stopCalc10();" type="radio" value="4">
</div></td>
                      </tr>
                      <tr bgcolor="#0c1f39">
                        <td colspan="2" bgcolor="#FFFFFF">&nbsp;</td>
                        <td colspan="4" valign="bottom" bgcolor="#FFFFFF"><div align="center" class="style25">
                          <p>Skor</p>
                          <p>
                            <input name="text" type="text" id="hasil9" maxlength="4" readonly="readonly"/>
                          </p>
                          <p>Rata-rata</p>
                        </div>                        <div align="center" class="style7"><input type="text" id="total" maxlength="4" readonly="readonly"/>
                        </div>                        <div align="center">
                          <input name="simpan" class="btn btn-default" type="submit" id="simpan" value="Save">
                        </div></td>
                        <script> 
function startCalc10(){
interval = setInterval("calc10()",1);}
function calc10(){
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
soal15 = document.form1.A15.value;
soal16 = document.form1.A16.value; 
soal17 = document.form1.A17.value;
soal18 = document.form1.A18.value;
soal19 = document.form1.A19.value; 
soal20 = document.form1.A20.value;
soal21 = document.form1.A21.value;
soal22 = document.form1.A22.value;
soal23 = document.form1.A23.value;
soal24 = document.form1.A24.value; 
soal25 = document.form1.A25.value;
soal26 = document.form1.A26.value; 
soal27 = document.form1.A27.value;
soal28 = document.form1.A28.value; 
soal29 = document.form1.A29.value;
soal30 = document.form1.A30.value;
soal31 = document.form1.A31.value; 
soal32 = document.form1.A32.value;
soal33 = document.form1.A33.value; 
soal34 = document.form1.A34.value;
soal35 = document.form1.A35.value;
soal36 = document.form1.A36.value; 
soal37 = document.form1.A37.value;
soal38 = document.form1.A38.value; 
soal39 = document.form1.A39.value;
soal40 = document.form1.A40.value;
soal41 = document.form1.A41.value; 
soal42 = document.form1.A42.value;
soal43 = document.form1.A43.value;
soal44 = document.form1.A44.value; 
document.form1.total.value = ((((soal1 * 1) + (soal2 * 1) + (soal3 * 1)+(soal4 * 1) + (soal5 * 1) + (soal6 * 1)) / 24 * 100)+(((soal7 * 1) + (soal8 * 1)) / 8 * 100)+(((soal9 * 1) + (soal10 * 1) + (soal11 * 1)+(soal12 * 1)) / 16 * 100)+(((soal13 * 1) + (soal14 * 1) + (soal15 * 1)+(soal16 * 1) + (soal17 * 1) + (soal18 * 1) + (soal19 * 1)) / 28 * 100)+(((soal20 * 1) + (soal21 * 1) + (soal22 * 1)+(soal23 * 1) + (soal24 * 1) + (soal25 * 1) + (soal26 * 1)) / 28 * 100)+(((soal27 * 1) + (soal28 * 1) + (soal29 * 1)+(soal30 * 1) + (soal31 * 1)) / 20 * 100)+(((soal32 * 1) + (soal33 * 1) + (soal34 * 1)+(soal35 * 1) + (soal36 * 1)) / 20 * 100)+(((soal37 * 1) + (soal38 * 1) + (soal39 * 1)) / 12 * 100)+(((soal40 * 1) + (soal41 * 1)) / 8 * 100)+(((soal42 * 1) + (soal43 * 1) + (soal44 * 1)) / 12 * 100))/10 ;}
function stopCalc10(){
clearInterval(interval);}
</script> 
                      </tr>
                    </table>
					<?php
					  
	if (isset($_POST['simpan']))
   {
					  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					$Id_Nilai_C=$_POST["Id_Nilai_C"];
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
					  $A15=$_POST["A15"];
					  $A16=$_POST["A16"];
					  $A17=$_POST["A17"];
					  $A18=$_POST["A18"];
					  $A19=$_POST["A19"];
					  $A20=$_POST["A20"];
					  $A21=$_POST["A21"];
					  $A22=$_POST["A22"];
					  $A23=$_POST["A23"];
					  $A24=$_POST["A24"];
					  $A25=$_POST["A25"];
					  $A26=$_POST["A26"];
					  $A27=$_POST["A27"];
					  $A28=$_POST["A28"];
					  $A29=$_POST["A29"];
					  $A30=$_POST["A30"];
					  $A31=$_POST["A31"];
					  $A32=$_POST["A32"];
					  $A33=$_POST["A33"];
					  $A34=$_POST["A34"];
					  $A35=$_POST["A35"];
					  $A36=$_POST["A36"];
					  $A37=$_POST["A37"];
					  $A38=$_POST["A38"];
					  $A39=$_POST["A39"];
					  $A40=$_POST["A40"];
					  $A41=$_POST["A41"];
					  $A42=$_POST["A42"];
					  $A43=$_POST["A43"];
					  $A44=$_POST["A44"];					  

					  $Skor1=$_POST["Skor1"];
					  $Skor2=$_POST["Skor2"];
					  $Skor3=$_POST["Skor3"];
					  $Skor4=$_POST["Skor4"];
					  $Skor5=$_POST["Skor5"];
					  $Skor6=$_POST["Skor6"];
					  $Skor7=$_POST["Skor7"];
					  $Skor8=$_POST["Skor8"];
					  $Skor9=$_POST["Skor9"];
					  $Skor10=$_POST["Skor10"];
					  $Skor_C=$_POST["Skor_C"];
					  		  
   //Rumus
   $Skor1=($A1+$A2+$A3+$A4+$A5+$A6)/24*100;
   $Skor2=($A7+$A8)/8*100;
   $Skor3=($A9+$A10+$A11+$A12)/16*100;
   $Skor4=($A13+$A14+$A15+$A16+$A17+$A18+$A19)/28*100;
   $Skor5=($A20+$A21+$A22+$A23+$A24+$A25+$A26)/28*100;
   $Skor6=($A27+$A28+$A29+$A30+$A31)/20*100;
   $Skor7=($A32+$A33+$A34+$A35+$A36)/20*100;
   $Skor8=($A37+$A38+$A39)/12*100;
   $Skor9=($A40+$A41)/8*100;
   $Skor10=($A42+$A43+$A44)/12*100;
   //Rata" SKOR
   $Skor_C=($Skor1+$Skor2+$Skor3+$Skor4+$Skor5+$Skor6+$Skor7+$Skor8+$Skor9+$Skor10)/1000*100;
   //kita simpan duluu
	date_default_timezone_set('Asia/Jakarta');
    $tgl=date('Y-m-d');
   //kita simpan duluu
  if ($add = mysqli_query($konek, "UPDATE nilai set tgl_c='$tgl', Skor_C='$Skor_C' WHERE Id_Jadwal_Nilai='$Id_Jadwal' AND NIP_Guru_Nilai='$nip'")){
    mysql_query($add);

		echo "<script> alert('Data Berhasil Disimpan.'); </script>";
		echo "<script> window.location='nilai.php';</script>";
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));
   }
   ?>
                  <p>&nbsp;</p>
                  </form>
                  <p>&nbsp;</p>
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
