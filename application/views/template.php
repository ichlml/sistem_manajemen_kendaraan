
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Dashboard Kendaraan Dinas</title>

  	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/@fortawesome/fontawesome-free/css/all.css') ?>"">
  <link rel="stylesheet" href="<?= base_url('assets/node_modules/jquery-ui-dist/jquery-ui.min.css') ?>"">
  <!-- carousel -->

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/assets/css/style3.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/assets/css/components.css')?>">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/select2.min.css">
  <!-- datatables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/DataTables/datatables.min.css">


	<!-- JQuery -->
  <script src="<?=base_url()?>assets/assets/jquery/jquery.min.js"></script>
  
  <script src="<?=base_url()?>assets/node_modules/jquery-ui-dist/jquery-ui.min.js"></script>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
         
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?=base_url()?>assets/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?=strtoupper($this->session->user)?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged</div>
              <!-- <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a> -->
              <div class="dropdown-divider"></div>
              <a href="<?=base_url('auth/logout')?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?=base_url('admin')?>">Kendaraan Dinas</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?=base_url('admin')?>">KD</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard Admin</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-bus"></i><span>Kendaraan</span></a>
                <ul class="dropdown-menu">
                  <li class=""><a class="nav-link" href="<?=site_url('admin/pendataan')?>">Pendataan</a></li>
                  <li><a class="nav-link" href="<?=site_url('admin/data_kendaraan')?>">Data Kendaraan</a></li>
                </ul>
              </li>
              <li <?= $this->uri->segment(2) == 'pajak' || $this->uri->segment(2) == ''? 'class="active"' : '' ?>>
                <a href="<?=site_url('admin/pajak')?>" class="nav-link">
                  <i class="far fa-calendar-alt"></i> Pajak Kendaraan
                </a>
              </li>
              <li <?= $this->uri->segment(2) == 'DaftarKend' || $this->uri->segment(2) == ''? 'class="active"' : '' ?>>
                <a href="<?=site_url('admin/DaftarKend')?>" class="nav-link">
                  <i class="fas fa-file-invoice"></i> Daftar Kendaraan
                </a>
              </li>
              <li <?= $this->uri->segment(2) == 'pemeliharaan' || $this->uri->segment(2) == ''? 'class="active"' : '' ?>>
                <a href="<?=site_url('admin/pemeliharaan')?>" class="nav-link">
                  <i class="fas fa-tools"></i> Pemeliharaan
                </a>
              </li>
              <li <?= $this->uri->segment(2) == 'kaPem' || $this->uri->segment(2) == ''? 'class="active"' : '' ?>>
                <a href="<?=site_url('admin/kaPem')?>" class="nav-link">
                  <i class="far fa-credit-card"></i> Kartu Pemeliharaan
                </a>
              </li>
              <li class="menu-header">Data User</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Data User</span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?=site_url('user')?>">Data Admin</a></li>
                  <li><a href="<?=site_url('admin/data_opd')?>">Data OPD</a></li>
                  <li><a href="<?=site_url('admin/pengelola')?>">Data Pengelola</a></li>
                </ul>
              </li>
            </ul>  
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">

        <?php echo $contents ?>
        
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="">Saipul Marom</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>
  <?php if ($this->session->has_userdata('success')) {?>   
    <script type="text/javascript">
        $(function(){
            swal.fire("Success", "<?=$_SESSION['success']?>", "success");
        });
  </script>
<?php }?>

<?php if ($this->session->has_userdata('failed')) {?>
    <script type="text/javascript">
        $(function(){
            swal.fire("Failed","<?=$_SESSION['failed']?>","error");
        });
    </script>
<?php }?>

<?php if ($this->session->has_userdata('avaible')) {?>   
    <script type="text/javascript">
        $(function(){
            swal.fire("Info","<?=$_SESSION['avaible']?>","warning");
        });
    </script>
<?php }?>
  <!-- General JS Scripts -->
  <!-- <script src="<?= base_url('assets/node_modules/popper.js/dist/popper.min.js') ?>"></script> -->
  <script src="<?= base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js') ?>"></script>
  <script src="<?= base_url('assets/node_modules/moment/min/moment.min.js')?>"></script>
  <script src="<?= base_url('assets/assets/js/stisla.js') ?>"></script>

  <!-- JS Libraies Datatables -->
      <script src="<?=base_url()?>assets/DataTables/datatables.min.js"></script>
      <script src="<?=base_url()?>assets/dist/js/select2.min.js"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('assets/assets/js/scripts.js')?>"></script>
  <script src="<?= base_url('assets/assets/js/custom.js') ?>"></script>
  <script src="<?=base_url()?>assets/sweet/dist/sweetalert2.all.min.js"></script>
  
<script>
  $(document).ready(function(){
    $('#tabel1').dataTable();

    $('.contoh').select2();
  });
</script>
</body>
</html>

