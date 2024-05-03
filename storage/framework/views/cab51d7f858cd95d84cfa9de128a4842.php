<li class="nav-item">
    <a href="<?php echo e(route('productos.index')); ?>" class="nav-link <?php echo e(Request::is('productos*') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-box-open"></i>
        <p>Productos</p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(route('proveedors.index')); ?>" class="nav-link <?php echo e(Request::is('proveedors*') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-recycle"></i>
        <p>Proveedors</p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(route('clientes.index')); ?>" class="nav-link <?php echo e(Request::is('clientes*') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-people-group"></i>
        <p>Clientes</p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(route('ordens.index')); ?>" class="nav-link <?php echo e(Request::is('ordens*') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-address-card"></i>
        <p>Ordens</p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(route('ventas.index')); ?>" class="nav-link <?php echo e(Request::is('ventas*') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-cart-shopping"></i>
        <p>Ventas</p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(route('detalle_ventas.index')); ?>" class="nav-link <?php echo e(Request::is('detalle_ventas*') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>Detalle Ventas</p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(route('category_products.index')); ?>" class="nav-link <?php echo e(Request::is('category_products*') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-cube"></i>
        <p>Category Products</p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(route('users.index')); ?>" class="nav-link <?php echo e(Request::is('users*') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-user"></i>
        <p>Users</p>
    </a>
</li>

<li class="nav-item">
    <a href="<?php echo e(route('rols.index')); ?>" class="nav-link <?php echo e(Request::is('rols*') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-users-gear"></i>
        <p>Rols</p>
    </a>
</li>
<?php /**PATH C:\xampp\htdocs\inventorymanager\resources\views/layouts/menu.blade.php ENDPATH**/ ?>