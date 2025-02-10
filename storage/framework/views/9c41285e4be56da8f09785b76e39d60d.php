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
    
        </ul>
        <!--end::Sidebar Menu-->
      </nav>
    </div>
    <!--end::Sidebar Wrapper-->
  </aside>
<?php /**PATH C:\Users\ACER\Documents\tracker\resources\views/inc/sidebar.blade.php ENDPATH**/ ?>