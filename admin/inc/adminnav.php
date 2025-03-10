<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="/admin/index.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Shop</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="/admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottshopom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Admin</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/admin/index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <?php if ($session->isAdministrator()) { ?>
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-users me-2"></i>Users</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/admin/add_user.php" class="dropdown-item"><i class="fa fa-plus me-2"></i>Add User</a>
                    <a href="/admin/users.php" class="dropdown-item"><i class="fa fa-eye me-2"></i>View Users</a>
                </div>
            </div>
            <?php } ?>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-chalkboard me-2"></i>Products</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/admin/add_product.php" class="dropdown-item"><i class="fa fa-plus me-2"></i>Add Product</a>
                    <a href="/admin/products.php" class="dropdown-item"><i class="fa fa-eye me-2"></i>View Products</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-columns me-2"></i>Posts</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/admin/add_post.php" class="dropdown-item"><i class="fa fa-plus me-2"></i>Add Post</a>
                    <a href="/admin/posts.php" class="dropdown-item"><i class="fa fa-eye me-2"></i>View Posts</a>
                </div>
            </div>
            <a href="/admin/table.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
            <a href="/admin/chart.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
        </div>
</div>
<!-- Sidebar End -->


<!-- Content Start -->
<div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
        <a href="/admin/index.php" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input class="form-control bg-dark border-0" type="search" placeholder="Search">
        </form>
        <div class="navbar-nav align-items-center ms-auto">

        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="/admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">Admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                <a href="/admin/logout.php" class="dropdown-item">Log Out</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

