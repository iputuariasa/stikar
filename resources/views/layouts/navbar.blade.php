<nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #2E0249;" id="navbarNav">
    <div class="container">
      <a class="navbar-brand text-white d-flex align-items-center" href="#">
        <img src="/img/icon-stikar.png" alt="" width="35px" class="me-2 logo">
        <span class="title">SMK TI Bali Global Karangasem</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sekolah
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Sejarah Berdiri</a></li>
              <li><a class="dropdown-item" href="#">Tokoh Pendiri</a></li>
              <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
              <li><a class="dropdown-item" href="#">Jurusan</a></li>
              <li><a class="dropdown-item" href="#">Prestasi</a></li>
              <li><a class="dropdown-item" href="#">Fasilitas</a></li>
            </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="/PPSB">PPSB</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Kontak Kami</a>
          </li>
          @auth
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user-check"></i>
              </button>
              <ul class="dropdown-menu w-100">
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                      <button type="submit" class="dropdown-item">Keluar</button>
                  </form>
                </li>
              </ul>
            </div>
          @endauth
        </ul>
      </div>
    </div>
</nav>