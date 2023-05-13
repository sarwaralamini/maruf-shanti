<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Website SEO -->
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <meta name="description" content="@yield('meta_description')"/>
    <meta name="author" content="@yield('meta_author')" />
    <meta name="copyright" content="@yield('meta_copyright')" />
    <meta name="keywords" content="@yield('meta_keyword')" />
    <meta name="robots" content="@yield('meta_robot')" />

    <!-- Open Graph data -->
    <meta property="og:title" content="@yield('og_title')" />
    <meta property="og:description" content="@yield('og_description')"/>
    <meta property="og:type" content="@yield('og_type')" />
    <meta property="og:url" content="@yield('og_url')" />
    <meta property="og:image" content="@yield('og_image')" />
    <meta property="og:image:width" content="@yield('og_image-width')" />
    <meta property="og:image:height" content="@yield('og_image-height')" />
    <meta property="fb:app_id" content="@yield('og_app_id')" />

    <!-- Twitter data -->
    <meta name="twitter:card" content="@yield('twitter_card')" />
    <meta name="twitter:site" content="@yield('twitter_site')" />
    <meta name="twitter:creator" content="@yield('twitter_creator')" />
    <meta name="twitter:url" content="@yield('twitter_url')" />
    <meta name="twitter:title" content="@yield('twitter_title')" />
    <meta name="twitter:description" content="@yield('twitter_description')" />
    <meta name="twitter:image" content="@yield('twitter_image')" />

    <!--================ Mobile specific metas ================-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--================ Google web fonts ================-->
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,900&display=swap"
    rel="stylesheet" />

  <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="css/fontawesome-all.min.css" />
  <link
    href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp"
    rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendors/arcticmodal/jquery.arcticmodal-0.3.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/assets/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendors/revolution/css/settings.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendors/revolution/css/layers.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendors/revolution/css/navigation.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendors/fancybox/jquery.fancybox.min.css') }}" />
  <!--================ Theme CSS ================-->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/date.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

  <!--================ Vendor JS ================-->
</head>

<body>
  {{-- <div class="mad-preloader"></div> --}}
  <div id="mad-page-wrapper" class="mad-page-wrapper">
    <!--================ Header ================-->
    @include('frontend.layouts.inc.header')
    <!--================ End of Header ================-->

    <!--================ Main Content ================-->
    @yield('content')
    <!--================ End of Main Content ================-->

    <!--================ Footer ================-->
    @include('frontend.layouts.inc.footer')
    <!--================ End of Footer ================-->
  </div>
  <script src="{{ asset('assets/vendors/modernizr.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery.easing.1.3.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery.parallax-1.1.3.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/monkeysan.accordion.js') }}"></script>
  <script src="{{ asset('assets/vendors/monkeysan.jquery.nav.1.0.js') }}"></script>
  <script src="{{ asset('assets/vendors/monkeysan.validator.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/handlebars-v4.0.5.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/modules/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/arcticmodal/jquery.arcticmodal-0.3.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/retina.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/fancybox/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/sticky-sidebar.js') }}"></script>
  <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/mad.customselect.js') }}"></script>
  <script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/countdown/jquery.plugin.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/countdown/jquery.countdown.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/modules/mad.alert-box.min.js') }}"></script>
  <script src="{{ asset('assets/js/modules/mad.newsletter-form.min.js') }}"></script>
  <script src="{{ asset('assets/js/modules/mad.sticky-header-section.min.js') }}"></script>
  <script src="{{ asset('assets/js/mad.app.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
  <script type="text/javascript"
    src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
  <script>
    $('.mad-grid--isotope').isotope({
        // options
        itemSelector: '.mad-grid-item',
        layoutMode: 'masonry',
    });
    $('.g2').isotope({
        // options
        itemSelector: '.mad-grid-item',
        layoutMode: 'masonry',
    });
    $('.g3').isotope({
        // options
        itemSelector: '.mad-grid-item',
        layoutMode: 'masonry',
    });
    $('.g4').isotope({
        // options
        itemSelector: '.mad-grid-item',
        layoutMode: 'masonry',
    });
    $('.g5').isotope({
        // options
        itemSelector: '.mad-grid-item',
        layoutMode: 'masonry',
    });
  </script>
</body>

</html>
