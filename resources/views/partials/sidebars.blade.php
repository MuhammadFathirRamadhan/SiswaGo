<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 <!-- Sidebar - Brand -->
 <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="bi bi-car-front-fill"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SiswaGo</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="/dashboard">
        <i class="bi bi-house-door"></i>
        <span>Dashboard</span>
    </a>
</li>

<!-- Nav Item - Penjemputan Siswa -->
<li class="nav-item {{ Request::is('admin/pickups*') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/pickups">
        <i class="bi bi-person-check-fill"></i>
        <span>Penjemputan Siswa</span>
    </a>
</li>

<!-- Nav Item - Jadwal Penjemputan -->
<li class="nav-item {{ Request::is('admin/schedule*') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/schedule">
        <i class="bi bi-calendar-check"></i>
        <span>Jadwal Penjemputan</span>
    </a>
</li>

<!-- Nav Item - Data Siswa -->
<li class="nav-item {{ Request::is('admin/students*') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/students">
        <i class="bi bi-person-fill"></i>
        <span>Data Siswa</span>
    </a>
</li>

<!-- Nav Item - Data Kelas -->
<li class="nav-item {{ Request::is('admin/classes*') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/classes">
        <i class="bi bi-easel"></i>
        <span>Data Kelas</span>
    </a>
</li>

<!-- Logout -->
<li class="nav-item">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="nav-link btn btn-link">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </button>
    </form>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>