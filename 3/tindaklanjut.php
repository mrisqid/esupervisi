<?php

session_start();
include "../koneksi.php";
include "auth_user.php";

?>
<!DOCTYPE html>
<html>
 <head>
     <meta charset="utf-8">
	 <meta name="viewport" content="initial-scale=1">
    <title>e-SUPERVISION</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../favico.PNG">
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
    <style type="text/css">
<!--
.style10 {
	font-size: 18px;
	font-weight: bold;
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
}
.style14 {font-size: 18px; font-weight: bold; color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; }
.style19 {color: #0000FF}
.style24 {font-family: Arial, Helvetica, sans-serif; color: #FFFFFF; font-weight: bold; font-size: 16px; }
.style27 {font-family: Arial, Helvetica, sans-serif; color: #FFFFFF; font-weight: bold; }
.style28 {font-family: Arial, Helvetica, sans-serif}
.style29 {font-size: 14px}
.style30 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
.style31 {font-family: "Times New Roman", Times, serif}
.style32 {color: #F05526}
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
			        <li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal Supervisi</span></a></li>
			        <li><a href="nilai.php"><i class="fa fa-book"></i><span>Nilai</span></a></li>
			        <li class="active"><a href="tindaklanjut.php"><i class="fa fa-book"></i><span>Link Tindak Lanjut </span></a></li>
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
            Tindak Lanjut</h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-book"></i> Tindak Lanjut</li>
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
   if (isset($_POST['proses']))
   {
   
   }
   ?>
                    <h3 align="center"><strong>DAFTAR LINK ARTIKEL/JURNAL</strong></h3>
                    <div style="overflow:auto;width:auto;height:auto;padding:10px;border:0px solid #CCCCCC">
                    <table class="table table-bordered table-striped table-scalable">
                      <tbody>
                        <tr valign="top">
                          <td width="29%" bgcolor="#0C1F39"><div align="center"><span class="style14">Topik Bahasan </span></div></td>
                          <td width="71%" bgcolor="#0C1F39"><div align="center"><span class="style14">Link</span></div></td>
                        </tr>
                        <tr valign="top">
                          <td rowspan="12"><blockquote>
                            <p><span class="style10">Kompetensi Guru</span></p>
                          </blockquote></td>
                          <td bgcolor="#f05526"><span class="style24"><span class="style32">---</span>Kompetensi Pedagogik</span></td>
                        </tr>
                        <tr valign="top">
                          <td><blockquote>
                            <p><span class="style28"><span class="style29"><a href="https://www.sekolahdasar.net/2012/07/7-aspek-kompetensi-pedagogik-guru.html"><font color="006699">https://www.sekolahdasar.net/2012/07/7-aspek-kompetensi-pedagogik-guru.html </a></span></span></p>
                          <p class="style30"><a href="https://www.dasarguru.com/kompetensi-pedagogik-guru-sd/"><font color="006699">https://www.dasarguru.com/kompetensi-pedagogik-guru-sd/ </a></p>
                          <p class="style30"><a href="http://eprints.ums.ac.id/52498/1/11.%20NASKAH%20PUBLIKASI.pdf"><font color="006699">http://eprints.ums.ac.id/52498/1/11.%20NASKAH%20PUBLIKASI.pdf </a></p>
                          <p><span class="style30"><a href="https://akhmadsudrajat.wordpress.com/2012/01/29/kompetensi-pedagogilk-guru/"><font color="006699">https://akhmadsudrajat.wordpress.com/2012/01/29/kompetensi-pedagogilk-guru/ </a></span></p>
                          </blockquote>                            </td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Kompetensi Profesional</span></td>
                        </tr>
                        <tr valign="top">
                          <td><blockquote>
                            <p><span class="style28"><span class="style29"><a href="https://www.dasarguru.com/kompetensi-profesional-guru-sd/"><font color="006699">https://www.dasarguru.com/kompetensi-profesional-guru-sd/ </a></span></span></p>
                          <p class="style30"><a href="http://ayietajima.blogspot.com/2013/11/kompetensi-profesional-guru-sd-dan.html"><font color="006699">http://ayietajima.blogspot.com/2013/11/kompetensi-profesional-guru-sd-dan.html </a></p>
                            <p class="style30"><a href="https://www.researchgate.net/publication/322572659_PROFESIONALISME_GURU_SD_MI"><font color="006699">https://www.researchgate.net/publication/322572659_PROFESIONALISME_GURU_SD_MI </a></p>
                            <p class="style30"><a href="https://yandarydl.wordpress.com/2016/02/18/kompetensi-profesional-guru/"><font color="006699">https://yandarydl.wordpress.com/2016/02/18/kompetensi-profesional-guru/ </a></p>
                            <p><span class="style30"><a href="http://profesikguru.blogspot.com/2012/05/kompetensi-profesional.html"><font color="006699">http://profesikguru.blogspot.com/2012/05/kompetensi-profesional.html </a></span></p>
                          </blockquote>                            </td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Kompetensi Sosial</span></td>
                        </tr>
                        <tr valign="top">
                          <td><blockquote>
                            <p><span class="style28"><span class="style29"><a href="https://www.dasarguru.com/kompetensi-sosial-guru-sd/"><font color="006699">https://www.dasarguru.com/kompetensi-sosial-guru-sd/ </a></span></span></p>
                            <p class="style30"><a href="https://www.uinjkt.ac.id/id/guru-harus-memiliki-kompetensi-sosial-yang-baik/"><font color="006699">https://www.uinjkt.ac.id/id/guru-harus-memiliki-kompetensi-sosial-yang-baik/ </a></p>
                            <p class="style30"><a href="https://assalam1986blog.wordpress.com/2015/12/17/kompetensi-sosial-guru/"><font color="006699">https://assalam1986blog.wordpress.com/2015/12/17/kompetensi-sosial-guru/ </a></p>
                            <p class="style30"><a href="http://mettaadnyana.blogspot.com/2014/03/kompetensi-sosial-seorang-guru.html"><font color="006699">http://mettaadnyana.blogspot.com/2014/03/kompetensi-sosial-seorang-guru.html </a></p>
                            <p class="style30"><a href="https://ahmadmuhli.wordpress.com/2012/03/01/kompetensi-sosial-guru/"><font color="006699">https://ahmadmuhli.wordpress.com/2012/03/01/kompetensi-sosial-guru/ </a></p>
                            <p><span class="style30"><a href="http://eprints.unm.ac.id/683/"><font color="006699">http://eprints.unm.ac.id/683/ </a></span></p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Kompetensi Personal</span></td>
                        </tr>
                        <tr valign="top">
                          <td><blockquote>
                            <p><span class="style28"><span class="style29"><a href="https://www.dasarguru.com/kompetensi-kepribadian-guru-sd/"><font color="006699">https://www.dasarguru.com/kompetensi-kepribadian-guru-sd/ </a></span></span></p>
                            <p class="style30"><a href="https://akhmadsudrajat.wordpress.com/2012/10/22/kompetensi-kepribadian-guru/"><font color="006699">https://akhmadsudrajat.wordpress.com/2012/10/22/kompetensi-kepribadian-guru/ </a></p>
                            <p><span class="style30"><a href="https://www.academia.edu/8899286/Implementasi_Kompetensi_Kepribadian_Guru_Sekolah_Dasa"><font color="006699">https://www.academia.edu/8899286/Implementasi_Kompetensi_Kepribadian_Guru_Sekolah_Dasar/ </a></span></p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Artikel/Jurnal</span></td>
                        </tr>
                        <tr valign="top">
                          <td><blockquote>
                            <p><span class="style28"><span class="style29"><a href="http://ejournal.umm.ac.id/index.php/jmkpp/article/viewFile/2206/2353"><font color="006699">http://ejournal.umm.ac.id/index.php/jmkpp/article/viewFile/2206/2353</a></span></span></p>
                            <p class="style30"><a href="http://journal.unj.ac.id/unj/index.php/jtp/article/download/5334/4320/"><font color="006699">http://journal.unj.ac.id/unj/index.php/jtp/article/download/5334/4320/ </a></p>
                            <p class="style30"><a href="http://eprints.ums.ac.id/46057/19/Naspub_jadi.pdf"><font color="006699">http://eprints.ums.ac.id/46057/19/Naspub_jadi.pdf </a></p>
                            <p class="style30"><a href="http://staffnew.uny.ac.id/upload/131782837/penelitian/KOMPETENSI+GURU+SD.pdf"><font color="006699">http://staffnew.uny.ac.id/upload/131782837/penelitian/KOMPETENSI+GURU+SD.pdf </a></p>
                            <p class="style30"><a href="http://file.upi.edu/Direktori/FIP/JUR._PEDAGOGIK/196108141986031-BABANG_ROBANDI/STANDAR_KOMPETENSI_GURU_KELAS_SD.pdf"><font color="006699">http://file.upi.edu/Direktori/FIP/JUR._PEDAGOGIK/196108141986031-BABANG_ROBANDI/STANDAR_KOMPETENSI_GURU_KELAS_SD.pdf </a></p>
                            <p class="style30"> <a href="http://eprints.ums.ac.id/42691/20/NASKAH%20JADI.pdf"><font color="006699">http://eprints.ums.ac.id/42691/20/NASKAH%20JADI.pdf </a></p>
                            <p class="style30"> <a href="https://media.neliti.com/media/publications/72121-ID-kompetensi-guru-dalam-peningkatan-presta.pdf"><font color="006699">https://media.neliti.com/media/publications/72121-ID-kompetensi-guru-dalam-peningkatan-presta.pdf </a> </p>
                            <p class="style30"> <a href="http://research.unissula.ac.id/file/publikasi/211313015/9991Afandi_makalah_semnaspgsdump.pdf"><font color="006699">http://research.unissula.ac.id/file/publikasi/211313015/9991Afandi_makalah_semnaspgsdump.pdf </a> </p>
                            <p class="style30"> <a href="http://file.upi.edu/Direktori/FIP/JUR._PGTK/197803082001122-RITA_MARIYANA/JURNAL_kompetensi_guru_dalam_PBB.pdf"><font color="006699">http://file.upi.edu/Direktori/FIP/JUR._PGTK/197803082001122RITA_MARIYANA/JURNAL_kompetensi_guru_dalam_PBB.pdf </a></p>
                            <p class="style30"> <a href="http://file.upi.edu/Direktori/JURNAL/PENDIDIKAN_DASAR/Nomor_12-Oktober_2009/PROFIL_GURU_SEKOLAH_BERTARAF_INTERNASIONAL.pdf"><font color="006699">http://file.upi.edu/Direktori/JURNAL/PENDIDIKAN_DASAR/Nomor_12-Oktober_2009/PROFIL_GURU_SEKOLAH_BERTARAF_INTERNASIONAL.pdf </a> </p>
                            <p class="style30"> <a href="https://journals.sagepub.com/doi/full/10.1177/0022487118812418"><font color="006699">https://journals.sagepub.com/doi/full/10.1177/0022487118812418 </a>   </p>
                          </blockquote>                            <p class="style30">&nbsp;</p></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Video</span></td>
                        </tr>
                        <tr valign="top">
                          <td><blockquote class="style30">
                            <p class="style19"><a href="https://www.youtube.com/watch?v=n8sfW46LnDs"><font color="006699">https://www.youtube.com/watch?v=n8sfW46LnDs </a></p>
                            <p><a href="https://www.youtube.com/watch?v=CuIY1FIcumM"><font color="006699">https://www.youtube.com/watch?v=CuIY1FIcumM </a></p>
                            <p><a href="https://www.youtube.com/watch?v=Lij48Q507ao"><font color="006699">https://www.youtube.com/watch?v=Lij48Q507ao </a></p>
                            <p><a href="https://www.youtube.com/watch?v=FJdmxFPd8so"><font color="006699">https://www.youtube.com/watch?v=FJdmxFPd8so </a></p>
                            <p><a href="https://www.youtube.com/watch?v=LRAO050TDpI"><font color="006699">https://www.youtube.com/watch?v=LRAO050TDpI </a></p>
                            <p><a href="https://www.youtube.com/watch?v=EAv0SsBfpYw"><font color="006699">https://www.youtube.com/watch?v=EAv0SsBfpYw </a></p>
                            <p><a href="https://www.youtube.com/watch?v=CiK7Vazqhqw"><font color="006699">https://www.youtube.com/watch?v=CiK7Vazqhqw </a></p>
                            <p><a href="https://www.youtube.com/watch?v=lTWMdZ1qA60"><font color="006699">https://www.youtube.com/watch?v=lTWMdZ1qA60 </a></p>
                            <p><a href="https://www.youtube.com/watch?v=GUSXjsb3Z7g"><font color="006699">https://www.youtube.com/watch?v=GUSXjsb3Z7g </a></p>
                            <p><a href="https://www.youtube.com/watch?v=lTWMdZ1qA60"><font color="006699">https://www.youtube.com/watch?v=lTWMdZ1qA60 </a></p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td rowspan="14"><blockquote>
                            <p><span class="style10">Teknologi Pembelajaran </span></p>
                          </blockquote></td>
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Strategi Pembelajaran </span></td>
                        </tr>
                        <tr valign="top">
                          <td><blockquote>
                            <p><span class="style28"><span class="style29"><a href="https://www.haruspintar.com/macam-macam-strategi-pembelajaran/"><font color="006699">https://www.haruspintar.com/macam-macam-strategi-pembelajaran/ </a></span></span></p>
                            <p class="style30"><a href="https://teguhtdodo.wordpress.com/2014/08/02/41-macam-model-metode-pembelajaran-efektif/"><font color="006699">https://teguhtdodo.wordpress.com/2014/08/02/41-macam-model-metode-pembelajaran-efektif/ </a></p>
                            <p class="style30"><a href="https://www.academia.edu/36414989/STRATEGI-PEMBELAJARAN-DI-SD/"><font color="006699">https://www.academia.edu/36414989/STRATEGI-PEMBELAJARAN-DI-SD/ </a></p>
                            <p class="style30"><a href="https://www.academia.edu/8512305/BAHAN-MAKALAH-STRATEGI-BELAJAR-MENGAJAR-DI-SD/"><font color="006699">https://www.academia.edu/8512305/BAHAN-MAKALAH-STRATEGI-BELAJAR-MENGAJAR-DI-SD/ </a></p>
                            <p class="style30"><a href="https://aguswuryanto.wordpress.com/2010/12/22/model-dan-strategi-pembelajaran/"><font color="006699">https://aguswuryanto.wordpress.com/2010/12/22/model-dan-strategi-pembelajaran/ </a></p>
                            <p class="style30"><a href="http://strategipembelajaransd.blogspot.com/"><font color="006699">http://strategipembelajaransd.blogspot.com/ </a></p>
                            <p><span class="style30"><a href="https://sahabatkeluarga.kemdikbud.go.id/forum/showthread.php?tid=18079/"><font color="006699">https://sahabatkeluarga.kemdikbud.go.id/forum/showthread.php?tid=18079/ </a></span></p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Metode Pembelajaran</span></td>
                        </tr>
                        <tr valign="top">
                          <td> <blockquote>
                            <p><a href="https://dosenpsikologi.com/macam-macam-metode-pembelajaran"><font color="006699"><span class="style30">https://dosenpsikologi.com/macam-macam-metode-pembelajaran </span></a> </p>
                            <p><span class="style30"><a href="https://belajarpsikologi.com/macam-macam-metode-pembelajaran/"><font color="006699">https://belajarpsikologi.com/macam-macam-metode-pembelajaran/ </a></span> </p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Media Pembelajaran</span></td>
                        </tr>
                        <tr valign="top">
                          <td><blockquote>
                            <p><span class="style28"><span class="style29"><a href="http://blogpengertian.com/media-pembelajaran/"><font color="006699">http://blogpengertian.com/media-pembelajaran/ </a></span></span></p>
                            <p class="style30"><a href="http://metodepembelajaran10.blogspot.com/2017/01/macam-macam-media-pembelajaran-dan_11.html"><font color="006699">http://metodepembelajaran10.blogspot.com/2017/01/macam-macam-media-pembelajaran-dan_11.html </a></p>
                            <p class="style30"><a href="https://evrilita.wordpress.com/2015/06/22/peranan-media-pembelajaran-dalam-kurikulum-2013/"><font color="006699">https://evrilita.wordpress.com/2015/06/22/peranan-media-pembelajaran-dalam-kurikulum-2013/ </a></p>
                            <p class="style30"><a href="https://www.researchgate.net/publication/326125390_MEDIA_PEMBELAJARAN_TEMATIK_DI_SEKOLAH_DASAR_MUHAMMADIYAH"><font color="006699">https://www.researchgate.net/publication/326125390_MEDIA_PEMBELAJARAN_TEMATIK_DI_SEKOLAH_DASAR_MUHAMMADIYAH </a></p>
                            <p class="style30"><a href="http://gurukuansing.blogspot.com/2011/06/macam-macam-media-pembelajaran.html"><font color="006699">http://gurukuansing.blogspot.com/2011/06/macam-macam-media-pembelajaran.html </a></p>
                            <p class="style30"><a href="https://goenable.wordpress.com/tag/jenis-jenis-media-pembelajaran/"><font color="006699">https://goenable.wordpress.com/tag/jenis-jenis-media-pembelajaran/ </a></p>
                            <p><span class="style30"><a href="http://acepmiftahudin.blogspot.com/2014/02/media-pembelajaran-di-sekolah-dasar.html"><font color="006699">http://acepmiftahudin.blogspot.com/2014/02/media-pembelajaran-di-sekolah-dasar.html </a></span></p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Manajemen Kelas </span></td>
                        </tr>
                        <tr valign="top">
                          <td><blockquote>
                            <p> <a href="https://www.kajianpustaka.com/2017/11/pengertian-tujuan-dan-prinsip-manajemen-kelas.html"><font color="006699"><span class="style30">https://www.kajianpustaka.com/2017/11/pengertian-tujuan-dan-prinsip-manajemen-kelas.html </span></a> </p>
                            <p> <span class="style30"><a href="https://www.seputarpengetahuan.co.id/2017/12/pengertian-manajemen-kelas-tujuan-prinsip.html"><font color="006699">https://www.seputarpengetahuan.co.id/2017/12/pengertian-manajemen-kelas-tujuan-prinsip.html </a></span> </p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Akomodasi Dalam Kelas </span></td>
                        </tr>
                        <tr valign="top">
                          <td> <blockquote>
                            <p><a href="http://darululumjember.blogspot.com/2015/03/penerapan-asimilasi-dan-akomodasi-dalam.html"><font color="006699"><span class="style30">http://darululumjember.blogspot.com/2015/03/penerapan-asimilasi-dan-akomodasi-dalam.html </span></a> </p>
                          </blockquote>                            </td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style27"><span class="style24"><span class="style32">---</span>Artikel/Jurnal</span></span></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#FFFFFF"><blockquote>
                            <p><span class="style29"><a href="http://journal.um-4surabaya.ac.id/index.php/pgsd/article/view/1156/" class="style30"><font color="006699"><span class="style28">http://journal.um- 4 surabaya.ac.id/index.php/pgsd/article/view/1156/</span></a></span></p>
                            <p class="style30"><a href="https://docplayer.info/63494115-Layanan-akomodasi-guru-dalam-pembelajaran-untuk-siswa-lamban-belajar-slow-learner-di-kelas-v.html"><font color="006699">https://docplayer.info/63494115-Layanan-akomodasi-guru-dalam-pembelajaran-untuk-siswa-lamban-belajar-slow-learner-di-kelas-v.html</a></p>
                            <p class="style30"><a href="http://eprints.uny.ac.id/23445/1/SKRIPSI.pdf"><font color="006699">http://eprints.uny.ac.id/23445/1/SKRIPSI.pdf </a></p>
                            <p> <span class="style30"><a href="https://www.scribd.com/document/345842023/Contoh-asimilasi-akomodasi"><font color="006699">https://www.scribd.com/document/345842023/Contoh-asimilasi-akomodasi </a></span>  </p>
                          </blockquote>                            </td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Video</span></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#FFFFFF"><blockquote>
                            <p><span class="style31"><span class="style28"><span class="style29"><a href="https://youtu.be/FG152JGTHzg"><font color="006699">https://youtu.be/FG152JGTHzg </a></span></span></span></p>
                            <p class="style30"><a href="https://youtu.be/s9yOOwGYYfU"><font color="006699">https://youtu.be/s9yOOwGYYfU </a></p>
                            <p class="style30"><a href="https://youtu.be/EuzgJlqzjFw"><font color="006699">https://youtu.be/EuzgJlqzjFw </a></p>
                            <p class="style30"><a href="https://youtu.be/ubMSrUBW94I"><font color="006699">https://youtu.be/ubMSrUBW94I </a></p>
                            <p class="style30"><a href="https://youtu.be/EBjf6pw9t4s"><font color="006699">https://youtu.be/EBjf6pw9t4s </a></p>
                            <p class="style30"><a href="https://youtu.be/eOOSzhHaX_4"><font color="006699">https://youtu.be/eOOSzhHaX_4 </a></p>
                            <p class="style30"><a href="https://youtu.be/FG152JGTHzg"><font color="006699">https://youtu.be/FG152JGTHzg </a></p>
                            <p class="style30"><a href="https://youtu.be/A9Vex9CAJVo"><font color="006699">https://youtu.be/A9Vex9CAJVo </a></p>
                            <p class="style30"><a href="https://youtu.be/7G_PuCIpaaM"><font color="006699">https://youtu.be/7G_PuCIpaaM </a></p>
                            <p class="style30"><a href="https://youtu.be/O0xdaCEqrU0"><font color="006699">https://youtu.be/O0xdaCEqrU0 </a></p>
                            <p class="style30"><a href="https://youtu.be/l1QxsqrdpyI"><font color="006699">https://youtu.be/l1QxsqrdpyI </a></p>
                            <p class="style30"><a href="https://youtu.be/I0jgcyfC2r8"><font color="006699">https://youtu.be/I0jgcyfC2r8</a></p>
                            <p class="style30"><a href="https://youtu.be/I0jgcyfC2r8"><font color="006699">https://youtu.be/I0jgcyfC2r8 </a></p>
                            <p class="style30"><a href="https://youtu.be/RfxysozwBr0"><font color="006699">https://youtu.be/RfxysozwBr0 </a></p>
                            <p> <span class="style30"><a href="https://youtu.be/auzwH1mK2TY"><font color="006699">https://youtu.be/auzwH1mK2TY </a></span> </p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td rowspan="14"><blockquote>
                            <p><span class="style10">Pembelajaran Abad 21</span></p>
                          </blockquote></td>
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Project Based Learning</span></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#FFFFFF"> <blockquote>
                            <p><a href="http://scdc.binus.ac.id/himpgsd/2017/10/project-based-learning/"><font color="006699"><span class="style30">http://scdc.binus.ac.id/himpgsd/2017/10/project-based-learning/ </span></a> </p>
                            <p>                            <span class="style30"><a href="http://fatkhan.web.id/pengertian-model-pembelajaran-project-based-learning/"><font color="006699">http://fatkhan.web.id/pengertian-model-pembelajaran-project-based-learning/ </a></span>  </p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Pembelajaran Efektif </span></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#FFFFFF"> <blockquote>
                            <p><a href="https://www.researchgate.net/publication/305207211_STRATEGI_PEMBELAJARAN_EFEKTIF_BERBASIS_MOBILE_LEARNING_PADA_SEKOLAH_DASAR" class="style30"><font color="006699"><span class="style30"><font color="006699">https://www.researchgate.net/publication/305207211_STRATEGI_PEMBELAJARAN_EFEKTIF_BERBASIS_MOBILE_LEARNING_PADA_SEKOLAH_DASAR </span></a></p>
                            <p> <span class="style30"><a href="http://rinarahmatika55.blogspot.com/2015/11/menciptakan-pembelajaran-yang-efektif.html"><font color="006699">http://rinarahmatika55.blogspot.com/2015/11/menciptakan-pembelajaran-yang-efektif.html </a></span>  </p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Pembelajaran Berbasis Aktivitas</span></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#FFFFFF"> <blockquote>
                            <p><a href="http://atikaputri1403.blogspot.com/2016/03/pengajaran-berbasis-aktivitas.html"><font color="006699"><span class="style30">http://atikaputri1403.blogspot.com/2016/03/pengajaran-berbasis-aktivitas.html </span></a> </p>
                            <p> <span class="style30"><a href="http://wayandevilbat.blogspot.com/2011/04/pengajaran-berbasis-aktivitas-bab-i.html"><font color="006699">http://wayandevilbat.blogspot.com/2011/04/pengajaran-berbasis-aktivitas-bab-i.html </a></span> </p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Pembelajaran Terbaik </span></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#FFFFFF"> <blockquote>
                            <p><a href="https://sijai.com/metode-pembelajaran/"><font color="006699"><span class="style30">https://sijai.com/metode-pembelajaran/ </span></a> </p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Pembelajaran Menyenangkan </span></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#FFFFFF">                            <blockquote>
                            <p><a href="http://pustakaaslikan.blogspot.com/2011/12/pembelajaran-menyenangkan.html"><font color="006699"><span class="style30">http://pustakaaslikan.blogspot.com/2011/12/pembelajaran-menyenangkan.html </span></a> </p>
                            <p class="style30"> <a href="http://fasyahartikelku.blogspot.com/2016/06/12-prinsip-pembelajaran-yang.html"><font color="006699">http://fasyahartikelku.blogspot.com/2016/06/12-prinsip-pembelajaran-yang.html </a> </p>
                            <p> <span class="style30"><a href="https://www.kompasiana.com/ambarsakti/561e9d9a747e61eb0bf71d7e/pembelajaran-menyenangkan-untuk-membangun-minat-siswa"><font color="006699">https://www.kompasiana.com/ambarsakti/561e9d9a747e61eb0bf71d7e/pembelajaran-menyenangkan-untuk-membangun-minat-siswa </a></span> </p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Artikel/Jurnal</span></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#FFFFFF"><blockquote>
                            <p><span class="style28"><span class="style29"><a href="https://journals.sagepub.com/doi/full/10.1177/0022487118783189"><font color="006699">https://journals.sagepub.com/doi/full/10.1177/0022487118783189</a></span></span></p>
                            <p class="style30"><a href="https://journals.sagepub.com/doi/pdf/10.1177/0022487110382917"><font color="006699">https://journals.sagepub.com/doi/pdf/10.1177/0022487110382917 </a></p>
                            <p class="style30"><a href="https://journals.sagepub.com/doi/full/10.1177/0022487117717467"><font color="006699">https://journals.sagepub.com/doi/full/10.1177/0022487117717467 </a></p>
                            <p class="style30"><a href="https://journals.sagepub.com/doi/full/10.1177/0022487116676315"><font color="006699">https://journals.sagepub.com/doi/full/10.1177/0022487116676315 </a></p>
                            <p class="style30"><a href="https://journals.sagepub.com/doi/full/10.1177/0022487117702579"><font color="006699">https://journals.sagepub.com/doi/full/10.1177/0022487117702579 </a></p>
                            <p class="style30"><a href="https://journals.sagepub.com/doi/full/10.1177/0022487117753574"><font color="006699">https://journals.sagepub.com/doi/full/10.1177/0022487117753574 </a></p>
                            <p class="style30"><a href="https://journals.sagepub.com/doi/full/10.1177/0022487115574291"><font color="006699">https://journals.sagepub.com/doi/full/10.1177/0022487115574291 </a></p>
                            <p class="style30"><a href="https://journals.sagepub.com/doi/full/10.1177/0022487117751400"><font color="006699">https://journals.sagepub.com/doi/full/10.1177/0022487117751400</a></p>
                            <p><span class="style30"><a href="https://journals.sagepub.com/doi/full/10.1177/0022487115592031"><font color="006699">https://journals.sagepub.com/doi/full/10.1177/0022487115592031 </a></span></p>
                          </blockquote></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#F05526"><span class="style24"><span class="style32">---</span>Video</span></td>
                        </tr>
                        <tr valign="top">
                          <td bgcolor="#FFFFFF"><blockquote>
                            <p><span class="style28"><span class="style29"><a href="https://youtu.be/XmVhO3nL2EM"><font color="006699">https://youtu.be/XmVhO3nL2EM </a></span></span></p>
                            <p><span class="style28"><span class="style29"><a href="https://youtu.be/eGWqBZSFgxE"><font color="006699">https://youtu.be/eGWqBZSFgxE </a></span></span></p>
                            <p><span class="style28"><span class="style29"><a href="https://youtu.be/4cscJcRKYxA"><font color="006699">https://youtu.be/4cscJcRKYxA </a></span></span></p>
                            <p><span class="style28"><span class="style29"><a href="https://youtu.be/08D0dBGIzYQ"><font color="006699">https://youtu.be/08D0dBGIzYQ</a></span></span></p>
                            <p class="style30"><a href="https://youtu.be/hnzCGNnU_WM"><font color="006699">https://youtu.be/hnzCGNnUWM</a></p>
                            <p class="style30"><a href="https://youtu.be/H7LHsL0iB_w"><font color="006699">https://youtu.be/H7LHsL0iBw </a></p>
                            <p class="style30"><a href="https://www.youtube.com/watch?v=KxZ2rEceadQ"><font color="006699">https://www.youtube.com/watch?v=KxZ2rEceadQ </a></p>
                            <p class="style30"><a href="https://www.youtube.com/watch?v=Z3A-cwBvlv0"><font color="006699">https://www.youtube.com/watch?v=Z3A-cwBvlv0 </a></p>
                            <p class="style30"><a href="https://www.youtube.com/watch?v=B0Y2xYIkvfc"><font color="006699">https://www.youtube.com/watch?v=B0Y2xYIkvfc </a></p>
                            <p class="style30"><a href="https://www.youtube.com/watch?v=J6OCX1VH1pY"><font color="006699">https://www.youtube.com/watch?v=J6OCX1VH1pY </a></p>
                          </blockquote>                            </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <p align="center">&nbsp;</p>
                    <p align="center">&nbsp; </p>
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