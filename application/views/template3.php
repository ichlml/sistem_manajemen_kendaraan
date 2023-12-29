<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Selamat Datang &rsaquo; Sistem Kendaraan Dinas</title>

  <!-- General CSS Files -->
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/@fortawesome/fontawesome-free/css/all.css') ?>"">
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/jquery-ui-dist/jquery-ui.min.css') ?>"">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/assets/css/style2.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/assets/css/search.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/assets/css/components.css')?>">
  
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/select2.min.css">
  <!-- datatables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/DataTables/datatables.min.css">
  
  <!-- carousell -->
	<link rel="stylesheet" href="<?= base_url('assets/owl/dist/assets/owl.carousel.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css')?>">

	<!-- JQuery -->
  <script src="<?=base_url()?>assets/node_modules/jquery/dist/jquery.js"></script>
  <!-- carousel -->
  <script src="<?=base_url()?>assets/node_modules/jquery-ui-dist/jquery-ui.min.js"></script>

</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container-fluid">
      <div class="navbar fixed-top"></div>
      <nav class="navbar navbar-expand-lg main-navbar fixed bg-primary">
        <a href="index.html" class="navbar-brand sidebar-gone-hide"><img src="<?=base_url()?>assets/assets/img/logo.png" width="40" alt="Logo Dinas"> Kendaraan Dinas</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
            <!-- <li class="nav-item active"> <a href="<?=site_url('pengguna/')?>" class="nav-link"><i class="fas fa-home"></i> Home</a></li> -->
            <li class="nav-item"><a href="<?=site_url('pengguna/dataDetail')?>" class="nav-link"><i class="fas fa-bus-alt"></i> Data Kendaraan</a></li>
            <li class="nav-item"><a href="<?=site_url('pengguna/pemeliharaan')?>" class="nav-link"><i class="fas fa-tools"></i> Pemeliharaan</a></li>
            <li class="nav-item"><a href="<?=base_url('pengguna/berita')?>" class="nav-link"><i class="far fa-id-card"></i> Berita Acara</a></li>
            <li class="nav-item"><a href="<?=site_url('pengguna/pajak')?>" class="nav-link"><i class="fas fa-calendar-check"></i> Pajak Jatuh Tempo</a></li>
          </ul>
        </div>
        <form class="form-inline ml-auto">
          
        </form>
        <ul class="navbar-nav navbar-right">
          
          
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?=base_url()?>assets/assets/img/avatar/avatar-3.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?=strtoupper($this->session->nama_opd)?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged</div>
              <!-- <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a> -->
              <a href="<?= base_url('pengguna/setting')?>" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a> 
              <div class="dropdown-divider"></div>
              <a href="<?=base_url('auth/logout')?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

     
      <!-- Main Content -->
      <div class="main-content">
        <?php echo $contents ?>
      </div>
      <!-- end content  -->

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="#">Saipul Marom</a>
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
  <script rel="stylesheet" href="<?= base_url('assets/owl/dist/owl.carousel.min.js')?>"></script>
</body>
</html>

<script>
  $(document).ready(function(){
    $('#tabel1'). dataTable();
    $('#tabel2'). dataTable();
    $('.contoh').select2();
  });
</script>
