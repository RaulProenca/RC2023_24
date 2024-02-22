<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, Flexy bootstrap 5 dashboard template" />
    <meta name="description"
        content="Flexy is powerful and clean admin dashboard template, inpired from Bootstrap Design" />
    <meta name="robots" content="noindex,nofollow" />
    <title>CPR A-do-Barbas</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/flexy-bootstrap-admin-template/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/logo.jpg" />

    <!-- Custom CSS -->
    <link href="/dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="/dist/libs/select2/dist/css/select2.min.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
                stroke="#fec80e" stroke-width="2"></path>
            <path
                d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
                stroke="#fec80e" stroke-width="2"></path>
            <path id="teabag" fill="#fec80e" fill-rule="evenodd" clip-rule="evenodd"
                d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z">
            </path>
            <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" stroke="#fec80e"></path>
            <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#fec80e" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ri-close-line ri-menu-2-line fs-6"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/assets/images/logo.jpg" width="45" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="/assets/images/logo.jpg" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <!-- <img src="/assets/images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                            <h6 style="font-weight: bolder; padding-top: 15px;">CPR A-DO-BARBAS</h6>
                            <!-- Light Logo text -->
                            <img src="/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ri-more-line fs-6"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item">
                            <a class="nav-link sidebartoggler d-none d-md-block" href="javascript:void(0)"><i
                                    data-feather="menu"></i></a>
                        </li>
                        <!-- search -->
                        <li class="nav-item search-box">
                            <a class="nav-link" href="javascript:void(0)">
                                <i data-feather="search"></i>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control border-0" placeholder="Search &amp; enter" />
                                <a class="srh-btn"><i data-feather="x-circle" class="feather-sm text-muted"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">

                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown profile-dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="/assets/images/users/user.jpg" alt="user" width="30"
                                    class="profile-pic rounded-circle" />
                                <div class="d-none d-md-flex">
                                    <span class="ms-2">Olá,
                                            <span class="text-dark fw-bold">
                                                @auth()
                                                    {{ Auth::user()->name }}
                                                @endauth
                                            </span>
                                        </span>
                                    <span>
                                        <i data-feather="chevron-down" class="feather-sm"></i>
                                    </span>
                                </div>
                            </a>
                            <div class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    dropdown-menu-animate-up
                  ">
                                <ul class="list-style-none">
                                    <li class="p-30 pb-2">
                                        <div class="rounded-top d-flex align-items-center">
                                            <h3 class="card-title mb-0">Perfil Utilizador</h3>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="link py-0">
                                                    <i data-feather="x-circle"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="
                          d-flex
                          align-items-center
                          mt-4
                          pt-3
                          pb-4
                          border-bottom
                        ">
                                            <img src="/assets/images/users/user.jpg" alt="user" width="90"
                                                class="rounded-circle" />
                                            <div class="ms-4">
                                                <h4 class="mb-0">
                                                    @auth
                                                        {{ Auth::user()->name }}
                                                    @endauth
                                                </h4>
                                                <span class="text-muted">Administrador</span>
                                                <p class="text-muted mb-0 mt-1">
                                                    <i data-feather="mail" class="feather-sm me-1"></i>
                                                    @auth
                                                        {{ Auth::user()->email }}
                                                    @endauth
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="p-30 pt-0">
                                        <div class="message-center message-body position-relative"
                                            style="height: 150px">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="
                            message-item
                            px-2
                            d-flex
                            align-items-center
                            border-bottom
                            py-3
                          ">
                                                <span class="btn btn-light-info btn-rounded-lg text-info">
                                                    <i data-feather="user" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3 ms-1">
                                                    <h5 class="
                                message-title
                                mb-0
                                mt-1
                                fs-4
                                font-weight-medium
                              ">
                                                        Perfil
                                                    </h5>
                                                    <span class="
                                fs-3
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                                text-muted
                              ">Editar</span>
                                                </div>
                                            </a>


                                        <div class="mt-4">
                                            <a class="btn btn-info text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================= -->
        <!-- End Topbar header -->
        <!-- ============================================================= -->
        <!-- ============================================================= -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================= -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li class="nav-small-cap">
                            <!-- <i class="nav-small-line"></i> -->
                            <br>
                            <span class="hide-menu"></span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="users"></i><span
                                    class="hide-menu">Atletas</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('atleta.create') }}" class="sidebar-link"><i class="ri-user-add-line"></i><span
                                            class="hide-menu">
                                            Novo Atleta</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="listaratletas.html" class="sidebar-link"><i class="ri-list-check"></i><span
                                            class="hide-menu">Listar
                                            Atletas</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="calendar"></i><span
                                    class="hide-menu">Provas</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="addprovas.html" class="sidebar-link"><i class="ri-run-fill"></i><span
                                            class="hide-menu">
                                            Inserir Prova</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="listarprovas.html" class="sidebar-link"><i class="ri-list-check"></i><span
                                            class="hide-menu">Listar
                                            Provas</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="slack"></i><span
                                    class="hide-menu">Inscrições</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="inscrever.html" class="sidebar-link"><i class="ri-t-shirt-2-line"></i><span
                                            class="hide-menu">
                                            Inscrever</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="consultar.html" class="sidebar-link"><i class="ri-list-check"></i><span
                                            class="hide-menu">Consultar</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="award"></i><span
                                    class="hide-menu">Resultados</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="addresultados.html" class="sidebar-link"><i
                                            class="ri-trophy-line"></i><span class="hide-menu">
                                            Adicionar</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="listarresultados.html" class="sidebar-link"><i
                                            class="ri-list-check"></i><span class="hide-menu">Listar
                                            Resultados</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer px-3 py-4">
                <div class="bg-light-info mb-0 mt-3 w-100">
                    <div class="sidebar-footer-text">
                    </div>
                </div>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            @yield('content')
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">2023© All Rights Reserved by Wrappixel</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <aside class="nav-customizer" id="shopping-cart">
        <div class="nav-customizer-body">
            <div class="rounded-top d-flex p-30 bg-white pb-3 align-items-center">
                <h3 class="card-title mb-0">Shopping Cart</h3>
                <div class="ms-auto">
                    <a href="javascript:void(0)" class="nav-sidebar text-muted py-0">
                        <i data-feather="x-circle"></i>
                    </a>
                </div>
            </div>
            <!-- items -->
            <div class="p-30 pt-0 bg-white scrollable position-relative" style="height: calc(100vh - 245px)">
                <ul class="list-style-none">
                    <li class="py-4 border-bottom">
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="/assets/images/product/s-prd1.jpg" class="btn-rounded-lg" alt="product" />
                            </div>
                            <div class="ms-3 ps-1">
                                <h5 class="mb-0">Supreme toys cooker</h5>
                                <span class="text-muted fs-3">Kitchenware Item</span>
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">$250</h5>
                                    <!-- widget -->
                                    <div class="shopping-widget ms-2">
                                        <div class="form-group mb-0 pt-1">
                                            <input type="text" value="1" name="qtyspin1" id="qtyspin1"
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          " />
                                        </div>
                                        <div class="decrease-btn">
                                            <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          ">
                                                <i data-feather="minus" class="feather-xs"></i>
                                            </button>
                                        </div>
                                        <div class="increase-btn">
                                            <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          ">
                                                <i data-feather="plus" class="feather-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="py-4 border-bottom">
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="/assets/images/product/s-prd2.jpg" class="btn-rounded-lg" alt="product" />
                            </div>
                            <div class="ms-3 ps-1">
                                <h5 class="mb-0">Supreme toys cooker</h5>
                                <span class="text-muted fs-3">Kitchenware Item</span>
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">$250</h5>
                                    <!-- widget -->
                                    <div class="shopping-widget ms-2">
                                        <div class="form-group mb-0 pt-1">
                                            <input type="text" value="1" name="qtyspin2" id="qtyspin2"
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          " />
                                        </div>
                                        <div class="decrease-btn">
                                            <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          ">
                                                <i data-feather="minus" class="feather-xs"></i>
                                            </button>
                                        </div>
                                        <div class="increase-btn">
                                            <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          ">
                                                <i data-feather="plus" class="feather-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="py-4 border-bottom">
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="/assets/images/product/s-prd3.jpg" class="btn-rounded-lg" alt="product" />
                            </div>
                            <div class="ms-3 ps-1">
                                <h5 class="mb-0">Supreme toys cooker</h5>
                                <span class="text-muted fs-3">Kitchenware Item</span>
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">$250</h5>
                                    <!-- widget -->
                                    <div class="shopping-widget ms-2">
                                        <div class="form-group mb-0 pt-1">
                                            <input type="text" value="1" name="qtyspin3" id="qtyspin3"
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          " />
                                        </div>
                                        <div class="decrease-btn">
                                            <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          ">
                                                <i data-feather="minus" class="feather-xs"></i>
                                            </button>
                                        </div>
                                        <div class="increase-btn">
                                            <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          ">
                                                <i data-feather="plus" class="feather-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="py-4 border-bottom">
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="/assets/images/product/s-prd4.jpg" class="btn-rounded-lg" alt="product" />
                            </div>
                            <div class="ms-3 ps-1">
                                <h5 class="mb-0">Supreme toys cooker</h5>
                                <span class="text-muted fs-3">Kitchenware Item</span>
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">$250</h5>
                                    <!-- widget -->
                                    <div class="shopping-widget ms-2">
                                        <div class="form-group mb-0 pt-1">
                                            <input type="text" value="1" name="qtyspin" id="qtyspin"
                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                class="
                            form-control
                            text-center
                            border-0
                            bg-transparent
                            counter
                            fs-4
                            text-dark
                            font-weight-medium
                          " />
                                        </div>
                                        <div class="decrease-btn">
                                            <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            decrease
                            waves-effect waves-light
                          ">
                                                <i data-feather="minus" class="feather-xs"></i>
                                            </button>
                                        </div>
                                        <div class="increase-btn">
                                            <button type="button" class="
                            btn btn-sm btn-light-success
                            text-success
                            increase
                            waves-effect waves-light
                          ">
                                                <i data-feather="plus" class="feather-xs"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="p-30 bg-white">
                <div class="d-flex align-items-center py-2">
                    <span class="text-muted fs-3">Sub Total</span>
                    <div class="ms-auto">
                        <span class="text-dark font-weight-medium fs-3">$2530</span>
                    </div>
                </div>
                <div class="d-flex align-items-center py-2">
                    <span class="text-muted fs-3">Total</span>
                    <div class="ms-auto">
                        <span class="text-dark font-weight-medium fs-3">$6830</span>
                    </div>
                </div>
                <a class="btn btn-info text-white w-100 d-block" href="javascript:void(0);">
                    Place order
                </a>
            </div>
        </div>
    </aside>
    <!-- ============================================================= -->
    <!-- customizer Panel -->
    <!-- ============================================================= -->
    <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin ri-settings-3-line fs-7"></i></a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true"><i class="ri-tools-fill fs-6"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#chat" role="tab"
                        aria-controls="chat" aria-selected="false"><i class="ri-message-3-line fs-6"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab"
                        aria-controls="pills-contact" aria-selected="false"><i class="ri-timer-line fs-6"></i></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="p-3 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
                        <div class="form-check mt-3">
                            <input type="checkbox" name="theme-view" class="form-check-input" id="theme-view" />
                            <label class="form-check-label" for="theme-view">
                                <span>Dark Theme</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="sidebartoggler form-check-input" name="collapssidebar"
                                id="collapssidebar" />
                            <label class="form-check-label" for="collapssidebar">
                                <span>Collapse Sidebar</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="sidebar-position" class="form-check-input"
                                id="sidebar-position" />
                            <label class="form-check-label" for="sidebar-position">
                                <span>Fixed Sidebar</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="header-position" class="form-check-input"
                                id="header-position" />
                            <label class="form-check-label" for="header-position">
                                <span>Fixed Header</span>
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="boxed-layout" class="form-check-input" id="boxed-layout" />
                            <label class="form-check-label" for="boxed-layout">
                                <span>Boxed Layout</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-logobg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-navbarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block"
                                    data-sidebarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none mt-3">
                        <li>
                            <div class="message-center chat-scroll position-relative">
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_1" data-user-id="1">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="/assets/images/users/1.jpg" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle online"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_2" data-user-id="2">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="/assets/images/users/2.jpg" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle busy"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I've sung a song! See you at</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_3" data-user-id="3">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="/assets/images/users/3.jpg" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle away"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I am a singer!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_4" data-user-id="4">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="/assets/images/users/4.jpg" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_5" data-user-id="5">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="/assets/images/users/5.jpg" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_6" data-user-id="6">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="/assets/images/users/6.jpg" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_7" data-user-id="7">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="/assets/images/users/7.jpg" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_8" data-user-id="8">
                                    <span class="user-img position-relative d-inline-block">
                                        <img src="/assets/images/users/8.jpg" alt="user"
                                            class="rounded-circle w-100" />
                                        <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-3">
                                        <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my admin!</span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h6 class="mt-3 mb-3">Activity Timeline</h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-light-success text-success">
                                <i data-feather="user" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Meeting today <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-light-info text-info">
                                <i data-feather="camera" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="/assets/images/users/2.jpg" />
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="/assets/images/users/1.jpg" />
                            </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-light-primary text-primary">
                                <i data-feather="user" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Meeting today <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-light-info text-info">
                                <i data-feather="send" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="/assets/images/users/4.jpg" />
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="/assets/images/users/6.jpg" />
                            </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/dist/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="/dist/js/app.min.js"></script>
    <script src="/dist/js/app.init.js"></script>
    <script src="/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/dist/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.js"></script>
    <script src="/dist/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/dist/js/feather.min.js"></script>
    <script src="/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <!-- Chart JS -->
    <script src="/dist/js/pages/dashboards/dashboard1.js"></script>

    <script src="/dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>

    <script src="/dist/js/pages/datatable/datatable-basic.init.js"></script>

    <script src="/dist/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="/dist/libs/select2/dist/js/select2.min.js"></script>
    <script src="/dist/js/pages/forms/select2/select2.init.js"></script>

    <script>
        $(document).ready(function () {
            $('#dataatual').text(new Date().toLocaleDateString('pt-PT', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            }));

            $('#btnReset').click(function () {
                $('.select2').val('OP').trigger('change');
            });
        });



    </script>
</body>

</html>
