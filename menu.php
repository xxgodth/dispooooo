    <!-- Navbar-->
    <header class="app-header"><img src="assets/images/logokecil.jpg" height="40px"></img>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
	  <marquee><p><h4><font color="white">SELAMAT DATANG DI</font><font color="yellow"> APLIKASI SI-S3GA</font><font color="white"> PENGADILAN AGAMA NANGA BULIK</font></h4></p></marquee>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
	  <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="assets/images/pa.jpg" width="50px" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Admin</p>
          <p class="app-sidebar__user-designation">PA Nanga Bulik</p>
        </div>
      </div>
      <?php } ?>
	  <?php if(isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="assets/images/kua.jpg" width="50px" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Admin</p>
          <p class="app-sidebar__user-designation">Dukcapil</p>
        </div>
      </div>
      <?php } ?>
	  <?php if(isset($_SESSION['level']) && $_SESSION['level']==3) { ?>
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="assets/images/dukcapil.jpg" width="50px" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Admin</p>
          <p class="app-sidebar__user-designation">KUA</p>
        </div>
      </div>
      <?php } ?>	  
	  
      <ul class="app-menu">
	  <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
        <li><a class="app-menu__item active" href="beranda_admin.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
		<li><a class="app-menu__item" href="?page=putpen&actions=tampil"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data Putusan/Penetapan</span></a></li>
		<li><a class="app-menu__item" href="?page=ac&actions=tampil"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data Akta Cerai</span></a></li>		
		<li><a class="app-menu__item" href="?page=laporan&actions=cetak"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Cetak Lap Put/Pen</span></a></li>
		<li><a class="app-menu__item" href="?page=ac&actions=cetak"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Cetak Data AC</span></a></li>		
		<li><a class="app-menu__item" href="?page=user&actions=tampil"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Atur Pengguna</span></a></li>
		<li><a class="app-menu__item" href="?page=backup&actions=data"><i class="app-menu__icon fa fa-database"></i><span class="app-menu__label">Backup Data</span></a></li>
      <?php } ?>
      <?php if(isset($_SESSION['level']) && $_SESSION['level']==2) { ?>
        <li><a class="app-menu__item active" href="beranda_admin.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
		<li><a class="app-menu__item" href="?page=putpen&actions=tampil"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data Putusan/Penetapan</span></a></li>
		<li><a class="app-menu__item" href="?page=ac&actions=tampil"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data Akta Cerai</span></a></li>		
		<li><a class="app-menu__item" href="?page=laporan&actions=cetak"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Cetak Lap Put/Pen</span></a></li>
		<li><a class="app-menu__item" href="?page=ac&actions=cetak"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Cetak Data AC</span></a></li>		
      <?php } ?>
      <?php if(isset($_SESSION['level']) && $_SESSION['level']==3) { ?>
        <li><a class="app-menu__item active" href="beranda_admin.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
		<li><a class="app-menu__item" href="?page=putpen&actions=tampil"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data Putusan/Penetapan</span></a></li>
		<li><a class="app-menu__item" href="?page=ac&actions=tampil"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data Akta Cerai</span></a></li>		
		<li><a class="app-menu__item" href="?page=laporan&actions=cetak"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Cetak Lap Put/Pen</span></a></li>
		<li><a class="app-menu__item" href="?page=ac&actions=cetak"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Cetak Data AC</span></a></li>			
      <?php } ?>

                    <?php if (isset($_SESSION['user'])) { ?>
                    <li><a class="app-menu__item" href="logout.php"><i class="app-menu__icon fa fa-database"></i><span class="app-menu__label">Logout</a></li>
                <?php } ?>	  
	  
      </ul>
    </aside>