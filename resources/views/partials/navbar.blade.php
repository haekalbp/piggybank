<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top py-1">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="img/brand.png" alt="logo piggy bank" height="30"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto py-2">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }} mx-4" href="/">Home</a>
          </li>

          @auth
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hola, {{ auth()->user()->name }}
          </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard">
                My Dashboard</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                  <i class="bi bi-box-arrow-right"></i> Log Out
                  </button>
                </form>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Login") ? 'active' : '' }} mx-4" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Register") ? 'active' : '' }} mx-4" href="/register">Register</a>
          </li>
          @endauth

        </ul>
      </div>
    </div>
</nav>