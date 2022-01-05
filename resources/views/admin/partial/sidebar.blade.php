<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/wanboAdmin" class="brand-link">
        <img src="/frontend/img/core-img/favicon1.png" alt="AdminLTE Logo" class="brand-image"
            style="opacity: .8;height:100%">
        <span class="brand-text font-weight-bold">WANBO ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/wanboAdmin/account/{{ auth()->user()->id }}" class="d-block">{{ auth()->user()->username }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/wanboAdmin" class="nav-link <?= $active[0]=='billing' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Billing
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/wanboAdmin/foodOrder" class="nav-link <?= $active[0]=='food-order-list' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-hamburger"></i>
                        <p>
                            Food Order List
                        </p>
                    </a>
                </li>



                <li class="nav-header">MANAGE</li>

                <li class="nav-item">
                    <a href="/wanboAdmin/beverages" class="nav-link <?= $active[0]=='beverage-list' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-hamburger"></i>
                        <p>
                            Beverages
                        </p>
                    </a>
                </li>

                <li class="nav-item <?= $active[1] && $active[0]=='packages' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $active[0]=='packages' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-box-open"></i>
                        <p>
                            Packages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/wanboAdmin/packages" class="nav-link <?= $active[2]=='package-list' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Package List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/wanboAdmin/rooms" class="nav-link <?= $active[2]=='room-list' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Room List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">OTHER</li>

                <li class="nav-item <?= $active[1]==true && $active[0]=='report'  ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $active[0]=='report' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-scroll"></i>
                        <p>
                            Report
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/wanboAdmin/reportSummary" class="nav-link <?= $active[2]=='summary' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Summary</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/wanboAdmin/paymentHistory" class="nav-link <?= $active[2]=='payment-history' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payment History</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/wanboAdmin/orderHistory" class="nav-link <?= $active[2]=='order-history' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Order History</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?= $active[2]=='order-history' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Food Order History</p>
                            </a>
                        </li>
                    </ul>
                </li>

                

                <li class="nav-item">
                    <a href="/wanboAdmin/logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
