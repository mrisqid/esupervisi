<header class="main-header">
  <!-- Logo -->
  <style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
  </style>
  
  <div class="logo">
<span class="logo-mini"><img src="ic.PNG" class="img-circle" alt="Logo" height="50" width="50"></span>
<span class="logo-lg style1"><b>e-SUPERVISION</b></span></div>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="../aset/foto/<?php echo "".$_SESSION["Foto"]."" ?>" class="user-image" alt="Foto">
    <span class="hidden-xs" style="text-transform:capitalize;"><?php echo "".$_SESSION["Username"]."" ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
    <img src="../aset/foto/<?php echo "".$_SESSION["Foto"]."" ?>" class="img-circle" alt="Foto">
              <!--<h3><p>Akademik</p></h3>-->
    <p style="text-transform:capitalize;"><span class="style1">Hi</span> <?php echo "".$_SESSION["Username"]."" ?>, </p>
    <p class="style1">Welcome to e-SUPERVISION</p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
    <div class="pull-left">
                <a href="#" <button class="btn btn-primary" style="width:100px;font-size:13px;font-family:arial;text-align:center;color:white;" type="button" data-target="#ModalEditAdministrator" data-toggle="modal"> <span>Edit Profil</span></button></a>
              </div>
              <div class="pull-right">
                <a href="../logout.php" class="btn btn-primary" style="width:100px;font-size:13px;font-family:arial;text-align:center;color:white;">Sign out </a>
              </div>
            </li>
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php
include "../koneksi.php";
include "auth_user.php";

$queryuser = mysqli_query ($konek, "SELECT Id_User, Username, Id_Usergroup_User, Id_Usergroup, Nama_Usergroup, Password, Foto FROM user INNER JOIN usergroup ON Id_Usergroup_User=Id_Usergroup");
						if($queryuser == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($user = mysqli_fetch_array ($queryuser)){
?>
<!-- Modal Popup Dosen -->
		<div id="ModalEditAdministrator" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Profil</h4>
					</div>
					<div class="modal-body">
						<form action="user_edit_admin.php" name="modal_popup" enctype="multipart/form-data" method="post">
                            <input name="Id_User" type="hidden" value="<?php echo "".$_SESSION["Id_User"]."" ;?>">
                            <div class="form-group">
								<label><span class="style1">Usergroup</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=1 selected>Administrator</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label><span class="style1">Username Baru</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="User_Administrator" type="text" class="form-control" value="<?php echo "".$_SESSION["Username"].""; ?>"/>
									</div>
							</div>
                            <div class="form-group">
								<label><span class="style1">Password Baru</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Password" type="text" class="form-control" placeholder="Password"/>
									</div>
							</div>
                            <div class="form-group">
								<label><span class="style1">Foto</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Foto" type="file" class="form-control" id="Foto">
									</div>
							</div>

							<div class="modal-footer">
								<button type="submit" class="btn btn-primary" style="width:70px;font-size:13px;font-family:arial;text-align:center">
									Change</button>
								<button type="reset" class="btn btn-primary" style="width:70px;font-size:13px;font-family:arial;text-align:center"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
        <?php
						}
						?>