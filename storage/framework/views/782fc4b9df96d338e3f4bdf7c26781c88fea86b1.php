<?php $__env->startSection('content-header', 'Ganti Pengguna'); ?>

<?php $__env->startSection('breadcump'); ?>
<li>Dashboard</li>
<li>Pengguna</li>
<li class="active">Mengganti Pengguna</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('widgets.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo Html::ul($errors->all()); ?>

<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Mengganti Pengguna</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
      <i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
			<?php echo Form::model($users, array('route' => array('dashboard.users.update', $users->id), 'method' => 'PUT', 'files' => true)); ?>

      <?php echo Form::hidden('id', $users->id); ?>

      <div class="col-xs-6">
        <?php echo e(Form::tutaText('name', old('name'), '*', ['required' => 'required'], 'Nama')); ?>

        <?php echo e(Form::tutaText('username', old('username'), '*', ['required' => 'required'])); ?>

        <?php echo e(Form::tutaEmail('email', old('email'), '*', ['required' => 'required'])); ?>

        <?php echo e(Form::tutaText('phone', old('phone'), '*', ['required' => 'required'])); ?>

       
      </div>
      <div class="col-xs-6">
        <?php echo e(Form::tutaArea('address', old('address'), null, ['rows' => 3], 'Alamat')); ?>

        <?php echo e(Form::tutaPass('password', null, [], null, '<em class="text-success">Kosongkan jika tidak ingin mengganti password</em>')); ?>


        <div class="form-group required <?php echo e($errors->has('role') ? ' has-error' : ''); ?>" style="display :none;">
        <?php echo e(Form::label('role', 'Role')); ?>

        <?php echo e(Form::select('role', ['admin' => 'Administrator', 'user' => 'Pengguna'], null, ['class' => 'form-control', 'required' => 'required'])); ?>

        <?php if($errors->has('role')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('role')); ?></strong>
            </span>
        <?php endif; ?>
        </div>
        <div class="form-group">
            <label class="control-label">Foto</label>
            <p><img src="<?php echo e(TutaComp::getImage($users->foto)); ?>" class="user-image" alt="User Image" width="100px"></p>
            <?php echo Form::file('foto', old('foto'), array('class' => 'form-control')); ?>

        </div>

      </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group pull-right">
        <?php echo Form::submit('Save', array('class' => 'btn btn-primary')); ?>

        <a class="btn btn-small btn-warning" href="<?php echo e(URL::to('dashboard/users')); ?>">Cancel</a>
        <?php echo Form::close(); ?>

      </div>
    </div>
  </div>
  <!-- /.box-body -->
</div>

<!-- /.box -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-dash-lte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>