<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="MaterialPro is powerful and clean admin dashboard template, inpired from Google's Material Design"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Wiser - @yield("title")</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/materialpro/"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{ asset("assets/images/wl3.png") }}"
    />
    <link href="{{ asset("dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css") }}" rel="stylesheet">
    <link href="{{ asset("dist/css/style.min.css") }}" rel="stylesheet" />
  </head>
  <body>
    <div class="preloader">
      <svg
        class="tea lds-ripple"
        width="37"
        height="48"
        viewbox="0 0 37 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
          stroke="#1e88e5"
          stroke-width="2"
        ></path>
        <path
          d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
          stroke="#1e88e5"
          stroke-width="2"
        ></path>
        <path
          id="teabag"
          fill="#1e88e5"
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
        ></path>
        <path
          id="steamL"
          d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke="#1e88e5"
        ></path>
        <path
          id="steamR"
          d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
          stroke="#1e88e5"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
      </svg>
    </div>

    <div id="main-wrapper">

      <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header">
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close d-none"></i
            ></a>
            <a class="navbar-brand" href="{{ route("dashboard") }}">
              <b class="logo-icon">
                <img
                  src="{{ asset("assets/images/wl2.png") }}"
                  alt="homepage"
                  class="dark-logo"
                />
                <img
                  src="{{ asset("assets/images/wl1.png") }}"
                  alt="homepage"
                  width="50"
                  class="light-logo"
                />
              </b>
              {{-- <span class="logo-text">
                <img
                  src="../../assets/images/logo-text.png"
                  alt="homepage"
                  class="dark-logo"
                />
                <img
                  src="../../assets/images/logo-light-text.png"
                  class="light-logo"
                  alt="homepage"
                />
              </span> --}}
            </a>
            <a
              class="topbartoggler d-block d-md-none waves-effect waves-light"
              href="javascript:void(0)"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              ><i class="ti-more"></i
            ></a>
          </div>
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
            </ul>
            <ul class="navbar-nav">
                @if (!auth()->user()->is_admin)
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle waves-effect waves-dark"
                        href="{{  route("disposal.index") }}"
                    >
                        <img
                        src="{{ asset("assets/images/transaction.png") }}"
                        alt="transaction"
                        width="30"
                        class="profile-pic rounded-circle"
                        />
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle waves-effect waves-dark"
                        href="{{ route('dashboard') }}"

                    >
                        <img
                        src="{{ asset("assets/images/setting.png") }}"
                        alt="setting"
                        width="30"
                        class="profile-pic rounded-circle"
                        />
                    </a>
                  </li>
                @endif


              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    src="{{ asset("assets/images/users/1.jpg") }}"
                    alt="user"
                    width="30"
                    class="profile-pic rounded-circle"
                  />
                </a>
                <div
                  class="
                    dropdown-menu dropdown-menu-end
                    user-dd
                    animated
                    flipInY
                  "
                >
                  <div
                    class="
                      d-flex
                      no-block
                      align-items-center
                      p-3
                      text-white
                      mb-2
                    "
                    style="background-color:#29AB43;"
                  >
                    <div class="">
                      <img
                        src="../../assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle"
                        width="60"
                      />
                    </div>
                    <div class="ms-2">
                      <h4 class="mb-0 text-white">{{ auth()->user()->fullname }}</h4>
                      <p class="mb-0">{{ auth()->user()->username }}</p>
                    </div>
                  </div>
                  <a class="dropdown-item" href="javascript:void(0);" onclick="logout()"
                    ><i
                      data-feather="log-out"
                      class="feather-sm text-danger me-1 ms-1"
                    ></i>
                    Logout</a
                  >
                </div>
              </li>


            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <div class="row page-titles">
          <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Main</h3>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item active">
                <a href="javascript:void(0)"></a>
              </li>
              <li class="breadcrumb-item active">Welcome</li>
            </ol>
          </div>
        </div>
        <div class="container-fluid">
            @yield('content')

        </div>
      </div>
    </div>
    <div class="chat-windows"></div>
    <form method="POST" action="{{ route("logout") }}" id="logoutForm">
        @csrf
    </form>
    <script src="{{ asset("dist/libs/jquery/dist/jquery.min.js") }}"></script>
    <script src="{{ asset("dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("dist/js/app.min.js") }}"></script>
    <script src="{{ asset("dist/js/app.init.js") }}"></script>
    <script src="{{ asset("dist/js/app-style-switcher.js") }}"></script>
    <script src="{{ asset("dist/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.js")  }}"></script>
    <script src="{{ asset("dist/libs/jquery-sparkline/jquery.sparkline.min.js") }}"></script>
    <script src="{{ asset("dist/js/waves.js") }}"></script>
    <script src="{{ asset("dist/js/sidebarmenu.js") }}"></script>
    <script src="{{ asset("dist/js/feather.min.js") }}"></script>
    <script src="{{ asset("dist/js/custom.min.js") }}"></script>
    {{-- <script src="{{ asset("dist/libs/apexcharts/dist/apexcharts.min.js") }}"></script> --}}
    {{-- <script src="{{ asset("dist/js/pages/dashboards/dashboard1.js") }}"></script> --}}
    <script src="{{ asset("dist/libs/datatables.net/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("dist/js/pages/datatable/datatable-basic.init.js") }}"></script>
    <script>
        function logout() {
            document.getElementById("logoutForm").submit();
        }
    </script>
  </body>
</html>
