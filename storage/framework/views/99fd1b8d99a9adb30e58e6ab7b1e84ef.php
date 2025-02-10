<?php $__env->startSection('title', 'Manage Permmissions'); ?>
<?php $__env->startSection('content'); ?>
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
    <div class="row justify-content-center">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4 class="my-2">Permissions List</h4>
                      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permissions.create')): ?>
                          <form action="<?php echo e(route('permissions.store')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                              <button type="submit" class="btn btn-success btn-sm"><i class="bi bi-plus-lg"></i> Generate Permission</button>
                          </form>
                      <?php endif; ?>
                </div>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tr>
                    <th scope="col">S#</th>
                    <th scope="col">Name</th>
                  </tr>
                  <?php $__empty_1 = true; $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration+($permissions->perPage()*($permissions->currentPage()-1))); ?></th>
                        <td><?php echo e($permission->name); ?></td>
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
                        <?php echo e($permissions->links()); ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ACER\Documents\tracker\resources\views/permissions/index.blade.php ENDPATH**/ ?>