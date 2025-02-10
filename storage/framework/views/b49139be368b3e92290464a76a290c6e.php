<?php $__env->startSection('title', 'Manage Users'); ?>
<?php $__env->startSection('content'); ?>
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Manage Users</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content Header-->
<!--begin::App Content-->
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">

                    <div class="d-flex justify-content-between">
                        <h4 class="my-2">Users List</h4>
                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.create')): ?>
                              <a href="<?php echo e(route('users.create')); ?>" class="btn btn-success btn-sm my-2"><i class="fa fa-plus"></i> Add New User</a>
                          <?php endif; ?>
                    </div>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" id="users-table">
                        <thead>
                            <tr>
                                <th scope="col" width="1%">S#</th>
                                <th scope="col" width="20%">Name</th>
                                <th scope="col" width="20%">Email</th>
                                <th scope="col" width="15%">Verified</th>
                                <th scope="col" width="15%">Roles</th>
                                <th scope="col" width="19%">Action</th>
                              </tr>
                        </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration+($users->perPage()*($users->currentPage()-1))); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <td>
                                            <?php if($item->email_verified_at): ?>
                                                <span class="badge bg-success">Verified</span>
                                            <?php else: ?>
                                                <span class="badge bg-danger">Not Verified</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $item->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span class="badge bg-primary"><?php echo e($role->name); ?></span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.show')): ?>
                                                <a href="<?php echo e(route('users.show', $item->id)); ?>" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.edit')): ?>
                                                <a href="<?php echo e(route('users.edit', $item->id)); ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                            <?php endif; ?>



                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users.destroy')): ?>
                                                    <form action="<?php echo e(route('users.destroy', $item->id)); ?>" method="POST" class="d-inline">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');"><i class="bi bi-trash"></i> Delete</button>
                                                    </form>
                                                <?php endif; ?>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                    </table>
                    <div class="d-flex justify-content-end">
                        <?php echo e($users->links()); ?>

                </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
     <!--end::Container-->
</div>



<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
  <script>

  </script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\tracker\resources\views/users/index.blade.php ENDPATH**/ ?>