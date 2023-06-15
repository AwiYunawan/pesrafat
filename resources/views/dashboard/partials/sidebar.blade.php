<div class=" col-md-2 col-6 p-0 sidebar">
    <ul class="nav flex-column ">
      @if (auth()->user()->role_id <= 2)
        <li class="nav-item {{Request::is('dashboard/admin') ? 'sidebar-active' : ''}}">
          <a class="nav-link" href="/dashboard/admin">Daftar Petugas</a>
        </li>
        <li class="nav-item {{Request::is('dashboard/users') ? 'sidebar-active' : ''}}">
          <a class="nav-link " href="/dashboard/users">Daftar Peminjam</a>
        </li>
        <li class="nav-item {{Request::is('dashboard/temporaryRents') ? 'sidebar-active'  : ''}}">
          <a class="nav-link " href="/dashboard/temporaryRents">Konfirmasi Peminjaman</a>
        </li>
      @endif
      @if (auth()->user()->role_id <= 4)
        <li class="nav-item {{Request::is('dashboard/rents') ? 'sidebar-active' : ''}}">
          <a class="nav-link " href="/dashboard/rents">Daftar Peminjaman</a>
        </li>
      @endif
      <li class="nav-item {{Request::is('dashboard/rooms') ? 'sidebar-active' : ''}}">
        <a class="nav-link" href="/dashboard/rooms">Daftar Alat Ruangan</a>
      </li>
    </ul>
</div>