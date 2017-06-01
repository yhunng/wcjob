<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
      @yield('title')
    </title>

    <!--favicon-->
    <link rel="apple-touch-icon" href="{{asset('assets/theme/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/theme/images/favicon.ico')}}" type="image/x-icon">

    <!-- bootstrap -->
    <link href="{{asset('assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Icons -->
    <link href="{{asset('assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- lightbox -->
    <link href="{{asset('assets/plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet">


    <!-- Themes styles-->
    <link href="{{asset('assets/theme/css/theme.css')}}" rel="stylesheet">
    <!-- Your custom css -->
    <link href="{{asset('assets/theme/css/theme-custom.css')}}" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- wrapper page -->
    <div class="wrapper">
      <!-- main-header -->
      <header class="main-header">


        <!-- main navbar -->
        <nav class="navbar navbar-default main-navbar hidden-sm hidden-xs">
          <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <ul class="nav navbar-nav">
                <li class=""><a href="job_list.html"><strong>Find a Job</strong></a></li>
                <li class=""><a href="resume_list.html"><strong>Employers</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>Post a Job</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>Build Resume</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>About Us</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>Contact Us</strong></a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="link-btn"><a href="login.html"><span class="btn btn-theme btn-pill btn-xs btn-line">Login</span></a></li>
                <li class="link-btn"><a href="register.html"><span class="btn btn-theme  btn-pill btn-xs btn-line">Register</span></a></li>
              </ul>
            </div>
          </div>
        </nav><!-- end main navbar -->

        <!-- mobile navbar -->
        <div class="container">
          <nav class="mobile-nav hidden-md hidden-lg">
            <a href="#" class="btn-nav-toogle first">
              <span class="bars"></span>
              Menu
            </a>
            <div class="mobile-nav-block">
              <h4>Navigation</h4>
              <a href="#" class="btn-nav-toogle">
                <span class="barsclose"></span>
                Close
              </a>

              <ul class="nav navbar-nav">
                <li class=""><a href="job_list.html"><strong>Find a Job</strong></a></li>
                <li class=""><a href="resume_list.html"><strong>Employers</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>Post a Job</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>Build Resume</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>About Us</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>Contact Us</strong></a></li>
                <li><a href="login.html"><strong>Login</strong></a></li>
                <li><a href="register.html"><strong>Register</strong></a></li>
              </ul>
            </div>
          </nav>
        </div><!-- mobile navbar -->



@yield('main')



        <!-- main-footer -->
     <footer class="main-footer">


       <div class="container">
         <div class="row">
           <div class="col-sm-6">
             <ul class="list-inline link-footer text-center-xs">
               <li><a href="index.html">Home</a></li>
               <li><a href="blog.html">Blog</a></li>
               <li><a href="about.html">About Us</a></li>
               <li><a href="contact.html">Contact Us</a></li>
             </ul>
           </div>
           <div class="col-sm-6 ">
             <p class="text-center-xs hidden-lg hidden-md hidden-sm">Stay Connect</p>
             <div class="socials text-right text-center-xs">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="#"><i class="fa fa-youtube-play"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
             </div>
           </div>
         </div>
       </div>
     </footer><!-- end main-footer -->

   </div><!-- end wrapper page -->




   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="{{asset('assets/plugins/jquery.js')}}"></script>
   <script src="{{asset('assets/plugins/jquery.easing-1.3.pack.js')}}"></script>
   <!-- jQuery Bootstrap -->
   <script src="{{asset('assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js')}}"></script>
   <!-- Lightbox -->
   <script src="{{asset('assets/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
   <!-- Theme JS -->
   <script src="{{asset('assets/theme/js/theme.js')}}"></script>

   <!-- maps -->
   <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
   <script src="{{asset('assets/plugins/gmap3.min.js')}}"></script>
   <!-- maps single marker -->
   <script src="{{asset('assets/theme/js/map-detail.js')}}"></script>

 </body>
</html>
