<nav class="navbar navbar-vertical navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <!-- scrollbar removed-->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
          <li class="nav-item">
            <!-- parent pages-->
            <div class="nav-item-wrapper">
              <a class="nav-link dropdown-indicator label-1" href="#nv-home" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home">
                <div class="d-flex align-items-center">
                  <span class="nav-link-icon">
                    <span data-feather="pie-chart"></span>
                  </span>
                  <span class="nav-link-text">Dashboard</span>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Application</p>
            <hr class="navbar-vertical-line" /><!-- parent pages-->
            
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.application') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                  <span class="nav-link-icon">
                    <span data-feather="calendar"></span>
                  </span>
                  <span class="nav-link-text-wrapper">
                    <span class="nav-link-text">Application List</span>
                  </span>
                </div>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>