<?php $__env->startSection('content-header', 'Ganti Video'); ?>

<?php $__env->startSection('breadcump'); ?>
<li>Dashboard</li>
<li>Video</li>
<li class="active">Mengganti Video</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('widgets.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo Html::ul($errors->all()); ?>

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Mengganti Video</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
			<?php echo Form::model($videos, array('route' => array('dashboard.videos.update', $videos->id), 'method' => 'PUT', 'files' => true)); ?>

      <?php echo Form::hidden('id', $videos->id); ?>

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