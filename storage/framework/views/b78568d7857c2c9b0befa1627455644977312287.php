<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="<?php echo asset('template/plugins/datatables/dataTables.bootstrap.css'); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo asset('template/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo asset('template/plugins/datatables/dataTables.bootstrap.min.js'); ?>"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#cdata').DataTable();
});
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-header', 'Permintaan Pengguna'); ?>

<?php $__env->startSection('breadcump'); ?>
<li>Dashboard</li>
<li class="active">Permintaan Pengguna</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('widgets.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="box">
	<div class="box-header">
		<h3 class="box-title">
		Permintaan Pengguna
		</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="cdata" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>NO#</th>
					<th>Permintaan</th>
					<th>Status</th>
					<th>Pengguna</th>
					<th>Sisa Waktu</th>
          <th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($req_admin as $key => $value): ?>
				<tr>
					<td><?php echo e($key+1); ?></td>
					<td><?php echo e($value->name); ?></td>
					<td> 
					<?php if($value->acc === '1'): ?>
					    Diterima
					<?php elseif($value->acc === '2'): ?>
					    Ditolak
					<?php else: ?>
					    Menunggu
					<?php endif; ?>
					</td>
					<td><?php echo e($value->username); ?></td>
					<td><?php echo e($value->sisa_waktu); ?></td>

          <td><a href="<?php echo route('dashboard.myrequest.show', $value->id); ?>" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-eye-open"></i> Lihat</a>
          	<a href="<?php echo route('dashboard.myrequest.update', $value->id); ?>" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-eye-open"></i> Acc</a>


				
          </td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-dash-lte', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>