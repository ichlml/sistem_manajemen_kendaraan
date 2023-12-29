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
	<link rel="stylesheet" href="<?= base_url('assets/assets/css/style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/assets/css/search.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/assets/css/components.css')?>">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/select2.min.css">
  <!-- datatables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/DataTables/datatables.min.css">
  <!-- carousell -->

	<link rel="stylesheet" href="<?= base_url('assets/owl/dist/assets/owl.carousel.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/owl/dist/assets/owl.theme.default.min.css')?>">

	<!-- JQuery -->
  <script src="<?=base_url()?>assets/node_modules/jquery/dist/jquery.js"></script>
  <!-- carousel -->
  <script src="<?=base_url()?>assets/node_modules/jquery-ui-dist/jquery-ui.min.js"></script>

</head>
<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container-fluid">
      <div class="navbar"></div>
      <nav class="navbar navbar-expand-lg main-navbar bg-primary">
        <a href="<?=base_url()?>" class="navbar-brand sidebar-gone-hide"> <img src="<?=base_url()?>assets/assets/img/logo.png" width="40" alt="Logo Dinas"> Pemerintah Kabupaten Kudus</a>
        <div class="navbar-nav">
          <a href="<?=base_url()?>" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <!-- <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
            <li class="nav-item active"> <a href="<?=site_url('pengguna/')?>" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
            <li class="nav-item active"><a href="<?=site_url('pengguna/dataDetail')?>" class="nav-link"><i class="fas fa-file-alt"></i> Detail</a></li>
            <li class="nav-item active"><a href="#" class="nav-link"><i class="far fa-id-card"></i> Contact Us</a></li>
          </ul>
        </div> -->
        <form class="form-inline ml-auto">
          
        </form>
        <ul class="navbar-nav navbar-right">
        <li class="nav-item"> <a href="<?=site_url('auth')?>" class="nav-link"><i class="far fa-user"></i> Login</a></li>
          
          <!-- <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?=base_url()?>assets/assets/img/avatar/avatar-3.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?=strtoupper($this->session->nama_opd)?></div></a>
            
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
              <!-- <div class="dropdown-divider"></div>
              <a href="<?=base_url('auth/logout')?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li> -->
        </ul>
      </nav>

     <!-- carousel -->
        <div id="carouselExampleIndicators" class="carousel slide full-screen-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner h-100">
          <div class="carousel-item active h-100">
            <img class="d-block w-100" src="<?=base_url()?>img/Untitled-1.png" alt="First slide">
          </div>
          <div class="carousel-item" h-100>
            <img class="d-block w-100" src="<?=base_url()?>img/Untitled-2.png" alt="Second slide">
          </div>
          <div class="carousel-item" h-100>
            <img class="d-block w-100" src="<?=base_url()?>img/Untitled-1.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="search-box">
        <div class="input-group">
        <input class="search-txt form-control" type="text" name="cariKode" id="cariKode" placeholder="Cari Nomor Polisi di sini ...">
        <div class="input-group-append">
          <div class="input-group-text"><i class="fas fa-search"></i></div>
        </div>
        </div>
        <!-- <a class="search-btn" href="">
          <i class="fas fa-search"></i>
        </a> -->
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <?php echo $contents ?>
      </div>
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

      
  <!-- Template JS File -->
  <script src="<?= base_url('assets/assets/js/scripts.js')?>"></script>
  <script src="<?= base_url('assets/assets/js/custom.js') ?>"></script>
  <script src="<?=base_url()?>assets/sweet/dist/sweetalert2.all.min.js"></script>
  <script src="<?= base_url('assets/owl/dist/owl.carousel.min.js')?>"></script>
</body>

<script>
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    items:7,
    loop:false,
    margin:10,
    autoplay:true,
    autoplayTimeout:3500,
    autoplayHoverPause:false
});
</script>
