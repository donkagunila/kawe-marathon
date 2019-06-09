
<!doctype html>
<html lang="en">
  
<!-- Mirrored from landkit.goodthemes.co/job.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 May 2019 23:59:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/Feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/flickity/dist/flickity.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/flickity-fade/flickity-fade.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/aos/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/jarallax/dist/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/highlightjs/styles/vs2015.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css') }}">

    <!-- Map -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">

    <title>Kawe Marathon | @yield('title')</title>
  </head>
  <body>
    
    @include('app.shared.header')

    <!-- WELCOME
    ================================================== -->
   @yield('contents')



   







    <!-- CTA
    ================================================== -->
    <section class="pt-6 pt-md-8">
      <div class="container pb-6 pb-md-8 border-bottom">
        <div class="row align-items-center">
          <div class="col-12 col-md">
            
            <!-- Heading -->
            <h3 class="mb-1">
              Apply in 15 minutes
            </h3>

            <!-- Text -->
            <p class="font-size-lg text-muted mb-6 mb-md-0">
              Get your dream job without the hassle.
            </p>

          </div>
          <div class="col-12 col-md-auto">
                
            <!-- Button -->
            <a href="#!" class="btn btn-primary-soft mr-1 lift">
              Learn more
            </a>
            
            <a href="#!" class="btn btn-primary lift">
              Get started
            </a>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

  @include('app.shared.footer')
    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flickity/dist/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/libs/flickity-fade/flickity-fade.js') }}"></script>
    <script src="{{ asset('assets/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/libs/smooth-scroll/dist/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jarallax/dist/jarallax-video.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jarallax/dist/jarallax-element.min.js') }}"></script>
    <script src="{{ asset('assets/libs/typed.js/lib/typed.min.js') }}"></script>
    <script src="{{ asset('assets/libs/countup.js/dist/countUp.min.js') }}"></script>
    <script src="{{ asset('assets/libs/highlightjs/highlight.pack.min.js') }}"></script>
    <script src="{{ asset('assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js') }}"></script>

    <!-- Map -->
    <script src="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
      
  </body>

</html>