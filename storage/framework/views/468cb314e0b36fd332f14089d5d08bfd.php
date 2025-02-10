<nav class="app-header navbar navbar-expand bg-body">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Start Navbar Links-->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
            <i class="bi bi-list"></i>
          </a>
        </li>
      </ul>
      <!--end::Start Navbar Links-->
      <!--begin::End Navbar Links-->
      <ul class="navbar-nav ms-auto">
        <!--begin::Navbar Search-->

        <!--begin::User Menu Dropdown-->
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <img
              src="<?php echo e(asset('backend/assets/img/user2-160x160.jpg')); ?>"
              class="user-image rounded-circle shadow"
              alt="User Image"
            />
            <span class="d-none d-md-inline"><?php echo e(Auth::user()->name); ?></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <!--begin::User Image-->
            <li class="user-header text-bg-primary">
              <img
                src="<?php echo e(asset('backend/assets/img/user2-160x160.jpg')); ?>"
                class="rounded-circle shadow"
                alt="User Image"
              />
              <p>
                <?php echo e(Auth::user()->name); ?>

                
              </p>
            </li>
            <!--end::User Image-->

            <!--begin::Menu Footer-->
            <li class="user-footer">
              <a href="<?php echo e(route('profile')); ?>" class="btn btn-default btn-flat">Profile</a>
              <a href="#" class="btn btn-default btn-flat float-end"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </li>
            <!--end::Menu Footer-->
          </ul>
        </li>
        <!--end::User Menu Dropdown-->
      </ul>
      <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
  </nav>
<?php /**PATH E:\laragon\www\tracker\resources\views/inc/topbar.blade.php ENDPATH**/ ?>