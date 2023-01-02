@php
$normal_gallary_notice = App\Models\Navigation::query()
    ->where('nav_category', 'Main')
    ->where('page_type', 'Normal')

    ->orderBy('position', 'ASC')
    ->get();

$menus = App\Models\Navigation::query()
    ->where('nav_category', 'Main')
    ->where('page_type', '!=', 'Job')
    ->where('page_type', '!=', 'Notice')
    ->where('parent_page_id', 0)
    ->where('page_status', '1')
    ->orderBy('position', 'ASC')
    ->get();
$global_setting = App\Models\GlobalSetting::all()->first();
if (isset($normal)) {
    $seo = $normal;
} elseif (isset($job)) {
    $seo = $job;
}

@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#061948">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#061948">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#061948">


<!-----SEO--------->

<title>{{ $seo->page_titile ?? $global_setting->page_title }}</title>
<meta name="title" content="{{ $seo->page_titile ?? $global_setting->page_title }}">
<meta name="description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
<meta name="keywords" content="{{ $seo->page_keyword ?? $global_setting->page_keyword }}">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="1 days">
<meta name="author" content="{{ $global_setting->site_name ?? '' }}">


<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $global_setting->website_full_address ?? '' }}">
<meta property="og:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
<meta property="og:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
<meta property="og:image" content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ $global_setting->website_full_address ?? '' }}">
<meta property="twitter:title" content="{{ $seo->page_title ?? $global_setting->page_title }}">
<meta property="twitter:description" content="{{ $seo->page_description ?? $global_setting->page_description }}">
<meta property="twitter:image"
    content="{{ $seo->banner_image ?? '/uploads/icons/' . $global_setting->site_logo }}">

<!-----END SEO------->

    <title>Home</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="website/images/logo/NSG LOGO.JPG">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="website/css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="website/css/responsive.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="main-page-wrapper">
        <header class="header-two">
            <div class="top-header">
                <div class="container">
                    <div class="compantLogoImg">
                        <div class="logoImg">
                            <a href="/">
                                <img src="website/images/logo/logo-1.png" alt="companyLogo">
                            </a>
                        </div>
                        <div class="logoImg">
                            <a href="/">
                                <img src="website/images/logo/NSG LOGO.JPG " alt="companyLogo">
                            </a>
                        </div>

                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.top-header -->
            <div class="theme-menu-wrapper">
                <div class="container">
                    <div class="bg-wrapper clearfix">
                        <!-- ============== Menu Warpper ================ -->
                        <div class="menu-wrapper float-left">
                            <nav id="mega-menu-holder" class="clearfix">
                                <ul class="clearfix">
                                    <li class="active"><a href="/">Home</a>

                                    </li>
                                    <li><a href="#">About</a>
                                        <ul class="dropdown">
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="who-we-are.html">Who We Are?</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">Our Group</a>
                                        <ul class="dropdown">
                                            <li><a href="prokleen-services-llc.html">Prokleen Services LLC</a></li>
                                            <li><a href="national-serucity-guard.html">National Security GUards LLC</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li><a href="service.html">Services</a>

                                    </li>
                                    <li><a target="_blank" href="https://gator4108.hostgator.com:2096/">Check Mail</a>

                                    </li>

                                    <li><a href="contact.html">contact</a></li>

                                    <li>
                                        <div class="selectLanguage">
                                            <label for="">Language</label>
                                            <select name="" id="">
                                                <option value="">English</option>
                                                <option value="">Arabic</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

@yield('content')
        {{-- Slider --}}

        {{-- about us --}}

        {{-- ourservices --}}

        {{-- ourteam --}}

        {{-- news and updates --}}

        {{-- testimonial --}}

        {{-- statistics --}}

        {{-- clients --}}



    <!-- Google Map -->
    <div class="map-canvas">
    </div>

    <div class="map-loaction">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.8848484966197!2d85.32761721546603!3d27.720841431504795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1907b0522ead%3A0x392af32fe87dd0ea!2sRadiant%20Infotech%20Nepal%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1658659292018!5m2!1sen!2snp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!--
     =====================================================
      Footer
     =====================================================
     -->
    <footer class="theme-footer-two">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12 logo-widget">
                        <div class="logo"><a href="index.html"><img src="website/images/logo/logo-1.png"
                                    alt=""></a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat culpa autem tempora enim
                            eligendi facere?</p>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                        </ul>
                    </div> <!-- /.logo-widget -->
                    <div class="col-lg-2 col-sm-6 col-12 footer-list">
                        <h6 class="title">EXPLORE</h6>
                        <ul>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="who-we-are.html">Who Are We ?</a></li>
                            <li><a href="service.html">Our Services</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div> <!-- /.footer-list -->
                    <div class="col-lg-3 col-sm-6 col-12 footer-gallery">
                        <h6 class="title">Gallery</h6>
                        <div class="wrapper">
                            <div class="row">
                                <div class="col-4">
                                    <a href="website/images/gallery/gallery-1.jpg" data-fancybox="gallery"
                                        data-caption="Caption for single image" class="fancybox"><img
                                            src="website/images/gallery/gallery-1.jpg" alt=""></a>
                                </div>
                                <div class="col-4">
                                    <a href="website/images/gallery/gallery-2.jpg" data-fancybox="gallery"
                                        data-caption="Caption for single image" class="fancybox"><img
                                            src="website/images/gallery/gallery-2.jpg" alt=""></a>
                                </div>
                                <div class="col-4">
                                    <a href="website/images/gallery/gallery-4.jpg" data-fancybox="gallery"
                                        data-caption="Caption for single image" class="fancybox"><img
                                            src="website/images/gallery/gallery-4.jpg" alt=""></a>
                                </div>
                                <div class="col-4">
                                    <a href="website/images//gallery/gallery-5.jpg" data-fancybox="gallery"
                                        data-caption="Caption for single image" class="fancybox"><img
                                            src="website/images//gallery/gallery-5.jpg" alt=""></a>
                                </div>
                                <div class="col-4">
                                    <a href="website/images//gallery/gallery-6.jpg" data-fancybox="gallery"
                                        data-caption="Caption for single image" class="fancybox"><img
                                            src="website/images//gallery/gallery-6.jpg" alt=""></a>
                                </div>
                                <div class="col-4">
                                    <a href="website/images/gallery/gallery-7.jpg" data-fancybox="gallery"
                                        data-caption="Caption for single image" class="fancybox"><img
                                            src="website/images/gallery/gallery-7.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.footer-gallery -->

                    <div class="col-lg-3 col-sm-6 col-12 contact-widget">
                        <h6 class="title">CONTACT</h6>
                        <ul>
                            <li>
                                <i class="flaticon-direction-signs"></i>
                                P.O.Box 35069
                                <br>
                                Dubai – United Arab Emirates
                            </li>
                            <li>
                                <i class="flaticon-multimedia-1"></i>
                                <a href="#">info@support.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="#">Tel No : +9714-2855 115
                                    <br>
                                    Fax No : +9714-2855 113</a>
                            </li>
                        </ul>
                    </div> <!-- /.contact-widget -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-footer -->
        <div class="bottom-footer">
            <div class="container">
                <p>&copy; Copyrights 2018. All Rights Reserved.</p>
            </div>
        </div>
    </footer>




    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </button>


    <!-- Optional JavaScript _____________________________  -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- jQuery -->
    <script src="website/vendor/jquery.2.2.3.min.js"></script>
    <!-- Popper js -->
    <script src="website/vendor/popper.js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="website/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Camera Slider -->
    <script src='website/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
    <script src='website/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script>
    <script src='website/vendor/Camera-master/scripts/camera.min.js'></script>
    <!-- menu  -->
    <script src="website/vendor/menu/src/js/jquery.slimmenu.js"></script>
    <!-- WOW js -->
    <script src="website/vendor/WOW-master/dist/wow.min.js"></script>
    <!-- owl.carousel -->
    <script src="website/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="website/js/slider-main.js"></script>
    <!-- js count to -->
    <script src="website/vendor/jquery.appear.js"></script>
    <script src="website/vendor/jquery.countTo.js"></script>
    <!-- Fancybox -->
    <script src="website/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

    <!-- Theme js -->
    <script src="website/js/theme.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    </div>
</body>



</html>
