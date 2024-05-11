<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Page title -->
      <title>Sweetness - HTML5 Template</title>
      <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
      <!-- Bootstrap Core CSS -->
      <link href="/ClientPublic/css/bootstrap.css" rel="stylesheet" type="text/css">
      <!-- Icon fonts -->
      <link href="/ClientPublic/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="/ClientPublic/fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">
      <link href="/ClientPublic/fonts/glyphicons/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Karla:400,600,700%7CCherry+Swash:400,700" rel="stylesheet">
      <!-- Style CSS -->
      <link href="/ClientPublic/css/style.css" rel="stylesheet">
      <!-- Color Style CSS -->
      <link href="/ClientPublic/styles/maincolors.css" rel="stylesheet">
      <!-- CSS Plugins -->
      <link rel="stylesheet" href="/ClientPublic/css/plugins.css">
      <!-- Favicons-->
      <link rel="apple-touch-icon" sizes="72x72" href="/ClientPublic/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/ClientPublic/apple-icon-114x114.png">
      <link rel="shortcut icon" href="/ClientPublic/favicon.ico" type="image/x-icon">
   </head>
   <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
      <!-- Navbar -->
      <nav class="navbar navbar-custom navbar-fixed-top">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                <i class="fa fa-bars"></i>
            </button>
            <div class="navbar-brand-centered page-scroll">
                <a href="#page-top"><img src="logo.png" class="img-responsive" alt=""></a>
            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand-centered">
            <div class="container">
                <ul class="nav navbar-nav page-scroll navbar-left">
                    <li><a href="#page-top" style=" font-family: 'Anonymous Pro';">Home</a></li>
                    <li><a href="#services"style=" font-family: 'Anonymous Pro';">Services</a></li>
                    <li><a href="#about" style=" font-family: 'Anonymous Pro';">About</a></li>
                    <li><a href="#reviews" style=" font-family: 'Anonymous Pro';">Reviews</a></li>
                    <li><a href="#menu" style=" font-family: 'Anonymous Pro';">Menu</a></li>
                </ul>
                <ul class="nav navbar-nav page-scroll navbar-right">
                    <li><a href="#catering" style=" font-family: 'Anonymous Pro';">Catering</a></li>
                    <li><a href="#gallery" style=" font-family: 'Anonymous Pro';">Gallery</a></li>
                    <li><a href="#team" style=" font-family: 'Anonymous Pro';">Team</a></li>
                    <li><a href="#contact" style=" font-family: 'Anonymous Pro';">Contact</a></li>
                    <!-- Dropdown -->
                    @guest
                        <li><a href="{{ route('login') }}" style=" font-family: 'Anonymous Pro';">Login</a></li>
                        <li><a href="{{ route('register') }}" style=" font-family: 'Anonymous Pro';">Register</a></li>
                    @else
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                style=" font-family: 'Anonymous Pro';">{{ Auth::user()->name }}<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-single.html" style=" font-family: 'Anonymous Pro';">Profile</a></li>
                                <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                                        style=" font-family: 'Anonymous Pro';">Déconnexion</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                        <!-- This will be visible when user is logged in -->
                    @endguest
                </ul>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
      <!-- /navbar ends -->
      <!-- Preloader -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="object-load" id="object_one"></div>
               <div class="object-load" id="object_two"></div>
               <div class="object-load" id="object_three"></div>
            </div>
         </div>
      </div>
      <!-- /preloader -->
      <!-- Section Blog -->
      <section id="blog-main">
         <div class="jumbotron"></div>
         <div class="page-title text-center">
            <h1 class="text-light" >{{ $category->Nom }}</h1>
            <!-- breadcrumb --> 
            <ul class="breadcrumb">
               <li><a href="{{route('home')}}">Home</a> <span class="divider"></span></li>
               <li class="active">{{ $category->Nom }}</li>
            </ul>
            <!-- /breadcrumb --> 
         </div>
		 <!-- /page-title --> 
         <div class="container">
            <div class="row">
               <!-- Blog Home -->
               <div class="col-md-8 ">
                  <div class="row">
                     <!-- Blog Post 1 -->
                     @foreach($products as $product)

                     <div class="blog-post col-md-12">
                        <!-- blog image -->
                        <div class="img-zoom">
                            <a href="{{ route('categories.show', $category->Nom) }}">
                                <img class="img-responsive" src="{{ asset($product->Image) }}" alt="{{ $product->Nom }}">
                            </a>
                        </div>
                        <!-- post info -->
                        <div class="post-review">
                            <!-- Comments -->
                            <ul class="post-comment">
                                <li>{{ $product->created_at->format('d') }}<small>{{ $product->created_at->format('M') }}</small></li>
                                <li><i class="fa fa-comments-o"></i><a href="#"><small>0</small></a></li>
                            </ul>
                            <!-- Title -->
                            <h4 class="post-title">
                                <a href="{{ route('categories.show', $category->Nom) }}">{{ $product->Nom }}</a>
                            </h4>
                            <!-- Description -->
                            <p class="post-description">
                                {{ $product->Description }}
                            </p>
                            <!-- Price -->
                            <p class="post-price"><strong>Price:</strong> {{ $product->Prix }} TND</p>
                            <!-- Button -->
                            <a href="{{ route('categories.show', $category->Nom) }}">
                                <div class="blob-btn">
                                    Read more
                                    <span class="blob-btn__inner">
                                        <span class="blob-btn__blobs">
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <!-- /Post-review -->
                    </div>
                    
                     <!-- /blog-post-->
                   
                     @endforeach

                  
                  </div>
                  <!-- /row-->                  
               </div>
               <!-- /col-md-8 -->
               <!-- Sidebar Column -->
               <div class="sidebar col-md-4">
                  <!-- search -->
                  <div class="well">
                     <h5>Search</h5>
                     <div class="input-group">
                        <input class="form-control" type="text" value="" name="search">
                        <span class="input-group-btn">
                        <button class="blob-btn btn" type="submit" >
                        <i class="fa fa-search"></i>
                        <span class="blob-btn__inner">
                        <span class="blob-btn__blobs">
                        <span class="blob-btn__blob"></span>
                        <span class="blob-btn__blob"></span>
                        <span class="blob-btn__blob"></span>
                        <span class="blob-btn__blob"></span>
                        </span>
                        </span>
                        </button>
                        </span>
                     </div>
                  </div>
                  <!-- /well -->				 	  
                  <!-- About us Widget -->
                  <div class="well">
                     <h5>About Us</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium.</p>
                     <!-- Social Media icons -->
                     <div class="social-media smaller">
                        <a href="#" title=""><i class="fa fa-twitter"></i></a>
                        <a href="#" title=""><i class="fa fa-facebook"></i></a>
                        <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                        <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                        <a href="#" title=""><i class="fa fa-instagram"></i></a>
                     </div>
                  </div>
                  <!-- /well -->
                  <!-- popular posts widget -->        
                  <div class="well">
                     <h5>Popular posts</h5>
                     <div class="panel panel-default popular-posts">
                        <div class="panel-body">
                           <ul class="media-list">
                              <!-- popular post 1 -->   
                              <li class="media">
                                 <div class="media-left">
                                    <img src="/ClientPublic/img/blog/blogwidget1.jpg" class="img-responsive img-rounded" alt="">
                                 </div>
                                 <div class="media-body">
                                    <a href="blog-single.html">
                                       <h6 class="media-heading">
                                          these are our Best Cakes
                                       </h6>
                                    </a>
                                    <small>
                                    Posted on 13 september
                                    </small>
                                 </div>
                              </li>
                              <!-- /media -->
                              <!-- popular post 2 -->   
                              <li class="media">
                                 <div class="media-left">
                                    <img src="/ClientPublic/img/blog/blogwidget2.jpg" class="img-responsive img-rounded" alt="">
                                 </div>
                                 <div class="media-body">
                                    <a href="blog-single.html">
                                       <h6 class="media-heading">
                                          We offer catering to any events!
                                       </h6>
                                    </a>
                                    <small>
                                    Posted on 02 september
                                    </small>
                                 </div>
                              </li>
                              <!-- /media -->
                              <!-- popular post 3 -->   
                              <li class="media">
                                 <div class="media-left">
                                    <img src="/ClientPublic/img/blog/blogwidget3.jpg" class="img-responsive img-rounded" alt="">
                                 </div>
                                 <div class="media-body">
                                    <a href="blog-single.html">
                                       <h6 class="media-heading">
                                          Baking the perfect Cupcake
                                       </h6>
                                    </a>
                                    <small>
                                    Posted on 22 August
                                    </small>
                                 </div>
                              </li>
                              <!-- /media -->
                           </ul>
                           <!-- /media-list --> 
                        </div>
                        <!-- /panel-body --> 
                     </div>
                     <!-- /panel --> 
                  </div>
                  <!-- /well -->							  
                  <!-- Blog Categories -->
                  <div class="well">
                     <h5>Categories</h5>
                     <div class="row">
                        <ul class="list-unstyled">
                           <li><a href="#">Our Pastries</a>
                           </li>
                           <li><a href="#">Events and News</a>
                           </li>
                           <li><a href="#">Catering</a>
                           </li>
                           <li><a href="#">Updates</a>
                           </li>
                           <li><a href="#">Our Team</a>
                           </li>
                           <li><a href="#">Recipes</a>
                           </li>
                           <li><a href="#">Low Sugar Pastries</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!-- /well --> 
                  <!-- Image Widget -->
                  <div class="well">
                     <h5>Super Sale</h5>
                     <img src="/ClientPublic/img/blog/bannerblog.jpg" class="center-block img-rounded img-responsive" alt="">
                  </div>
                  <!-- /well -->				  
                  <!-- Tags Widget -->
                  <div class="well">
                     <h5>Tags</h5>
                     <div class="blog-tags">
                        <a href="#">Cakes</a> <a href="#">Pastries</a> <a href="#">Apple Pie</a> <a href="#">Event</a> <a href="#">Free</a> <a href="#">Cupcake</a> <a href="#">Birthday</a>
                     </div>
                  </div>
                  <!-- /well -->
               </div>
               <!-- /sidebar col-md-3 --> 
               <!-- Pagination -->
               <div class="text-center col-md-12">
                  <ul class="pagination">
                     <li  class="active"><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                  </ul>
               </div>
               <!-- /text-center --> 
            </div>
            <!-- /row --> 
         </div>
         <!-- /container-->
      </section>
      <!-- /Section ends -->
      <!-- footer starts -->
      <svg id="curveUpColor" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
         <path d="M0 100 C 20 0 50 0 100 100 Z" />
      </svg>
      <footer class="bg-primary">
         <div class="container">
            <div class="row text-center">
               <!-- social media and logo -->
               <div class="col-lg-4">
                  <h6  class="text-light">Opening Times</h6>
                  <ul class="ul-custom text-light">
                     <li>Mon - fri: 9am-6pm</li>
                     <li>Weekends & Holidays: Closed</li>
                  </ul>
               </div>
               <!-- /row -->
               <div class="col-lg-4">
                  <a href="#page-top"><img src="/ClientPublic/img/white-logo.png"  alt="" class="img-responsive center-block"></a>
               </div>
               <div class="col-lg-4">
                  <!-- social-icons -->	
                  <h6  class="text-light">Follow us</h6>
                  <div class="social-media">
                     <a href="#" title=""><i class="fa fa-twitter"></i></a>
                     <a href="#" title=""><i class="fa fa-facebook"></i></a>
                     <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                     <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                     <a href="#" title=""><i class="fa fa-instagram"></i></a>
                  </div>
               </div>
               <!-- /col-lg-4 -->  			
            </div>
            <!-- /row -->
            <div class="row">
               <div class="col-md-12 credits text-center">
                  <p>Copyright © 2018 - Designed by  <a href="http://www.ingridkuhn.com">Ingrid Kuhn</a></p>
                  <!-- /container -->
                  <!-- Go To Top Link -->
                  <div class="page-scroll hidden-sm hidden-xs">
                     <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
                  </div>
               </div>
               <!-- /col-md-12 -->
            </div>
            <!-- /row-->
         </div>
         <!-- /container -->
      </footer>
      <!-- /footer -->
      <!-- Core JavaScript Files -->
      <script src="/ClientPublic/js/jquery.min.js"></script>
      <script src="/ClientPublic/js/bootstrap.min.js"></script>
      <!-- Main Js -->
      <script src="/ClientPublic/js/main.js"></script>
      <!-- Other Plugins -->
      <script src="/ClientPublic/js/plugins.js"></script>
      <!-- Prefix free CSS -->
      <script src="/ClientPublic/js/prefixfree.js"></script>	   	  
   </body>
</html>