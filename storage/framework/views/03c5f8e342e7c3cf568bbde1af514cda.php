<?php if (isset($component)) { $__componentOriginal97eb5b161211c0da08650c9299ba5f38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal97eb5b161211c0da08650c9299ba5f38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'laravel-ui-adminlte::components.adminlte-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('laravel-ui-adminlte::adminlte-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Main Header -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img src="https://c0.klipartz.com/pngpicture/178/595/gratis-png-perfil-de-usuario-iconos-de-computadora-inicio-de-sesion-avatares-de-usuario-thumbnail.png"
                                class="user-image img-circle elevation-2" alt="User Image">

                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-secondary">
                                <img src="https://w7.pngwing.com/pngs/736/389/png-transparent-%EC%97%98%EB%B9%84%EC%97%90%EC%9D%B4%EB%84%A4%ED%8A%B8%EC%9B%8D%EC%8A%A4-%EC%A3%BC-inventory-coated-foundation-angle-logo-material.png"
                                    class="img-circle elevation-2" alt="User Image">

                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-secondary float-letf">Profile</a>
                                <a href="#" class="btn btn-secondary  float-right"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign out
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Left side column. contains the logo and sidebar -->
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.1.0
                </div>
                <strong>Copyright &copy; 2014-2023 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
                reserved.
            </footer>
        </div>
    </body>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal97eb5b161211c0da08650c9299ba5f38)): ?>
<?php $attributes = $__attributesOriginal97eb5b161211c0da08650c9299ba5f38; ?>
<?php unset($__attributesOriginal97eb5b161211c0da08650c9299ba5f38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal97eb5b161211c0da08650c9299ba5f38)): ?>
<?php $component = $__componentOriginal97eb5b161211c0da08650c9299ba5f38; ?>
<?php unset($__componentOriginal97eb5b161211c0da08650c9299ba5f38); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/layouts/app.blade.php ENDPATH**/ ?>