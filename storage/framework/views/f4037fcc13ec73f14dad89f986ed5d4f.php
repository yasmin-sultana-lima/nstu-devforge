<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
        <?php echo $__env->make('inc.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!--end::Header-->
      <!--begin::Sidebar-->
        <?php echo $__env->make('inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->

        <!--end::App Content Header-->

        <!--begin::App Content-->
        <?php echo $__env->yieldContent('content'); ?>

        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->

      <!--end::Footer-->
    </div>
    <!-- ./wrapper -->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->

    <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH E:\laragon\www\tracker\resources\views/layouts/back.blade.php ENDPATH**/ ?>