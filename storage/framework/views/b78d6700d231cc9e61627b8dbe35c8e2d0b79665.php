<?php if(Session::has('message')): ?>
<div class="row">
<div class="col-md-12">
  <div class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?> alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php echo e(Session::get('message')); ?>

  </div>
</div></div>
<?php endif; ?>
