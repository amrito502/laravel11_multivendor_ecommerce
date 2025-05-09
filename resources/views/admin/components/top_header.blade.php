<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button" style="font-size: 27px;margin-top: -12px;">
            <i class="bi bi-list"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown" style="margin-top: -6px;">
          <a class="nav-link" data-bs-toggle="dropdown" href="#" style="font-size: 25px;">
            <i class="bi bi-chat-text" style="color: #9718D3;"></i>
            <span class="navbar-badge badge text-bg-danger">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <a href="#" class="dropdown-item">
              <!--begin::Message-->
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img
                    src="{{ asset('assets/img/user1-128x128.jpg') }}"
                    alt="User Avatar"
                    class="img-size-50 rounded-circle me-3"
                  />
                </div>
                <div class="flex-grow-1">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-end fs-7 text-danger"
                      ><i class="bi bi-star-fill"></i
                    ></span>
                  </h3>
                  <p class="fs-7">Call me whenever you can...</p>
                  <p class="fs-7 text-secondary">
                    <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!--end::Message-->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!--begin::Message-->
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img
                    src="{{ asset('assets/img/user1-128x128.jpg') }}"
                    alt="User Avatar"
                    class="img-size-50 rounded-circle me-3"
                  />
                </div>
                <div class="flex-grow-1">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-end fs-7 text-secondary">
                      <i class="bi bi-star-fill"></i>
                    </span>
                  </h3>
                  <p class="fs-7">I got your message bro</p>
                  <p class="fs-7 text-secondary">
                    <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!--end::Message-->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!--begin::Message-->
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img
                    src="{{ asset('assets/img/user1-128x128.jpg') }}"
                    alt="User Avatar"
                    class="img-size-50 rounded-circle me-3"
                  />
                </div>
                <div class="flex-grow-1">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-end fs-7 text-warning">
                      <i class="bi bi-star-fill"></i>
                    </span>
                  </h3>
                  <p class="fs-7">The subject goes here</p>
                  <p class="fs-7 text-secondary">
                    <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!--end::Message-->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <li class="nav-item dropdown" style="margin-top: -6px;">
          <a class="nav-link" data-bs-toggle="dropdown" href="#" style="font-size: 25px;">
            <i class="bi bi-bell-fill" style="color: #1507d4;"></i>
            <span class="navbar-badge badge text-bg-danger">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="bi bi-envelope me-2"></i> 4 new messages
              <span class="float-end text-secondary fs-7">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="bi bi-people-fill me-2"></i> 8 friend requests
              <span class="float-end text-secondary fs-7">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
              <span class="float-end text-secondary fs-7">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
          </div>
        </li>
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <div class="nav_profile">
                <div class="nav_left_profile">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                </div>
                <div class="nav_right_profile">
                    <h1>Amrito Bosu</h1>
                    <p>amritobosu98@gmail.com</p>
                </div>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-sm dropdown_card_cus dropdown-menu-end">
           <li><a href=""><i class="fa-solid fa-user"></i> Profile</a></li>
           <li><a href=""><i class="fa-solid fa-gear"></i> Settings</a></li>
           <li style="margin-left: 9px;">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
            </form>

        </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
