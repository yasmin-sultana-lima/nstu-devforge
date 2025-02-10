<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
      <!--begin::Brand Link-->
      <a href="<?php echo e(route('dashboard')); ?>" class="brand-link">
        <!--begin::Brand Image-->
        <img
          src="<?php echo e(asset('/backend/assets/img/AdminLTELogo.png')); ?>"
          alt="AdminLTE Logo"
          class="brand-image opacity-75 shadow"
        />
        <!--end::Brand Image-->
        <!--begin::Brand Text-->
        <span class="brand-text fw-light">Dashboard</span>
        <!--end::Brand Text-->
      </a>
      <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
      <nav class="mt-2">
        <!--begin::Sidebar Menu-->
        <ul
          class="nav sidebar-menu flex-column"
          data-lte-toggle="treeview"
          role="menu"
          data-accordion="false"
        >
        <li class="nav-item">
            <a href="<?php echo e(route('dashboard')); ?>" class="nav-link <?php if(Route::is( 'dashboard')): ?> active <?php endif; ?>">
              <i class="nav-icon bi bi-speedometer"></i>
              <p>Dashboard</p>
            </a>
        </li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check(['users.index', 'roles.index', 'permissions.index'])): ?>
        <li class="nav-item <?php if(Route::is('users.*') || Route::is('roles.*') || Route::is('permissions.*')): ?> menu-open <?php endif; ?>">
            <a href="#" class="nav-link <?php if(Route::is('users.*') || Route::is('roles.*') || Route::is('permissions.*')): ?> active <?php endif; ?>">
              <i class="nav-icon bi bi-person"></i>
              <p>
                Users Management
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('users.index')); ?>" class="nav-link <?php if(Route::is('users.*')): ?> active <?php endif; ?>">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>User List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('roles.index')); ?>" class="nav-link <?php if(Route::is('roles.*')): ?> active <?php endif; ?>">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Role List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('permissions.index')); ?>" class="nav-link <?php if(Route::is('permissions.*')): ?> active <?php endif; ?>">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Permission List</p>
                </a>
              </li>
            </ul>
          </li>
            <?php endif; ?>
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('profile')): ?>
            <li class="nav-item">
                <a href="<?php echo e(route('profile')); ?>" class="nav-link <?php if(Route::is('profile')): ?> active <?php endif; ?>">
                <i class="nav-icon bi bi-person"></i>
                <p>Profile</p>
                </a>
            </li>
            <?php endif; ?>
        </ul>
        <!--end::Sidebar Menu-->
      </nav>
    </div>
    <!--end::Sidebar Wrapper-->
  </aside>
<?php /**PATH E:\laragon\www\tracker\resources\views/inc/sidebar.blade.php ENDPATH**/ ?>