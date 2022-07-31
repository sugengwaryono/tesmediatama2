<!DOCTYPE HTML>
<html>
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="nofollow" />
<title><?php echo $__env->yieldContent('title', 'Tes masuk - Mediatama'); ?></title>
<meta name="description" content="">
<meta name="author" content="">
<?php $__env->startSection('image_source'); ?><link rel="image_src" href="<?php echo e(url('/images/mediatama.png')); ?>" /><?php echo $__env->yieldSection(); ?>
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<!-- CSS
  ================================================== -->
<link rel="shortcut icon" href="<?php echo e(asset('/mediatama.png')); ?>" type="image/x-icon" />
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link href="/vendor/prettyphoto/css/prettyPhoto.css" rel="stylesheet" type="text/css">
<link href="/vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="/vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
<!-- Color Style -->
<link href="/colors/color1.css" rel="stylesheet" type="text/css">
<?php echo $__env->yieldContent('styles'); ?>
<!-- SCRIPTS
  ================================================== -->
<script src="/js/modernizr.js"></script><!-- Modernizr -->
</head>
<?php echo $__env->yieldContent('body', '<body class="home">'); ?>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">

  <?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 
    <?php echo $__env->yieldContent('content'); ?>

   
    <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <?php echo $__env->make('layouts.modal-login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script src="/js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call -->
    <script src="/vendor/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
    <script src="/js/ui-plugins.js"></script> <!-- UI Plugins -->
    <script src="/js/helper-plugins.js"></script> <!-- Helper Plugins -->
    <script src="/vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
    <script src="/vendor/password-checker.js"></script> <!-- Password Checker -->
    <script src="/js/bootstrap.js"></script> <!-- UI -->
    <script src="/js/init.js"></script> <!-- All Scripts -->
    <script src="/vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
    <!-- <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
    <?php echo $__env->yieldContent('scripts'); ?>
   
    </body>
    </html>
