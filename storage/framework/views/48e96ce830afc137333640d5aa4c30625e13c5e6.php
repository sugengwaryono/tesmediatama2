<?php $__env->startSection('content-header', 'Video Baru'); ?>

<?php $__env->startSection('breadcump'); ?>
<li>Dashboard</li>
<li>Pengguna</li>
<li class="active">Membuat Video Baru</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Video Baru</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
      <?php echo Form::open(array('route' => 'dashboard.videos.store', 'method' => 'POST', 'files' => true)); ?>

      <div class="col-xs-6">
        <?php echo e(Form::tutaText('name', old('name'), '*', ['required' => 'required'], 'Nama')); ?>

        <?php echo e(Form::tutaText('url', old('url'), '*', ['required' => 'required'])); ?>

        
      </div>
     
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group pull-right">
        <?php echo Form::submit('Save', array('class' => 'btn btn-primary')); ?>

        <a class="btn btn-small btn-warning" href="<?php echo e(URL::to('dashboard/videos')); ?>">Cancel</a>
        <?php echo Form::close(); ?>

      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>

<!-- /.box -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-dash-lte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>