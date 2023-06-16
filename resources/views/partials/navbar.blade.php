<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" >
    <a href="/">
      <img
        src="../assets/img/gema.png"
        alt=""
        srcset=""
        class="navbar-brand d-flex align-items-center px-4 px-lg-5"
      />
    </a>
    <button
      type="button"
      class="navbar-toggler me-4"
      data-bs-toggle="collapse"
      data-bs-target="#navbarCollapse"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="/" class="nav-item nav-link {{ $title === 'Home' ? 'active' : ''}}">Home</a>
        <a href="/about" class="nav-item nav-link {{ $title === 'About' ? 'active' : ''}}">About Us</a>
        <a href="/programs" class="nav-item nav-link {{ $title === 'Programs' ? 'active' : ''}}">Programs</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Events</a>
            <div class="dropdown-menu fade-down m-0">
                <a href="/lks" class="dropdown-item">LKS Jabar Daring 2023</a>
                <a href="https://crustfast.github.io./" class="dropdown-item">PJJ</a>
            </div>
        </div>
        <a href="/contact" class="nav-item nav-link {{ $title === 'Contact' ? 'active' : ''}}">Contact</a>
      </div>
      <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a> -->
    </div>
  </nav>
