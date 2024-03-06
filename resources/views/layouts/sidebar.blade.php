<nav id="sidebar" class="sidebar-wrapper">

    <!-- App brand starts -->
    <div class="app-brand p-2 d-flex align-items-center">
        <a href="index.html">
            <img src="" class="logo" alt="" />
        </a>
    </div>
    <!-- App brand ends -->

    <!-- Sidebar menu starts -->
    <div class="sidebarMenuScroll">
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="bi bi-pie-chart"></i>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('costumer.index') }}">
                    <i class="bi bi-person"></i>
                    <span class="menu-text">Customer</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#!">
                    <i class="bi bi-stickies"></i>
                    <span class="menu-text">Barang</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('barang-masuk.index') }}">Barang Masuk</a>
                    </li>
                    <li>
                        <a href="{{ route('barang.index') }}">Stok Barang</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('transaksi.index') }}">
                    <i class="bi bi-bar-chart-line"></i>
                    <span class="menu-text">Transaksi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('signout') }}">
                    <i class="bi bi-escape fs-4 me-2"></i>
                    <span class="menu-text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Sidebar menu ends -->

</nav>
