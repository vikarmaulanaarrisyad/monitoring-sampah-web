<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('frontend') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('frontend') }}/assets/css/main.css" rel="stylesheet">
    @stack('css_vendor')
    {{--
    <!-- =======================================================
  * Template Name: Ninestars
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Updated: May 10 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->  --}}
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">SIMPSIBOT</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li>
                        <a href="javascript:void(0);" onclick="goToHome(this)" data-url="{{ url('/') }}">Home</a>
                    <li>
                    <li>
                        <a href="javascript:void(0);" onclick="goToAbout(this)" data-url="{{ url('/') }}">About</a>
                    <li>
                    <li>
                        <a href="javascript:void(0);" onclick="goToFeature(this)"
                            data-url="{{ url('/') }}">Feature</a>
                    <li>
                        <a href="javascript:void(0);" onclick="goToFaq(this)" data-url="{{ url('/') }}">Faq</a>
                    </li>

                    <li><a href="{{ route('landingpage.monitoring') }}">Grafik Monitoring</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{ route('login') }}">Login </a>

        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer id="footer" class="footer position-relative">
        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Moch Fadel Al Rafi</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                Designed by Moch Fadel Al Rafi
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>


    @stack('scripts')

    <script>
        function goToHome(element) {
            const homeUrl = element.getAttribute('data-url');
            const currentUrl = window.location.href;

            if (currentUrl === homeUrl || currentUrl === homeUrl + '/') {
                const homeElement = document.getElementById('hero');
                if (homeElement) {
                    homeElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            } else {
                window.location.href = homeUrl + '#hero';
            }
        }

        function goToAbout(element) {
            const homeUrl = element.getAttribute('data-url');
            const currentUrl = window.location.href;

            if (currentUrl === homeUrl || currentUrl === homeUrl + '/') {
                const aboutElement = document.getElementById('about');
                if (aboutElement) {
                    aboutElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            } else {
                window.location.href = homeUrl + '#about';
            }
        }

        function goToFaq(element) {
            const homeUrl = element.getAttribute('data-url');
            const currentUrl = window.location.href;

            if (currentUrl === homeUrl || currentUrl === homeUrl + '/') {
                const faqElement = document.getElementById('faq');
                if (faqElement) {
                    faqElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            } else {
                window.location.href = homeUrl + '#faq';
            }
        }

        function goToFeature(element) {
            const homeUrl = element.getAttribute('data-url');
            const currentUrl = window.location.href;

            if (currentUrl === homeUrl || currentUrl === homeUrl + '/') {
                const featureElement = document.getElementById('feature');
                if (featureElement) {
                    featureElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            } else {
                window.location.href = homeUrl + '#feature';
            }
        }
    </script>

</body>

</html>
