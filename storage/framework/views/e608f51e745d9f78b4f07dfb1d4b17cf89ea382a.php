<?php $__env->startSection('title', 'LOGIN'); ?>

<?php $__env->startSection('content'); ?>
<body class="hold-transition login-page">
<div class="login-box">

  <div class="login-logo">
    <a href="/"><b>LOGIN</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login untuk masuk</p>
    <?php if(Session::has('message')): ?>
      <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>"><?php echo e(Session::get('message')); ?>

          <?php if(Session::has('email')): ?>
          <?php echo Form::open(array('url' => 'send/confirmation-code')); ?>

              <?php echo Form::hidden('email', Session::get('email')); ?>

              Jika email <strong><?php echo e(Session::get('email')); ?></strong> anda belum menerima email konfirmasi klik: <button class="btn btn-success" type="submit">Kirim Kode Konfirmasi</button>
              <hr />
          <?php echo Form::close(); ?>

          <?php endif; ?>
      </p>
    <?php endif; ?>
    <form role="form" method="POST" action="<?php echo e(url('/login')); ?>">
      <?php echo csrf_field(); ?>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">
              <i class="fa fa-btn fa-sign-in"></i> Login
          </button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
    
  
    <div class="row">
      <div class="col-xs-8">
        <a href="<?php echo e(url('/')); ?>">&larr; Kembali ke Beranda</a>
      </div>
      
    
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>