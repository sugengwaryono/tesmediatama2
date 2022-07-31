<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="noindex,nofollow" />
  <?php echo $__env->yieldContent('meta'); ?>
  <title>Tes Mediatama</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?php echo e(asset('/favicon.ico')); ?>" type="image/x-icon" />
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/template/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/template/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/template/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/template/dist/css/skins/_all-skins.min.css">
  <?php echo $__env->yieldContent('styles'); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="/dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>L</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Tes Mediatama</span>
    </a>


    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
           
          </li>
      <li class="dropdown user user-menu">
        
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
           
          </li>
          <!-- Menu Body -->
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="/dashboard/profile" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
    </nav>


  </header>
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <br />
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?php echo $__env->yieldContent('content-header', 'Dashboard'); ?><small><?php echo $__env->yieldContent('content-header-small', 'Halaman'); ?></small></h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <?php echo $__env->yieldContent('breadcump'); ?>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <?php echo $__env->yieldContent('content'); ?>

  </section>

</div>
    <footer class="main-footer">
     
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.0 -->
  <script src="/template/plugins/jQuery/jQuery-2.2.0.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="/template/bootstrap/js/bootstrap.min.js"></script>
  <?php echo $__env->yieldContent('scripts'); ?>
  <!-- FastClick -->
  <script src="/template/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="/template/dist/js/app.min.js"></script>

  <!-- SlimScroll 1.3.0 -->
  <script src="/template/plugins/slimScroll/jquery.slimscroll.min.js"></script>

  
  </body>
  </html>
