<!doctype html>
<html lang="en">
  <head>
    <title>MARLEX</title>
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>

<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12"> 
  <header role="banner">
     
     <nav class="navbar navbar-expand-md navbar-dark bg-light">
       <div class="container">
         <a class="navbar-brand" href="{{ url('/tiendapedidos')}}">MARLEX</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
           <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
             <li class="nav-item">
               <a class="nav-link active" href="{{ url('/tiendapedidos')}}">INICIO</a>
             </li>
             <!--
             <li class="nav-item">
               <a class="nav-link" href="{{ url('/login')}}">ADMINISTRADORES</a>
             </li>
             -->
           </ul>
         </div>
       </div>
     </nav>
   </header>
   <!-- END header -->

   <section class="site-hero" style="background-image: url({{asset('images/logo.png')}});">
     <div class="container">
       <div class="row align-items-center site-hero-inner justify-content-center">
         <div class="col-md-8 text-center">

           <!-- <div class="mb-5 element-animate">
             <img src="{{asset('images/logo.png')}}" alt="Image placeholder" class="img-md-fluid">
           </div> -->

         </div>
       </div>
     </div>
   </section>
   <!-- END section -->

   <section class="quick-info element-animate" data-animate-effect="fadeInLeft">
     <div class="container">
       <div class="row">
         <div class="col-lg-8 bgcolor">
           <div class="row">
             <div class="col-md-3 mb-3">
               <div class="media">
                 <div class="mr-3 icon-wrap"><span class="icon ion-ios-telephone"></span></div>
                 <div class="media-body">
                   <h5>+502 5465 7630</h5>
                   <h5>+502 4174 4025</h5>
                 </div>
               </div>
             </div>
             <div class="col-md-4 mb-3">
               <div class="media">
                 <div class="mr-3 icon-wrap"><span class="icon ion-location"></span></div>
                 <div class="media-body">
                   <h5>San Pedro Sacatepéquez , San Marcos</h5>
                   <p>3ra Ave 1-04 zona 1</p>
                 </div>
               </div>
             </div>
             <div class="col-md-3 mb-3">
               <div class="media">
                 <div class="mr-3 icon-wrap"><span class="icon ion-android-time"></span></div>
                 <div class="media-body">
                   <h5>Atencion: 9:00 am - 5:30 pm</h5>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- END section -->

   <br><br>
   @yield('content')
   <br><br>

   
    
   <footer class="site-footer">
     <div class="container">
       <div class="row mb-5">
         <div class="col-md-4">
           <h3 class="mb-4">INFORMACIÓN</h3>
           <ul class="list-unstyled ">
             <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-location"></span></span><span class="">San Pedro Sacatepéquez, San Marcos</span></li>
             <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-telephone"></span></span><span class="">+502 5465 7630 / +502 4174 4025 </span></li>
             <li class="d-flex"><span class="mr-3"><span class="icon ion-email"></span></span><span class="">marlex.pantalones@gmail.com</span></li>
           </ul>
         </div>

         <div class="col-md-5">
           <h3>REDES SOCIALES</h3>
           <p>
             <a href="https://www.facebook.com/marlexgt" class="p-2"><span class="fa fa-facebook"></span></a>
             <a href="https://www.facebook.com/marlexgt" class="p-2"><span class="fa fa-twitter"></span></a>
             <a href="https://www.facebook.com/marlexgt" class="p-2"><span class="fa fa-instagram"></span></a>
           </p>
         </div>
       </div>
       
       <div class="row justify-content-center">
         <div class="col-md-7 text-center">
             Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
         </div>
         <!--
         <div class="col-md-7 text-center">
             This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
         </div>
         -->
       </div> 
     </div>
   </footer>
   <!-- END footer -->
   
   <!-- loader -->
   <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

</div>

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>

    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup-options.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>