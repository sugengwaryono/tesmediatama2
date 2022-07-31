<?php $__env->startSection('scripts'); ?>
<script>
$(document).ready(function() {


});
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header', 'Kirim Request Ke Admin'); ?>

<?php $__env->startSection('breadcump'); ?>
<li>Dashboard</li>
<li>Posting</li>
<li class="active">Mengirim Request Ke Admin</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- POST BARU -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Kirim Request Ke Admin</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
      <?php echo Form::open(array('route' => 'dashboard.pengguna.req-admin.store', 'method' => 'POST', 'files' => true)); ?>

      <div class="col-xs-6">
     <?php echo e(Form::label('video_id', 'video')); ?>

        
        <?php echo Form::select('video_id', $videos, old('video_id'), array('class' => 'form-control', 'required' => 'required')); ?>

    <?php echo e(Form::tutaText('notes', old('notes'), '', ['required' => ''])); ?>

   




</div>
<div class="col-xs-6">


      <!-- Textarea -->


      <!-- Prepended text-->


     
</div>
    </div>





  <!-- /.box-body -->
</div>
</div>
<!-- /.POST END -->


<!-- AKSI -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Aksi</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="box-body">

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group pull-right">
        <?php echo Form::submit('Kirim', array('class' => 'btn btn-primary form-button')); ?>

        <a class="btn btn-small btn-warning" href="<?php echo e(URL::to('dashboard/pengguna/req-admin')); ?>">Batal</a>
        <?php echo Form::close(); ?>

      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>
</div>
<!-- /.AKSI END -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-dash-lte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>