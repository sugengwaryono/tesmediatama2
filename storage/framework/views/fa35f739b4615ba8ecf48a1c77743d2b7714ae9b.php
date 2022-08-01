
<div class="panel panel-info">
           <div class="panel-heading">
             <h3 class="panel-title"><?php echo e($user->name); ?></h3>
           </div>
           <div class="panel-body">
             <div class="row">
               <div class="col-md-3 col-lg-3 " align="center"> <img alt="<?php echo e($user->name); ?>" src="<?php echo e(TutaComp::getImage($user->foto)); ?>" class="img-circle img-responsive"> </div>

               <div class=" col-md-9 col-lg-9 ">
                 <table class="table table-user-information">
                   <tbody>
                     <tr>
                       <td>Email:</td>
                       <td><?php echo e($user->email); ?></td>
                     </tr>
                     <tr>
                       <td>Username:</td>
                       <td><?php echo e($user->username); ?></td>
                     </tr>
                     <tr>
                       <td>Phone:</td>
                       <td><?php echo e($user->phone); ?></td>
                     </tr>
                     <?php if($user->website): ?>
                     <tr>
                       <td>Website:</td>
                       <td><?php echo e($user->website); ?></td>
                     </tr>
                     <?php endif; ?>
                     <?php if($user->address): ?>
                     <tr>
                       <td>Alamat:</td>
                       <td><?php echo e($user->address); ?></td>
                     </tr>
                     <?php endif; ?>
                    
                   </tbody>
                 </table>


               </div>
             </div>
           </div>
                <div class="panel-footer">
                       <a data-toggle="tooltip" data-placement="right" title="Kirim Pesan" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                       <span class="pull-right">

                           <?php echo Form::open(array('url' => 'dashboard/users/' . $user->id)); ?>

                               <?php echo Form::hidden('_method', 'DELETE'); ?>

                               <a href="<?php echo e(URL::to('dashboard/users/' . $user->id . '/edit')); ?>" data-toggle="tooltip" data-placement="left" title="Ganti Data Pengguna" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                               <button data-toggle="modal" title="Hapus Pengguna" data-target="#confirmDelete" data-placement="right" title="Hapus" class="btn btn-sm btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                           <?php echo Form::close(); ?>


                       </span>
                   </div>
</div>
