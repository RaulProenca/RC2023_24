<!DOCTYPE html>
<html dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy bootstrap dashboard admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, Flexy bootstrap 5 dashboard template" />
  <meta name="description" content="Flexy bootstrap dashboard is powerful and clean admin dashboard template" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Flexy Bootstrap Dashboard - by Wrappixel</title>
  <link rel="canonical" href="https://www.wrappixel.com/templates/flexy-bootstrap-admin-template/" />
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
  <!-- Custom CSS -->
  <link href="../dist/css/style.min.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="main-wrapper" style="
  background: url(../assets/images/big/auth-bg.jpg) no-repeat center
    center;
">
    <!-- ============================================================= -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================= -->
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
    <!-- ============================================================= -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================= -->
    <!-- ============================================================= -->
    <!-- Login box.scss -->
    <!-- ============================================================= -->
    <div class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
        " style="
          background: url(../assets/images/background/login-register.jpg)
            no-repeat center center;
          background-size: cover;
        ">
      <div class="auth-box p-4 bg-white rounded">
        <div id="loginform">
          <div class="logo">
            <h3 class="box-title mb-3">Sign In</h3>
          </div>
          <!-- Form -->
          <div class="row">
            <div class="col-12">
                <form class="form-horizontal mt-3 form-material" method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="form-group mb-3">
                  <div class="">


                    <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>
                <div class="form-group mb-4">
                  <div class="">

                    <input id="password" type="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                </div>
                <div class="form-group">
                  <div class="d-flex">
                    <div class="checkbox checkbox-info pt-0">

                        <input class="material-inputs chk-col-indigo" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                        <label for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="ms-auto">

                          @if (Route::has('password.request'))
                          <a class="d-flex align-items-center link font-weight-medium" href="{{ route('password.request') }}">
                            <i class="ri-lock-line me-1 fs-4"></i>
                            {{ __('Forgot Your Password?') }}
                          </a>
                          @endif
                    </div>
                  </div>
                </div>
                <div class="form-group text-center mt-4 mb-3">
                  <div class="col-xs-12">
                    <button class="
                          btn btn-primary
                          d-block
                          w-100
                          waves-effect waves-light
                        " type="submit">
                        {{ __('Login') }}
                    </button>

                  </div>
                </div>
                {{-- <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                    <div class="social mb-3">
                      <a href="javascript:void(0)" class="btn btn-facebook" data-bs-toggle="tooltip"
                        title="Login with Facebook">
                        <i aria-hidden="true" class="
                              ri-facebook-line
                              fs-6
                              d-flex
                              align-items-center
                            "></i>
                      </a>
                      <a href="javascript:void(0)" class="btn btn-googleplus" data-bs-toggle="tooltip"
                        title="Login with Google">
                        <i aria-hidden="true" class="
                              ri-google-line
                              fs-6
                              d-flex
                              align-items-center
                            "></i>
                      </a>
                    </div>
                  </div>
                </div> --}}
                <div class="form-group mb-0 mt-4">
                  <div class="col-sm-12 justify-content-center d-flex">
                    <p>
                      Don't have an account?
                      <a href="{{ route('register') }}" class="text-primary font-weight-medium ms-1">Sign Up</a>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div id="recoverform">
          <div class="logo">
            <h3 class="font-weight-medium mb-3">Recover Password</h3>
            <span class="text-muted">Enter your Email and instructions will be sent to you!</span>
          </div>
          <div class="row mt-3 form-material">
            <!-- Form -->
            <form class="col-12" action="index.html">
              <!-- email -->
              <div class="form-group row">
                <div class="col-12">
                  <input class="form-control" type="email" required="" placeholder="Username" />
                </div>
              </div>
              <!-- pwd -->
              <div class="row mt-3">
                <div class="col-12">
                  <button class="btn d-block w-100 btn-primary text-uppercase" type="submit" name="action">
                    Reset
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================= -->
    <!-- Login box.scss -->
    <!-- ============================================================= -->
  </div>
  <!-- ============================================================= -->
  <!-- All Required js -->
  <!-- ============================================================= -->
  <script src="../dist/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="../dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- ============================================================= -->
  <!-- This page plugin js -->
  <!-- ============================================================= -->

  <script>
    $(".preloader").fadeOut();
    // ==============================================================
    // Login and Recover Password
    // ==============================================================
    $("#to-recover").on("click", function () {
      $("#loginform").slideUp();
      $("#recoverform").fadeIn();
    });
  </script>
</body>

</html>
