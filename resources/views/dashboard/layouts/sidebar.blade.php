<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="slack"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/transaction*') ? 'active' : '' }}" href="/dashboard/transaction">
              <span data-feather="dollar-sign"></span>
              Transaction
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/category*') ? 'active' : '' }}" href="/dashboard/category">
              <span data-feather="codesandbox"></span>
              Category
            </a>
          </li>
        </ul>
      </div>
    </nav>