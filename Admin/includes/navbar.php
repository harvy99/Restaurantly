 

<?php include('dbcon.php')?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15"> 
        <img src="../../assets/img/favicon.ico" alt="logo" class="img-responsive">
    </div>
    <div class="sidebar-brand-text mx-3">29:11 Diners<sup>1.0</sup></div>
</a> 
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="home.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider"> 
<!-- Heading -->
<div class="sidebar-heading">
    Admin Area
</div>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-user-cog"></i>
        <span>Admin Accounts</span></a>
</li> 
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-users"></i>
        <span>Customer Accounts</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider"> 
<!-- Heading -->
<div class="sidebar-heading">
    System Management
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWeb"
        aria-expanded="true" aria-controls="collapseWeb">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Website Settings</span>
    </a>
    <div id="collapseWeb" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Website Settings:</h6>
            <a class="collapse-item" href="#">Homepage</a>
            <a class="collapse-item" href="#">About Us</a>
            <a class="collapse-item" href="#">Contact Us</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDashboard"
        aria-expanded="true" aria-controls="collapseDashboard">
        <i class="fas fa-fw fa-cog"></i>
        <span>Admin Dashboard</span>
    </a>
    <div id="collapseDashboard" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Modify Dashboard:</h6>
            <a class="collapse-item" href="#">Cards</a>
            <a class="collapse-item" href="#">Reports & Graphs</a> 
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts"
        aria-expanded="true" aria-controls="collapseProducts">
        <i class="fas fa-fw fa-folder"></i>
        <span>Product Management</span>
    </a>
    <div id="collapseProducts" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Modify Products:</h6>
            <a class="collapse-item" href="corners.php">Corners</a>
            <a class="collapse-item" href="categories.php">Categories</a> 
            <a class="collapse-item" href="products.php">Products</a> 
            <a class="collapse-item" href="variants.php">Product Variants</a> 
        </div>
    </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider"> 
<!-- Heading -->
<div class="sidebar-heading">
    Ordering
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrders"
        aria-expanded="true" aria-controls="collapseOrders">
        <i class="fas fa-fw fa-folder"></i>
        <span>Orders</span>
    </a>
    <div id="collapseOrders" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Orders:</h6>
            <a class="collapse-item" href="#">Orders</a>
            <a class="collapse-item" href="#">On Process</a> 
            <a class="collapse-item" href="#">Rejected</a>
        </div>
    </div>
</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDeliveries"
        aria-expanded="true" aria-controls="collapseDeliveries">
        <i class="fas fa-fw fa-folder"></i>
        <span>Deliveries</span>
    </a>
    <div id="collapseDeliveries" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Delivery:</h6>
            <a class="collapse-item" href="#">On Deliver</a>
            <a class="collapse-item" href="#">Arrived</a> 
            <a class="collapse-item" href="#">Rejected With issue</a>
        </div>
    </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider"> 
<!-- Heading -->
<div class="sidebar-heading">
    Reports
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReports"
        aria-expanded="true" aria-controls="collapseReports">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Reports</span>
    </a>
    <div id="collapseReports" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manage Reports:</h6>
            <a class="collapse-item" href="#">Weekly Reports</a>
            <a class="collapse-item" href="#">Monthly Reports</a> 
            <a class="collapse-item" href="#">Daily Reports</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider"> 
<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<!-- <div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
</div> -->

</ul>
<!-- End of Sidebar -->