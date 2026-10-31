<?php
ob_start();
?>



<?php 
$content = ob_get_clean();
require_once 'layout.php';
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to My Dashboard</h2>
        <p class="text-muted mb-0">Manage your business data efficiently from one place.</p>
    </div>
</div>

<img src="https://via.placeholder.com/1000x300?text=Welcome+To+My+Project" class="img-fluid rounded shadow-sm mb-4" alt="Banner">

<div class="row">
<!-- Products -->
<div class="col-md-4 mb-3">
    <div class="card text-center p-3 shadow-sm">
        <div class="card-body">
            <i class="bi bi-box-seam fs-1 text-primary"></i>
            <h5 class="mt-2">Products</h5>
            <a href="products.php" class="btn btn-sm btn-outline-primary">View</a>
        </div>
    </div>
</div>

<!-- Customers -->
<div class="col-md-4 mb-3">
    <div class="card text-center p-3 shadow-sm">
        <div class="card-body">
            <i class="bi bi-people fs-1 text-success"></i>
            <h5 class="mt-2">Customers</h5>
            <a href="customers.php" class="btn btn-sm btn-outline-success">View</a>
        </div>
    </div>
</div>

<!-- Orders -->
<div class="col-md-4 mb-3">
    <div class="card text-center p-3 shadown-sm">
        <div class="card-body">
            <i class="bi bi-receipt fs-1 text-warning"></i>
            <h5 class="mt-2">Orders</h5>
            <a href="orders.php" class="btn btn-sm btn-outline-warning">View</a>
        </div>
    </div>
</div>