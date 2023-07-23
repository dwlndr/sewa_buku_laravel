<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sewa Buku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if (Auth::check() && Auth::user())
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('buku.index') }}">Data Buku</a>
        </li>
        @endif
        @if (Auth::check() && Auth::user()->level == 'admin')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('data_peminjam.index') }}">Data Peminjaman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('peminjaman.index') }}">Transaksi Peminjaman</a>
        </li>
        <li class="nav-link">
          <a href="{{ route('user.index') }}" class="nav-link">User</a>
        </li>
        @endif
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="btn btn-danger btn-sm" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>
      <div>
        @if (Auth::check())
            <b>{{ 'Hai,'. Auth::user()->name }}</b>
        @else
        @endif
      </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>