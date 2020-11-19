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
function startCalc2(){
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
document.form1.hasil.value = ((soal1 * 1) + (soal2 * 1) + (soal3 * 1)+(soal4 * 1) + (soal5 * 1) + (soal6 * 1)+(soal7 * 1) + (soal8 * 1) + (soal9 * 1)+(soal10 * 1) + (soal11 * 1) + (soal12 * 1)+(soal13 * 1) + (soal14 * 1)) / 56 * 100 ;}
function stopCalc2(){
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
.style7 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-weight: bold;}
.style8 {font-family: Arial, Helvetica, sans-serif}
.style9 {font-size: 16px; font-family: Arial, Helvetica, sans-serif; }
.style10 {font-size: 14px}
.style11 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
.style12 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; }
.style13 {font-family: Arial, Helvetica, sans-serif; color: #000000;}
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
            Penilaian Guru          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-book"></i> Penilaian Guru </li>
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
                    <h3 align="center"><strong>RENCANA PELAKSANAAN PEMBELAJARAN </strong></h3>
                    <table width="70%" border="1" align="center" cellpadding="5" cellspacing="1">
                      <tr bgcolor="#0c1f39">
                        <td width="26" rowspan="2"><div align="center">
                          <h4 class="style12">No.</h4>
                        </div></td>
                        <td width="747" rowspan="2">
                        <div align="center">
                          <h4 class="style12">Indikator Pengamatan </h4>
                        </div></td>
                        <td colspan="4"><div align="center">
                          <h4 class="style12">Indikator Penilaian</h4>
                        </div></td>
                      </tr>
                      <tr>
                        <td width="35" class="style6" bgcolor="#0c1f39"><div align="center" class="style7"><h4 class="style12"> 1 </h4></div></td>
                        <td width="35" class="style6" bgcolor="#0c1f39"><div align="center" class="style7"><h4 class="style12"> 2 </h4></div></td>
                        <td width="35" class="style6" bgcolor="#0c1f39"><div align="center" class="style7"><h4 class="style12"> 3</h4></div></td>
                        <td width="35" class="style6" bgcolor="#0c1f39"><div align="center" class="style7"><h4 class="style12"> 4</h4></div></td>
                      </tr>
                      <tr bgcolor="#f05526">
                        <td height="25px" colspan="6"><span class="style7">Kelengkapan dan Sistematika RPP </span></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">1</div></td>
                        <td valign="middle"><span class="style8">Identitas satuan penyidikan</span></td>
                        <td><div align="center">
                            <input name="A1" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A1" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A1" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A1" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">2</div></td>
                        <td valign="middle"><span class="style9">Identitas mata pelajaran atau tema/subtema</span></td>
                         <td><div align="center">
                            <input name="A2" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A2" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A2" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A2" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">3</div></td>
                        <td valign="middle"><span class="style8">Kelas/Program/Semester</span></td>
                         <td><div align="center">
                            <input name="A3" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A3" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A3" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A3" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">4</div></td>
                        <td valign="middle"><span class="style9">Materi pokok </span></td>
                         <td><div align="center">
                            <input name="A4" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A4" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A4" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A4" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">5</div></td>
                        <td valign="middle"><span class="style9">Alokasi waktu </span></td>
                         <td><div align="center">
                            <input name="A5" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A5" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A5" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A5" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">6</div></td>
                        <td valign="middle"><span class="style8">Kompetensi dasar yang harus dikuasai peserta </span></td>
                         <td><div align="center">
                            <input name="A6" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A6" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A6" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A6" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">7</div></td>
                        <td valign="middle"><span class="style8">Indikator pencapaian kompetensi</span></td>
                         <td><div align="center">
                            <input name="A7" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A7" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A7" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A7" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">8</div></td>
                        <td valign="middle"><span class="style8">Tujuan pembelajaran</span></td>
                         <td><div align="center">
                            <input name="A8" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A8" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A8" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A8" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">9</div></td>
                        <td valign="middle"><span class="style8">Materi ajar </span></td>
                         <td><div align="center">
                            <input name="A9" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A9" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A9" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A9" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">10</div></td>
                        <td valign="middle"><span class="style8">Metode pembelajaran </span></td>
                         <td><div align="center">
                            <input name="A10" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A10" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A10" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A10" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">11</div></td>
                        <td valign="middle"><span class="style8">Media pembelajaran </span></td>
                         <td><div align="center">
                            <input name="A11" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A11" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A11" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A11" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">12</div></td>
                        <td valign="middle"><span class="style8">Langkah-langkah pembelajaran, pendahuluan, inti, penutup </span></td>
                         <td><div align="center">
                            <input name="A12" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A12" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A12" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A12" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">13</div></td>
                        <td valign="middle"><span class="style8">Sumber belajar </span></td>
                         <td><div align="center">
                            <input name="A13" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A13" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A13" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A13" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">14</div></td>
                        <td valign="middle"><span class="style8">Penilaian pembelajaran</span></td>
                         <td><div align="center">
                            <input name="A14" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A14" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A14" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A14" onFocus="startCalc2(); startCalc3();" onBlur="stopCalc2(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="2" valign="middle"><div align="right"></div></td>
                        <td colspan="4"><div align="center">
                          <p class="style8">Skor</p>
                          <p>
                            <input type="text" id="hasil" maxlength="4" onFocus="startCalc3();" onBlur="stopCalc3();" readonly="readonly"/>
                          </p>
                        </div>                          
                        <div align="center"></div></td>
                      </tr>
                      <script> 
function startCalc1(){
interval = setInterval("calc1()",1);}
function calc1(){
soal15 = document.form1.A15.value;
soal16 = document.form1.A16.value; 
soal17 = document.form1.A17.value;
soal18 = document.form1.A18.value;
soal19 = document.form1.A19.value; 
soal20 = document.form1.A20.value;
soal21 = document.form1.A21.value;
soal22 = document.form1.A22.value; 
document.form1.hasil2.value = ((soal15 * 1) + (soal16 * 1) + (soal17 * 1)+(soal18 * 1) + (soal19 * 1) + (soal20 * 1)+(soal21 * 1) + (soal22 * 1)) / 32 * 100;}
function stopCalc1(){
clearInterval(interval);}
</script>

                      <tr bgcolor="#f05526">
                        <td height="25px" colspan="6"><span class="style7">Prinsip Penyusunan RPP</span></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style8 style10">15</div></td>
                        <td valign="middle"><span class="style9">Mempertimbangkan perbedaan kebutuhan setiap peserta didik </span></td>
                         <td><div align="center">
                            <input name="A15" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A15" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A15" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A15" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">16</div></td>
                        <td valign="middle"><span class="style9">Mendorong patisipasi aktif peserta didik (pembelajaran aktif) </span></td>
                         <td><div align="center">
                            <input name="A16" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A16" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A16" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A16" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">17</div></td>
                        <td valign="middle"><span class="style8">Berpusat pada peserta didik untuk mendorong semangat belajar mengembangkan budaya membaca dan menulis </span></td>
                         <td><div align="center">
                            <input name="A17" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A17" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A17" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A17" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">18</div></td>
                        <td valign="middle"><span class="style8">Mengembangkan budaya membaca dan menulis </span></td>
                         <td><div align="center">
                            <input name="A18" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A18" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A18" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A18" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">19</div></td>
                        <td valign="middle"><p class="style8">Memberikan umpaln balik dan tidak lanjut RPP memuat rancangan program pemberian umpan balik positif, penguatan, pengayaan dan remedi</p>                        </td>
                         <td><div align="center">
                            <input name="A19" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A19" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A19" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A19" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">20</div></td>
                        <td valign="middle"><span class="style8">Menekankan ketekaitan dan keterpaduan antara KD, materi pembelajaran, kegiatan pembelajaran, indikator pencapaian kompetensi, penialain dan sumber belajar dalam satu keutuhan pengalaman belajar </span></td>
                         <td><div align="center">
                            <input name="A20" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A20" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A20" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A20" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">21</div></td>
                        <td valign="middle"><span class="style8">Mengakomodasi pembelajaran tematik-terpadu, keterpaduan lintas mata, pelajaran, lintas aspek belajar dan keragaman budaya </span></td>
                         <td><div align="center">
                            <input name="A21" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A21" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A21" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A21" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td valign="middle"><div align="center" class="style11">22</div></td>
                        <td valign="middle"><span class="style8">Penerapan teknologi informasi dan komunikasi sacara terintegrasi, sistematis, dan efektif sesuai dengan siruasi dan kondisi</span></td>
                         <td><div align="center">
                            <input name="A22" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="1">
                        </div></td>
                        <td><div align="center">
                            <input name="A22" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="2">
                        </div></td>
                        <td><div align="center">
                            <input name="A22" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="3">
                        </div></td>
                        <td><div align="center">
                            <input name="A22" onFocus="startCalc1(); startCalc3();" onBlur="stopCalc1(); stopCalc3();" type="radio" value="4">
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="2"><Blockquote><Strong>Keterangan:</Strong>
                        <br>1 = Kurang
                        <br>2 = Cukup
                        <br>3 = Baik
                        <br>4 = Sangat Baik</Blockquote></td>
                        <td colspan="4"><div align="center">
                          <p class="style8">Skor </p>
                          <p>
                            <input type="text" id="hasil2" maxlength="4" onFocus="startCalc3();" onBlur="stopCalc3();" readonly="readonly"/>
                          </p>
                        </div>
                        <div align="center"></div>                        <div align="center" class="style13">Skor Total</div>                        <div align="center"><input type="text" id="total" maxlength="4" readonly="readonly"/>
                        </div>                        <div align="center"></div>                        <div align="center">
                          <input name="simpan" class="btn-primary" type="submit" id="simpan" value="Save">
                        </div></td>
                      </tr>
                      <script> 
function startCalc3(){
interval = setInterval("calc3()",1);}
function calc3(){
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
document.form1.total.value = (((soal1 * 1) + (soal2 * 1) + (soal3 * 1)+(soal4 * 1) + (soal5 * 1) + (soal6 * 1)+(soal7 * 1) + (soal8 * 1) + (soal9 * 1)+(soal10 * 1) + (soal11 * 1) + (soal12 * 1)+(soal13 * 1) + (soal14 * 1)) / 56 * 50)+(((soal15 * 1) + (soal16 * 1) + (soal17 * 1)+(soal18 * 1) + (soal19 * 1) + (soal20 * 1)+(soal21 * 1) + (soal22 * 1)) / 32 * 50) ;}
function stopCalc3(){
clearInterval(interval);}
</script>
                    </table>
                    <?php
					  
	if (isset($_POST['simpan']))
   {
					  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					$Id_Nilai_A=$_POST["Id_Nilai_A"];
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
					
					  $Skor1=$_POST["Skor1"];
					  $Skor2=$_POST["Skor2"];
					  $Skor_B=$_POST["Skor_B"];
   
   //Rumus
   $Skor1=($A1+$A2+$A3+$A4+$A5+$A6+$A7+$A8+$A9+$A10+$A11+$A12+$A13+$A14)/56*100;
   $Skor2=($A15+$A16+$A17+$A18+$A19+$A20+$A21+$A22)/32*100;
   //TOTAL SKOR
   $Skor_B=($Skor1+$Skor2)/200*100;
   date_default_timezone_set('Asia/Jakarta');
    $tgl=date('Y-m-d');
   //kita simpan duluu
	if ($add = mysqli_query($konek, "UPDATE nilai set tgl_b='$tgl', Skor_B='$Skor_B' WHERE Id_Jadwal_Nilai='$Id_Jadwal' AND NIP_Guru_Nilai='$nip'")){
		mysql_query($add);
		echo "<script> alert('Data Berhasil Disimpan.'); </script>";
		echo "<script> window.location='nilai.php';</script>";
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));
   }
   ?>
                  </form>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                </div></div></div></div></section><div class="modal fade" id="modal_delete"><div class="modal-dialog"><div class="modal-content" style="margin-top:100px;"><div class="modal-header">
                  <h4 class="modal-title" style="text-align:center;">Are you sure to delete this data ?</h4>
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
