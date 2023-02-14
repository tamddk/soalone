<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Staf</title>

    <link rel="icon" href="{{ asset('assets/icon/cropped-Site-Icon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/icon/cropped-Site-Icon-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/icon/cropped-Site-Icon-180x180.png') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

</head>

<body>
    <!--

         SODIK PROJECT

* More Information
* Instagram : @tamddk
* Whatsapp : wa.me/62895325657488
-->
    <section class="sodik">
        <div class="nav-fixed">
            <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white">
                <button id="sidebarToggle" class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0">
                    <i class="oi" data-glyph="menu"></i>
                </button>
                <a class="navbar-brand pe-3 ps-4 ps-lg-2">Transindodata</a>
                <ul class="navbar-nav align-items-center ms-auto me-lg-4">
                    <li class="nav-item no-caret me-3 me-lg-0 dropdown-user dropdown">
                        <a id="navbarDropdownUserImage" class="dropdown-toggle btn btn-icon btn-transparent-dark" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/icon/cropped-Site-Icon-180x180.png') }}" class="img-fluid">
                        </a>
                        <div class="dropdown-menu border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                            <h6 class="dropdown-header d-flex align-items-center">
                                <img class="dropdown-user-img" src="{{ asset('assets/icon/cropped-Site-Icon-180x180.png') }}">
                                <div class="dropdown-user-details">
                                    <div class="dropdown-user-details-name">{{Auth::user()->name}}</div>
                                    <div class="dropdown-user-details-email">{{Auth::user()->email}}</div>
                                </div>
                            </h6>
                            <div class="dropdown-divider"></div>
                            <a href="{{url('user/dashboard/logout')}}" class="dropdown-item">
                                <div class="dropdown-item-icon">
                                    <i class="oi" data-glyph="account-logout"></i>
                                </div> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav id="sidenavAccordion" class="sidenav shadow-right sidenav-light">
                        <div class="sidenav-menu">
                            <div class="nav">
                                <div class="sidenav-menu-heading">Order</div>
                                <a href="{{url('user/dashboard/order')}}" class="nav-link collapsed">
                                    <div class="nav-link-icon">
                                        <i class="oi" data-glyph="list-rich"></i>
                                    </div>booking
                                </a>
                                <nav class="sidenav-menu-nested nav collapsed"></nav>
                                <div class="sidenav-menu-heading">Ticket</div>
                                <a href="{{url('user/dashboard/checking')}}" class="nav-link collapsed">
                                    <div class="nav-link-icon">
                                        <i class="oi" data-glyph="list-rich"></i>
                                    </div>Checking
                                </a>
                                <nav class="sidenav-menu-nested nav collapsed"></nav>
                                <div class="sidenav-menu-heading">Report</div>
                                <a href="{{url('user/dashboard/report')}}" class="nav-link collapsed">
                                    <div class="nav-link-icon">
                                        <i class="oi" data-glyph="list-rich"></i>
                                    </div>Viewer
                                </a>
                                <nav class="sidenav-menu-nested nav collapsed"></nav>
                            </div>
                        </div>
                        <div class="sidenav-footer">
                            <div class="sidenav-footer-content">
                                <div class="sidenav-footer-subtitle">Logged in as:</div>
                                <div class="sidenav-footer-title">{{Auth::user()->role}}</div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div id="layoutSidenav_content" class="scrollable">
                    <main>
                        <div class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                            <div class="container-xl px-4">
                                <div class="page-header-content pt-4">
                                    <div class="row gx-4 align-items-center justify-content-between">
                                        <div class="col-auto mt-4">
                                            <h1 class="page-header-title">
                                                <div class="page-header-icon">
                                                    <i class="oi" data-glyph="dashboard"></i>
                                                </div>
                                                <span>Welcome, Sodik Launcher v1.0.2.3.0.1</span>
                                            </h1>
                                            <div class="page-header-subtitle"> “Allah tidak membebani seseorang melainkan sesuai dengan kesanggupannya.” Q.S. Al-Baqarah (2:286)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-xl px-4 mt-n10">
                            <div class="row gx-4">
                                <div class="col-xxl-4 col-xl-12 mb-4">
                                    <div class="card mb-4 h-100">
                                        <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                                            <div class="sbp-preview">
                                                <div class="sbp-preview-content">
                                                    <form method="POST" action="/user/dashboard/checking/data" class="ng-untouched ng-pristine ng-valid">
                                                        {{ csrf_field() }}
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1">Checking Order</label>
                                                            <input id="exampleFormControlInput1" type="text" placeholder="Checking Order ID" class="form-control" name="sodik1" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-lg" style=" width: 100%; ">Search</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
