 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">- MSG -</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            {{-- @if (Auth::user()->role == 'admin') --}}
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-light fa-house-user"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('scan.index') }}">
                    <i class="fas fa-light fa-qrcode"></i>
                    <span>Barcode</span></a>
            </li>
            </ul>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="fas fa-light fa-user-plus"></i>
                    <span>Tambah User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-light fa-folder-plus"></i>
                    <span>Management</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Data User</a>
                         <a class="collapse-item" href="#">Stock Gudang</a>
                         <a class="collapse-item" href="#">Umpan Balik</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-sharp fa-light fa-cart-arrow-down"></i>
                    <span>Pembelian Stock</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                <i class="fas fa-sharp fa-light fa-handshake"></i>
                    <span>Penjualan / Penyewaan</span></a>
            </li>

            @elseif(Auth::user()->role == 'user')
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-light fa-house-user"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-sharp fa-light fa-cart-arrow-down"></i>
                    <span>Pembelian / Sewa</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-light fa-folder-plus"></i>
                    <span>Umpan Balik</span></a>
            </li>


            @elseif(Auth::user()->role == 'penyedia')

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-light fa-house-user"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-light fa-folder-plus"></i>
                    <span>Umpan Balik</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-sharp fa-light fa-cart-arrow-down"></i>
                    <span>Pembelian Stock</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                <i class="fas fa-sharp fa-light fa-handshake"></i>
                    <span>Penjualan / Penyewaan</span></a>
            </li>

            @endif --}}
        