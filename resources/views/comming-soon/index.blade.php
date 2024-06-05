<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Ice Vegas </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="logo.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/spacing.css">
      <link rel="stylesheet" href="assets/css/meanmenu.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/css/icon-dukamarket.css">
      <link rel="stylesheet" href="assets/css/jquery-ui.css">
      <link rel="stylesheet" href="assets/css/main.css">
   </head>
   <body>


      <!-- Scroll-top -->
      <button class="scroll-top scroll-to-target" data-target="html">
         <i class="icon-chevrons-up"></i>
      </button>
      <!-- Scroll-top-end-->


      <main>

         <!-- comming-soon-area-start -->
         <section class="commoing-soon-area grey-bg pt-75 pb-75">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-5 col-md-6">
                     <div class="tpsoon">
                        <h4 class="tpsoon__sub-title mb-15">Coming soon</h4>
                        <h2 class="tpsoon__title mb-30" style="color: black" > Notre nouvelle rebrique <br>Sera bientôt disponible</h2>
                        <p style="color: black">Vos coordonnées personnelles sont strictement réservées à notre usage et vous pouvez vous désabonner à tout moment.</p>
                        <div class="tpsoon__submit-form  mb-50">
                            <form action="{{ route('newsletter.subscribe') }}" method="POST">
                                @csrf
                              <div class="tpsoon__submit-wrapper">
                                 <div class="tpsoon__input mb-10 mr-10">
                                    <input type="email" required  name="email" placeholder="s'inscrire ">
                                 </div>
                                 <div class="tpsoon__submit">
                                    <br>

                                    <button class="tp-btn-3" type="submit">S'inscrire</button>
                                    <br> <br>
                                 </div>
                              </div>
                           </form>
                        </div>   
                        <div class="rainbow__social mb-15">
                        </div>
                        <div class="tpsoon__copyright">
                           <span style="color: black">Copyright <a href="index.html">© Ice Vegas</a> <a href="#"></a>.</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-6">
                     <div class="tpsoon__thumb p-relative w-img">
                        <img src="recctte.jpg" alt="">
                        <div class="tpsoon__shape d-none d-md-block">
                         
                         
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- comming-soon-area-end -->

      </main>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script>
          @if (session('success'))
              toastr.success("{{ session('success') }}", 'Success', {
                  timeOut: 5000
              });
          @endif
  
          @if ($errors->any())
              @foreach ($errors->all() as $error)
                  toastr.error("{{ $error }}", 'Error', {
                      timeOut: 5000
                  });
              @endforeach
          @endif
      </script>
      <!-- JS here -->
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/waypoints.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/swiper-bundle.js"></script>
      <script src="assets/js/nice-select.js"></script>
      <script src="assets/js/slick.js"></script>
      <script src="assets/js/magnific-popup.js"></script>
      <script src="assets/js/counterup.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/isotope-pkgd.js"></script>
      <script src="assets/js/imagesloaded-pkgd.js"></script>
      <script src="assets/js/countdown.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/jquery-ui.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>
