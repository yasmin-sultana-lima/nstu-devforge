<?php $__env->startSection('title', 'Manage Roles'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="app-content-header">

    <div class="container-fluid">

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

    </div>

</div>

<div class="app-content">

    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4 class="my-2">Roles List</h4>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.create')): ?>
                          <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-success btn-sm my-2"><i class="fa fa-plus"></i> Add New Role</a>
                      <?php endif; ?>
                </div>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Name</th>
                    <th scope="col" width="250px">Action</th>
                  </tr>
                  <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration+($roles->perPage()*($roles->currentPage()-1))); ?></th>
                        <td><?php echo e($role->name); ?></td>
                        <td>
                            <form action="<?php echo e(route('roles.destroy', $role->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('show-role')): ?>
                                    <a href="<?php echo e(route('roles.show', $role->id)); ?>" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
                                <?php endif; ?>
                                <?php if($role->name!='Super Admin'): ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-role')): ?>
                                        <a href="<?php echo e(route('roles.edit', $role->id)); ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                    <?php endif; ?>

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles.destroy')): ?>
                                        <?php if($role->name!=Auth::user()->hasRole($role->name)): ?>
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this role?');"><i class="bi bi-trash"></i> Delete</button>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endif; ?>

                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <td colspan="3">
                        <span class="text-danger">
                            <strong>No Role Found!</strong>
                        </span>
                    </td>
                <?php endif; ?>
                </table>
                <div class="d-flex justify-content-end">
                    <?php echo e($roles->links()); ?>

            </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      </div>
      </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\tracker\resources\views/roles/index.blade.php ENDPATH**/ ?>