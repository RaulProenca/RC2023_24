<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Space Bootstrap 5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="/assets/css/bootstrap-5.0.0-alpha.min.css">
    <link rel="stylesheet" href="/assets/css/LineIcons.2.0.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/tiny-slider.css">
    <link rel="stylesheet" href="/assets/css/glightbox.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- ========================= header start ========================= -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="/assets/img/logo/logo.svg" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="page-scroll active" href="javascript:void(0)">Início</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll dd-menu" href="about.html">Clube</a>
                                    <ul class="sub-menu">
                                        <li class="nav-item active"><a href="index.html">História</a></li>
                                        <li class="nav-item"><a href="index-2.html">Orgãos Sociais</a></li>
                                        <li class="nav-item"><a href="index-3.html">Regulamento Interno</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="javascript:void(0)">Agenda</a>

                                    <!--  <ul class="sub-menu">
                                        <li class="nav-item"><a href="service-1.html">Service Style 1</a></li>
                                        <li class="nav-item"><a href="service-2.html">Service Style 2</a></li>
                                    </ul> -->
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="javascript:void(0)">Galeria</a>

                                    <!-- <ul class="sub-menu">
                                        <li class="nav-item"><a href="about.html">About Us</a></li>
                                        <li class="nav-item"><a href="team.html">Team Members</a></li>
                                        <li class="nav-item"><a href="portfolio.html">Portfolio</a></li>
                                        <li class="nav-item"><a href="portfolio-single.html">Portfolio Single</a></li>
                                        <li class="nav-item"><a href="counter.html">Counter</a></li>
                                        <li class="nav-item"><a href="accordion.html">Accordion</a></li>
                                        <li class="nav-item"><a href="alerts.html">Alerts</a></li>
                                        <li class="nav-item"><a href="map.html">Map</a></li>
                                        <li class="nav-item"><a href="404.html">404</a></li>
                                    </ul> -->
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="javascript:void(0)">Notícias</a>

                                    <!-- <ul class="sub-menu">
                                        <li class="nav-item"><a href="blog-1.html">Blog Style 1</a></li>
                                        <li class="nav-item"><a href="blog-2.html">Blog Style 2</a></li>
                                        <li class="nav-item"><a href="blog-single.html">Blog Single</a></li>
                                    </ul> -->
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="contact.html">Contactos</a>
                                </li>
                            </ul>
                            <!--  <form action="#" class="search-form">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </form> -->
                            <a href="{{ route('login') }}" class="theme-btn">Login</a>
                        </div> <!-- navbar collapse -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->

    </header>
    <!-- ========================= header end ========================= -->

    @yield('content')

    <!-- ========================= footer start ========================= -->
    <footer class="footer pt-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                        <a href="index.html" class="logo mb-30"><img src="/assets/img/logo/logo.svg" alt="logo"></a>
                        <p class="mb-30 footer-desc">We Crafted an awesome desig library that is robust and intuitive to
                            use. No matter you're building a business presentation websit.</p>
                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".4s">
                        <h4>Quick Link</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">About Us</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Service</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".6s">
                        <h4>Service</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="javascript:void(0)">Marketing</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Branding</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Web Design</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Graphics Design</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInRight" data-wow-delay=".8s">
                        <h4>Contact</h4>
                        <ul class="footer-contact">
                            <li>
                                <p>+00983467367234</p>
                            </li>
                            <li>
                                <p>yourmail@gmail.com</p>
                            </li>
                            <li>
                                <p>United State Of America
                                    *12 Street House</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="footer-social-links">
                            <ul class="d-flex">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="wow fadeInUp" data-wow-delay=".3s">Template Designed by <a
                                href="https://GrayGrids.com" rel="nofollow">GrayGrids</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="/assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>
    <script src="/assets/js/contact-form.js"></script>
    <script src="/assets/js/count-up.min.js"></script>
    <script src="/assets/js/tiny-slider.js"></script>
    <script src="/assets/js/isotope.min.js"></script>
    <script src="/assets/js/glightbox.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/imagesloaded.min.js"></script>
    <script src="/assets/js/main.js"></script>

    <script>
        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });

        //========= testimonial
        tns({
            container: '.testimonial-active',
            items: 1,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: false,
            controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
        });

        //============== isotope masonry js with imagesloaded
        imagesLoaded('#container', function () {
            var elem = document.querySelector('.grid');
            var iso = new Isotope(elem, {
                // options
                itemSelector: '.grid-item',
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: '.grid-item'
                }
            });

            let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
            filterButtons.forEach(e =>
                e.addEventListener('click', () => {

                    let filterValue = event.target.getAttribute('data-filter');
                    iso.arrange({
                        filter: filterValue
                    });
                })
            );
        });
    </script>


</body>

</html>
