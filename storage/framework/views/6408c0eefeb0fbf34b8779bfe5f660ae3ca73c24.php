<?php $__env->startSection('scripts'); ?>
<script src="<?php echo asset('mytuta/js/select.spec.js'); ?>"></script>
<script id="dsq-count-scr" src="//mobilokal.disqus.com/count.js" async></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('layouts.utility', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Start Body Content -->
  	<div class="main" role="main">
    	<div id="content" class="content full padding-b0">
            <div class="container">
            	<!-- Welcome Content and Services overview -->
            	<div class="row">
                	<div class="col-md-6">
                    	<h1 class="uppercase strong">Ujian Praktek Mediatama. -Sugeng Waryono-</h1>
                        <p class="lead">Silahkan login di pojok kanan atas.</p>
                    </div>
                    <div class="col-md-6">
                       
                    </div>
                </div>
                
           	</div>
            <div class="spacer-50"></div>
            <div class="lgray-bg make-slider">
            	<div class="container">
                    <!-- Search by make -->

                </div>
            </div>
        </div>
   	</div>
    <!-- End Body Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>