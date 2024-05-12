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
    <title>Home</title>
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
    <!-- LayerSlider CSS -->
    <link rel="stylesheet" href="/ClientPublic/js/layerslider/css/layerslider.css">
    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="72x72" href="/ClientPublic/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/ClientPublic/apple-icon-114x114.png">
    <link rel="shortcut icon" href="/ClientPublic/favicon.ico" type="image/x-icon">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <style>
        .navbar-nav a {
            font-family: 'Anonymous Pro', monospace;
        }
    </style>
    <!--============== Navbar Starts ==============-->
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
                    <li><a href="{{route('home')}}" style=" font-family: 'Anonymous Pro';">Acceuil</a></li>
                    <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                style=" font-family: 'Anonymous Pro';">NOs collection<b class="caret"></b></a>
                       
                            <ul class="dropdown-menu">

                            @foreach ($categories as $category)

                                <li><a href="{{ route('categories.show', $category->Nom) }}" style=" font-family: 'Anonymous Pro';">{{ $category->Nom }}</a></li>
                                
                               @endforeach
                            </ul>
                        </li>

                        <li><a href="#about" style=" font-family: 'Anonymous Pro';">Mieux nous connaitre </a></li>
                      
                       

                    <!-- <li><a href="#services"style=" font-family: 'Anonymous Pro';">Services</a></li>
                    <li><a href="#reviews" style=" font-family: 'Anonymous Pro';">Reviews</a></li> -->
                </ul>
                <ul class="nav navbar-nav page-scroll navbar-right">
                <li><a href="#menu" style=" font-family: 'Anonymous Pro';">Rececette ice vegas</a></li>
                        <li><a href="#contact" style=" font-family: 'Anonymous Pro';">contactez nous </a></li>
                        <li><a href="#"style=" font-family: 'Anonymous Pro';">Nos promos </a></li>
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
    <!--============== // Navbar Ends ==============-->

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
    <!-- ==== Slider ==== -->
    <div class="container-fluid page-scroll">
        <!-- ==== Slider ==== -->
        <div id="slider" style="width:1200px;height:900px;margin:0 auto;margin-bottom: 0px;">
            <!-- Slide 1 -->
            <div class="ls-slide" data-ls="duration:4000; transition2d:7; kenburnszoom:out; kenburnsscale:1.2;">
                <!-- bg image  -->
                <img src="/ClientPublic/img/slide1.jpg" class="ls-bg" alt="" />
                <!-- text  -->
                <div class="ls-l header-wrapper"
                    data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
                    <div class="header-text">
                        <h1>Welcome to Sweetness</h1>
                        <p class="header-p">We have over 300 delicious flavours for you to choose, come and visit our
                            shop today!
                        </p>
                        <!-- Button -->
                        <a href="#contact">
                            <div class="blob-btn btn-lg">
                                Contact Us
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
                    <!-- header-text  -->
                </div>
                <!-- ls-l  -->
            </div>
            <!-- ls-slide -->
            <!-- Slide 2 -->
            <div class="ls-slide" data-ls="duration:4000; transition2d:7; kenburnszoom:out; kenburnsscale:1.2;">
                <!-- bg image  -->
                <img src="/ClientPublic/img/slide2.jpg" class="ls-bg" alt="" />
                <!-- text  -->
                <div class="ls-l header-wrapper"
                    data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
                    <div class="header-text">
                        <h1>Enjoy our Cakes!</h1>
                        <p class="header-p">We have over 300 delicious flavours for you to choose, come and visit our
                            shop today!
                        </p>
                        <!-- Button -->
                        <a href="#contact">
                            <div class="blob-btn btn-lg">
                                Contact Us
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
                    <!-- header-text  -->
                </div>
                <!-- ls-l  -->
            </div>
            <!-- ls-slide -->
            <!-- Slide 3 -->
            <div class="ls-slide" data-ls="duration:4000; transition2d:7; kenburnszoom:out; kenburnsscale:1.2;">
                <!-- bg image  -->
                <img src="/ClientPublic/img/slide3.jpg" class="ls-bg" alt="" />
                <!-- text  -->
                <div class="ls-l header-wrapper"
                    data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallaxlevel:0;">
                    <div class="header-text">
                        <h1>Catering Services</h1>
                        <p class="header-p">We have over 300 delicious flavours for you to choose, come and visit our
                            shop today!
                        </p>
                        <!-- Button -->
                        <a href="#contact">
                            <div class="blob-btn btn-lg">
                                Contact Us
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
                    <!-- header-text  -->
                </div>
                <!-- ls-l  -->
            </div>
            <!-- ls-slide -->
        </div>
        <!-- /slider -->
    </div>
    <!-- /container-fluid -->
    <!-- curve up svg -->
    <svg id="curveUp" class="hidden-xs hidden-sm" xmlns="http://www.w3.org/2000/svg" version="1.1"
        width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C 20 0 50 0 100 100 Z" />
    </svg>
    <!-- /curve up svg -->
    <!-- ==== Services ==== -->
    <section id="services" class="no-padding-top container-fluid" data-0="background-position:90% 100px;"
        data-end="background-position:90% -300px;">
        <div class="container">
            <div class="col-lg-12">
                <!-- Section heading -->
                <div class="section-heading">
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-responsive img-rounded" src="/ClientPublic/img/cakes.jpg" data-aos="fade-down"
                        data-aos-duration="1500" alt="">
                </div>
                <!-- /col-md-4 -->
                <div class="col-md-8 res-margin">
                    <h3>Baking is our Passion</h3>
                    <p>Hinc dissentiet per ad, quando dolores has id vel mauris ultricies, vest ibulum orci eget Unc vel
                        mauris ultricies, vest ibulum orci eget,Fusce mollis viverra elit liquam erat volut imperdiet
                        interdum donec eget me</p>
                    <p> Atomorum erroribus dissentiunt ex vel. Invenire hendrerit et vim, has solet adversarium ne, mea
                        nisl postea principes at. Has primis vidisse instructior ad, id rebum eruditi sed. Hinc
                        dissentiet per ad, quando dolores has id vel mauris ultricies, vest ibulum orci eget.
                    </p>
                    <!-- Button -->
                    <div class="page-scroll">
                        <a href="#contact">
                            <div class="blob-btn">
                                Contact Us
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
                    <!-- /page-scroll -->
                </div>
                <!-- /col-md-8 -->
            </div>
            <!-- /row -->
            <!-- carousel -->
            <div class="section-heading">
                <h2>Categories</h2>
            </div>
            <div id="owl-icons" class="owl-carousel features-icon margin1 light-bg2">
                @foreach ($categories as $category)
                    <a href="{{ route('categories.show', $category->Nom) }}" class="category-link">
                        <div class="media text-center">
                            <img src="{{ $category->Image }}" alt="{{ $category->Nom }}" class="icon">
                            <div class="media-body">
                                <h5>{{ $category->Nom }}</h5>
                                <p>{{ $category->Description }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <!-- /owl-carousel -->

            <!--/owl-icons-->
        </div>
        <!-- /container -->
    </section>
    <!-- /section-->
    <!-- ==== Newsletter ==== -->
    <section id="newsletter" class="container-fluid bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- image  -->
                    <img src="/ClientPublic/img/newsletter.png" class="img-responsive newsletter-img"
                        alt="" />
                </div>
                <div class="col-lg-5">
                    <h3 class="res-margin text-light">Join our Newsletter</h3>
                    <p class="text-light">We will send you news once a week</p>
                    <!-- Form -->
                    <div id="mc_embed_signup">
                        <form
                            action="http://yourlist.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&id=111"
                            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                            class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <div class="input-group">
                                        <input class="form-control input-lg required email" type="email"
                                            value="" name="EMAIL" placeholder="Your email here"
                                            id="mce-EMAIL">
                                        <span class="input-group-btn">
                                            <button class="blob-btn btn btn-lg" type="submit" value="Subscribe"
                                                name="subscribe" id="mc-embedded-subscribe">
                                                Subscribe
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
                                    <!-- Subscription results -->
                                    <div id="mce-responses" class="mailchimp">
                                        <div class="alert alert-danger response" id="mce-error-response"></div>
                                        <div class="alert alert-success response" id="mce-success-response"></div>
                                    </div>
                                </div>
                                <!-- /mc-fiel-group -->
                            </div>
                            <!-- /mc_embed_signup_scroll -->
                        </form>
                        <!-- /form ends -->
                    </div>
                    <!-- /mc_embed_signup -->
                </div>
                <!-- /col-lg -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- ==== About ==== -->
    <section id="about" class="cake-ornament container-fluid">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading">
                <h2>About Us</h2>
            </div>
            <!-- Text -->
            <div class="row">
                <div class="col-lg-7">
                    <h3>Delicious cakes since 1990</h3>
                    <p>Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen
                        unc vel mauris ultricies, vest ibulum orci eget,Fusce mollis imperdiet interdum donec eget metus
                        auguen unc vel lorem ispuet.</p>
                    <p>Placerat a ultricies a, posuere a nibh lorem ispuet Ibu lum orci eget.Ibu lum orci eget, viverra
                        elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit uasi quidem minus id omnis.
                    </p>
                    <ul class="custom">
                        <li>We are a family owned Business</li>
                        <li>Vegan and Gluten free options always available</li>
                        <li>We use high quality fair trade Chocolate in our products</li>
                        <li>You can order your own custom cake with us</li>
                    </ul>
                </div>
                <!-- /col-lg-7 -->
                <div class="col-lg-5 res-margin">
                    <div id="owl-about" class="owl-carousel">
                        <div class="item">
                            <img class="img-responsive img-rounded" src="/ClientPublic/img/about1.jpg"
                                alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive  img-rounded" src="/ClientPublic/img/about2.jpg"
                                alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive  img-rounded" src="/ClientPublic/img/about3.jpg"
                                alt="">
                        </div>
                    </div>
                    <!-- /owl-about -->
                </div>
                <!-- /col-lg-5 -->
            </div>
            <!-- /row -->
            <div class="row">
                <div class="col-md-7">
                    <h4>Our Location</h4>
                    <p>Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen
                        unc vel mauris ultricies, vest ibulum orci eget,Fusce mollis imperdiet interdum donec eget metus
                        auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac
                        sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis.
                    </p>
                </div>
                <!-- /col-md-7 -->
                <div class="col-md-5">
                    <div class="alert alert-info col-md-12" data-aos="fade-up" data-aos-duration="1500">
                        <h5>Order a custom cake</h5>
                        <p class="text-light">
                            Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci
                            eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet
                            consectetur.
                        </p>
                    </div>
                    <!-- /alert -->
                </div>
                <!-- /col-md-5 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!--/section -->
    <!-- ==== Reviews ==== -->
    <section id="reviews" class="cake-ornament light-bg1 container-fluid">
        <div class="container">
            <h3 class="text-center header-h3">Customer Reviews</h3>
            <div class="col-md-12 margin1">
                <!-- Carousel -->
                <div id="owl-testimonial" class=" owl-carousel">
                    <!-- Testimonial 1 -->
                    <div class="testimonial">
                        <div class="testimonial-pic">
                            <img src="/ClientPublic/img/testimonial1.jpg" alt="" class="img-circle">
                        </div>
                        <div class="testimonial-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed accumsan diam.
                                Suspendisse molestie nibh at tempor mollis. Integer aliquet facilisis felis, ac porta
                                est cursus et. Vestibulum sollicitudin nisl ut urna egestas faucibus.
                            </p>
                            <h3 class="testimonial-title">Lana King</h3>
                            <small class="post">- TV Star</small>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="testimonial">
                        <div class="testimonial-pic">
                            <img src="/ClientPublic/img/testimonial2.jpg" alt="" class="img-circle">
                        </div>
                        <div class="testimonial-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed accumsan diam.
                                Suspendisse molestie nibh at tempor mollis. Integer aliquet facilisis felis, ac porta
                                est cursus et. Vestibulum sollicitudin nisl ut urna egestas faucibus.
                            </p>
                            <h3 class="testimonial-title">Jonas Smith</h3>
                            <small class="post">- Chef</small>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="testimonial">
                        <div class="testimonial-pic">
                            <img src="/ClientPublic/img/testimonial3.jpg" alt="" class="img-circle">
                        </div>
                        <div class="testimonial-content">
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed accumsan diam.
                                Suspendisse molestie nibh at tempor mollis. Integer aliquet facilisis felis, ac porta
                                est cursus et. Vestibulum sollicitudin nisl ut urna egestas faucibus.
                            </p>
                            <h3 class="testimonial-title">Maria Silva</h3>
                            <small class="post">- Cake Specialist</small>
                        </div>
                    </div>
                    <!-- /testimonial -->
                </div>
                <!--/owl-testimonials -->
            </div>
            <!-- /col-md-12 -->
        </div>
        <!-- /container-->
    </section>
    <!--/section -->
    <!-- ==== Menu ==== -->
    <section id="menu" class="light-bg1 container-fluid">
        <div class="container">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>Our Menu</h2>
            </div>
            <div class="col-md-12">
                <!-- nav pills -->
                <ul class="nav nav-pills pills-custom nav-stacked col-lg-3" id="menu-nav">
                    <li class="active"><a href="#tab_a" data-toggle="pill"><i
                                class="icon flaticon-food-4"></i>Cakes & Pies</a></li>
                    <li><a href="#tab_b" data-toggle="pill"><i class="icon flaticon-cupcake-2"></i>Cupcakes</a></li>
                    <li><a href="#tab_c" data-toggle="pill"><i class="icon flaticon-cookies"></i>Cookies & Bars</a>
                    </li>
                    <li><a href="#tab_d" data-toggle="pill"><i class="icon flaticon-croissant"></i>Pastries</a></li>
                </ul>
                <!-- Tab content -->
                <div class="tab-content col-lg-9">
                    <div class="tab-pane fade in active" id="tab_a">
                        <div class="row">
                            <!-- Menu: Cakes & Pies-->
                            <h3 class="text-center">Cakes & Pies</h3>
                            <!-- column -->
                            <div class="col-md-6">
                                <div class="menu-body">
                                    <div class="menu-section">
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Chocolate Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $5.5
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Homemade Apple Pie
                                            </div>
                                            <div class="menu-item-price">
                                                $7
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Special Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $12
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                CheeseCake
                                            </div>
                                            <div class="menu-item-price">
                                                $5.5
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Vanilla Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Forest Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                    </div>
                                    <!--/ menu section -->
                                </div>
                                <!-- / menu body -->
                            </div>
                            <!-- /col-md-6 -->
                            <!-- column -->
                            <div class="col-md-6">
                                <div class="menu-body">
                                    <div class="menu-section">
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                CheeseCake
                                            </div>
                                            <div class="menu-item-price">
                                                $5.5
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Vanilla Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Forest Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Boston Cream Pie
                                            </div>
                                            <div class="menu-item-price">
                                                $7
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Brownie
                                            </div>
                                            <div class="menu-item-price">
                                                $4
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Butter Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                    </div>
                                    <!--/ menu section -->
                                </div>
                                <!-- / menu body -->
                            </div>
                            <!-- /col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /tab-pane  -->
                    <div class="tab-pane fade" id="tab_b">
                        <div class="row">
                            <!-- Menu: Cupcakes-->
                            <h3 class="text-center">Cupcakes</h3>
                            <!-- column -->
                            <div class="col-md-6">
                                <div class="menu-body">
                                    <div class="menu-section">
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Small Chocolate cupake
                                            </div>
                                            <div class="menu-item-price">
                                                $5.5
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Vanilla Cupcake
                                            </div>
                                            <div class="menu-item-price">
                                                $7
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Caramel Cupcake
                                            </div>
                                            <div class="menu-item-price">
                                                $12
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                CheeseCake Cupcake
                                            </div>
                                            <div class="menu-item-price">
                                                $5.5
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Vanilla Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Forest Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                    </div>
                                    <!--/ menu section -->
                                </div>
                                <!-- / menu body -->
                            </div>
                            <!-- /col-md-6 -->
                            <!-- column -->
                            <div class="col-md-6">
                                <div class="menu-body">
                                    <div class="menu-section">
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                CheeseCake cupcake
                                            </div>
                                            <div class="menu-item-price">
                                                $5.5
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                set with 6 Cupcakes
                                            </div>
                                            <div class="menu-item-price">
                                                $41
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Forest Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Boston Cream Pie
                                            </div>
                                            <div class="menu-item-price">
                                                $7
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Brownie
                                            </div>
                                            <div class="menu-item-price">
                                                $4
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Butter Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                    </div>
                                    <!--/ menu section -->
                                </div>
                                <!-- / menu body -->
                            </div>
                            <!-- /col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /tab-pane  -->
                    <div class="tab-pane fade" id="tab_c">
                        <div class="row">
                            <!-- Menu: Cookies and Bars -->
                            <h3 class="text-center">Cookies & Bars</h3>
                            <!-- column -->
                            <div class="col-md-6">
                                <div class="menu-body">
                                    <div class="menu-section">
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Small Chocolate cupake
                                            </div>
                                            <div class="menu-item-price">
                                                $5.5
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Vanilla Cupcake
                                            </div>
                                            <div class="menu-item-price">
                                                $7
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Special Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $12
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                CheeseCake
                                            </div>
                                            <div class="menu-item-price">
                                                $5.5
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Vanilla Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Forest Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                    </div>
                                    <!--/ menu section -->
                                </div>
                                <!-- / menu body -->
                            </div>
                            <!-- /col-md-6 -->
                            <!-- column -->
                            <div class="col-md-6">
                                <div class="menu-body">
                                    <div class="menu-section">
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                CheeseCake
                                            </div>
                                            <div class="menu-item-price">
                                                $5.5
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Vanilla Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Forest Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Boston Cream Pie
                                            </div>
                                            <div class="menu-item-price">
                                                $7
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Brownie
                                            </div>
                                            <div class="menu-item-price">
                                                $4
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Butter Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                    </div>
                                    <!--/ menu section -->
                                </div>
                                <!-- / menu body -->
                            </div>
                            <!-- /col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /tab-pane  -->
                    <div class="tab-pane fade" id="tab_d">
                        <div class="row">
                            <!-- Menu: Pastries -->
                            <h3 class="text-center">Pastries</h3>
                            <!-- column -->
                            <div class="col-md-6">
                                <div class="menu-body">
                                    <div class="menu-section">
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Small Chocolate cupake
                                            </div>
                                            <div class="menu-item-price">
                                                $5.5
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Vanilla Cupcake
                                            </div>
                                            <div class="menu-item-price">
                                                $7
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Special Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $12
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                CheeseCake
                                            </div>
                                            <div class="menu-item-price">
                                                $5.5
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Vanilla Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Forest Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                    </div>
                                    <!--/ menu section -->
                                </div>
                                <!-- / menu body -->
                            </div>
                            <!-- /col-md-6 -->
                            <!-- column -->
                            <div class="col-md-6">
                                <div class="menu-body">
                                    <div class="menu-section">
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                CheeseCake
                                            </div>
                                            <div class="menu-item-price">
                                                $5.5
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Vanilla Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Forest Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Boston Cream Pie
                                            </div>
                                            <div class="menu-item-price">
                                                $7
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Brownie
                                            </div>
                                            <div class="menu-item-price">
                                                $4
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                        <!-- Item starts -->
                                        <div class="menu-item">
                                            <div class="menu-item-name">
                                                Butter Cake
                                            </div>
                                            <div class="menu-item-price">
                                                $11
                                            </div>
                                            <div class="menu-item-description">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy.
                                            </div>
                                        </div>
                                        <!-- Item ends -->
                                    </div>
                                    <!--/ menu section -->
                                </div>
                                <!-- / menu body -->
                            </div>
                            <!-- /col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /tab-pane  -->
                </div>
                <!-- tab content -->
            </div>
            <!-- /col-md-12 -->
        </div>
        <!-- /container -->
    </section>
    <!-- /Section -->
    <!-- ==== Blog preview ==== -->
    <section id="blog-preview">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading">
                <h2>Latest Products</h2>
            </div>
            <div class="col-md-12">
                <div id="owl-blog" class="owl-carousel">
                    @foreach ($products as $product)
                        <!-- ==== Product {{ $loop->iteration }} ==== -->
                        <div class="blog-prev border-dotted">
                            <!-- image -->
                            <img src="{{ $product->Image }}" alt="{{ $product->Nom }}" class="img-responsive" />
                            <!-- date -->
                            <div class="date">
                                <span class="day" style="background-color: white; color: black;">
                                    {{ $product->created_at->format('d') }}
                                </span>
                                <span class="month"
                                    style="background-color: white; color: black;">{{ $product->created_at->format('M') }}</span>
                            </div> <!-- caption -->
                            <div class="blog-caption">
                                <h5>{{ $product->Nom }}</h5>
                                <p>{{ $product->Description }}</p>
                                <p>Price: {{ $product->Prix }} TND</p>
                                <!-- Post Info -->

                                <!-- /text-center -->
                            </div>
                            <!-- /blog-caption -->
                        </div>
                        <!--/blog-prev -->
                    @endforeach
                </div>
                <!--/owl-blog -->
            </div>
            <!--/col-md-12 -->
        </div>
        <!--/container -->
    </section>


    <!--/section -->
    <!-- ==== Catering ==== -->
    <section id="catering" class="light-bg1" data-center="background-position: 0% 0px;"
        data-top-bottom="background-position: 0% -20px;" data-bottom-top="background-position: 0% -40px;">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading">
                <h2>Catering</h2>
            </div>
            <div class="col-md-12">
                <!-- Pricing Container -->
                <div class="pricing-container">
                    <div class="row">
                        <!-- Price table 1 -->
                        <div class="col-md-4" data-aos="fade-up" data-aos-duration="800">
                            <div class="pricing-table">
                                <div class="pricing-inner color1">
                                    <div class="plan-name">
                                        <p><i class="flaticon-cupcake-2 text-light"></i></p>
                                        <h4 class="text-light">Small Event</h4>
                                        <small>Ideal for 10 guests</small>
                                    </div>
                                    <!-- /plan-name -->
                                    <div class="plan-price-container">
                                        <p class="plan-price">99<sup><small>$</small></sup></p>
                                    </div>
                                    <!-- /plan-price -->
                                    <div class="plan-desc">
                                        <p>1 Small Cake</p>
                                        <p>10 Cupcakes</p>
                                        <p>10 Brownies</p>
                                        <p>10 Chocolate truffles</p>
                                        <p>10 Desserts of choice</p>
                                    </div>
                                    <!-- /plan-desc -->
                                    <!-- Button -->
                                    <div class="page-scroll">
                                        <a href="#contact">
                                            <div class="blob-btn">
                                                Contact Us
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
                                        <!-- /button ends -->
                                    </div>
                                    <!-- /page-scroll -->
                                </div>
                                <!-- /pricing-inner -->
                            </div>
                            <!-- /Pricing-table -->
                        </div>
                        <!-- /col-md-4 -->
                        <!-- Price table 2 -->
                        <div class="col-md-4 res-margin" data-aos="fade-up" data-aos-duration="1200">
                            <div class="pricing-table">
                                <div class="pricing-inner color2">
                                    <div class="plan-name">
                                        <p><i class="flaticon-birthday-cake-piece text-light"></i></p>
                                        <h4 class="text-light">Medium Event</h4>
                                        <small>Ideal for 20 guests</small>
                                    </div>
                                    <!-- /plan-name -->
                                    <div class="plan-price-container">
                                        <p class="plan-price">199<sup><small>$</small></sup></p>
                                    </div>
                                    <!-- /plan-price -->
                                    <div class="plan-desc">
                                        <p>1 Medium Cake</p>
                                        <p>20 Cupcakes</p>
                                        <p>20 Brownies</p>
                                        <p>20 Chocolate truffles</p>
                                        <p>20 Desserts of choice</p>
                                    </div>
                                    <!-- /plan-desc -->
                                    <!-- Button -->
                                    <div class="page-scroll">
                                        <a href="#contact">
                                            <div class="blob-btn">
                                                Contact Us
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
                                        <!-- /button ends -->
                                    </div>
                                    <!-- /page-scroll -->
                                </div>
                                <!-- /pricing-inner -->
                            </div>
                            <!-- /Pricing-table -->
                        </div>
                        <!-- /col-md-4 -->
                        <!-- Price table 3 -->
                        <div class="col-md-4 res-margin" data-aos="fade-up" data-aos-duration="1500">
                            <div class="pricing-table">
                                <div class="pricing-inner bg-primary">
                                    <div class="plan-name">
                                        <p><i class="flaticon-birthday-cake-1 text-light"></i></p>
                                        <h4 class="text-light">Big Event</h4>
                                        <small>Ideal for 30+ guests</small>
                                    </div>
                                    <!-- /Price-name -->
                                    <div class="plan-price-container">
                                        <p class="plan-price">299<sup><small>$</small></sup></p>
                                    </div>
                                    <!-- /plan-price -->
                                    <div class="plan-desc">
                                        <p>1 Big Cake</p>
                                        <p>40 Cupcakes</p>
                                        <p>40 Brownies</p>
                                        <p>40 Chocolate truffles</p>
                                        <p>40 Desserts of choice</p>
                                    </div>
                                    <!-- /plac desc -->
                                    <!-- Button -->
                                    <div class="page-scroll">
                                        <a href="#contact">
                                            <div class="blob-btn">
                                                Contact Us
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
                                        <!-- /button ends -->
                                    </div>
                                    <!-- /page-scroll -->
                                </div>
                                <!-- /pricing-inner -->
                            </div>
                            <!-- /Pricing-table -->
                        </div>
                        <!-- /col-md-4 -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /pricing-container -->
            </div>
            <!-- /col-md-12 -->
        </div>
        <!--/container -->
    </section>
    <!-- / section-->
    <!-- ==== Counter ==== -->
    <section id="counter-section" class="container-fluid border-shape bg-overlay">
        <div class="container text-light">
            <h3 class="text-center header-h3">Our Stats this Month</h3>
            <div id="counter" class="row">
                <!-- Counter -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter">
                        <i class="counter-icon flaticon-gingerbread"></i>
                        <!-- insert your final value on data-count= -->
                        <div class="counter-value" data-count="250">0</div>
                        <h5 class="title">Happy Customers</h5>
                    </div>
                    <!-- /counter -->
                </div>
                <!-- /col-lg -->
                <!-- Counter -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter">
                        <i class="counter-icon  flaticon-food-5"></i>
                        <!-- insert your final value on data-count= -->
                        <div class="counter-value" data-count="140">0</div>
                        <h5 class="title">Cakes Made</h5>
                    </div>
                    <!-- /counter -->
                </div>
                <!-- /col-lg -->
                <!-- Counter -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter">
                        <i class="counter-icon flaticon-electric-mixer"></i>
                        <!-- insert your final value on data-count= -->
                        <div class="counter-value" data-count="14">0</div>
                        <h5 class="title">Professionals</h5>
                    </div>
                    <!-- /counter -->
                </div>
                <!-- /col-lg -->
                <!-- Counter -->
                <div class="col-lg-3 col-md-6">
                    <div class="counter">
                        <i class="counter-icon flaticon-food-8"></i>
                        <!-- insert your final value on data-count= -->
                        <div class="counter-value" data-count="230">0</div>
                        <h5 class="title">Cupcakes baked</h5>
                    </div>
                    <!-- /counter -->
                </div>
                <!-- /col-lg -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- ==== Gallery ==== -->
    <section id="gallery" class="light-bg2 cake-ornament container-fluid">
        <!-- Section heading -->
        <div class="section-heading">
            <h2>Our Gallery</h2>
        </div>
        <div class="container">
            <!-- Polaroids -->
            <ul class="polaroids col-md-12">
                <!-- image1 -->
                <li class="polaroid-item col-lg-3 col-md-6 col-sm-6">
                    <a href="/ClientPublic/img/polaroid1.jpg">
                        <img alt="" src="/ClientPublic/img/polaroid1.jpg" class="img-responsive" />
                        <p>Delicious Cupcakes</p>
                    </a>
                </li>
                <!-- image2 -->
                <li class="polaroid-item col-lg-3 col-md-6 col-sm-6">
                    <a href="/ClientPublic/img/polaroid2.jpg">
                        <img alt="" src="/ClientPublic/img/polaroid2.jpg" class="img-responsive" />
                        <p>Our famous Petit four</p>
                    </a>
                </li>
                <!-- image3 -->
                <li class="polaroid-item col-lg-3 col-md-6 col-sm-6">
                    <a href="/ClientPublic/img/polaroid3.jpg">
                        <img alt="" src="/ClientPublic/img/polaroid3.jpg" class="img-responsive" />
                        <p>Birthday Cupcakes</p>
                    </a>
                </li>
                <!-- image4 -->
                <li class="polaroid-item col-lg-3 col-md-6 col-sm-6">
                    <a href="/ClientPublic/img/polaroid4.jpg">
                        <img alt="" src="/ClientPublic/img/polaroid4.jpg" class="img-responsive" />
                        <p>Classic Xmas Cake</p>
                    </a>
                </li>
                <!-- image5 -->
                <li class="polaroid-item col-lg-3 col-md-6 col-sm-6">
                    <a href="/ClientPublic/img/polaroid5.jpg">
                        <img alt="" src="/ClientPublic/img/polaroid5.jpg" class="img-responsive" />
                        <p>Wedding Cake</p>
                    </a>
                </li>
                <!-- image6 -->
                <li class="polaroid-item col-lg-3 col-md-6 col-sm-6">
                    <a href="/ClientPublic/img/polaroid6.jpg">
                        <img alt="" src="/ClientPublic/img/polaroid6.jpg" class="img-responsive" />
                        <p>Our popular Fruit cake</p>
                    </a>
                </li>
                <!-- image7 -->
                <li class="polaroid-item  col-lg-3 col-md-6 col-sm-6">
                    <a href="/ClientPublic/img/polaroid7.jpg">
                        <img alt="" src="/ClientPublic/img/polaroid7.jpg" class="img-responsive" />
                        <p>Finishing a cake for a Birthday</p>
                    </a>
                </li>
                <!-- image8 -->
                <li class="polaroid-item col-lg-3 col-md-6 col-sm-6">
                    <a href="/ClientPublic/img/polaroid8.jpg">
                        <img alt="" src="/ClientPublic/img/polaroid8.jpg" class="img-responsive" />
                        <p>Cake pops for a birthday</p>
                    </a>
                </li>
                <!-- image9 -->
                <li class="polaroid-item col-lg-3 col-md-6 col-sm-6">
                    <a href="/ClientPublic/img/polaroid9.jpg">
                        <img alt="" src="/ClientPublic/img/polaroid9.jpg" class="img-responsive" />
                        <p>Classic NY Cheesecake</p>
                    </a>
                </li>
                <!-- image10 -->
                <li class="polaroid-item col-lg-3 col-md-6 col-sm-6">
                    <a href="/ClientPublic/img/polaroid10.jpg">
                        <img alt="" src="/ClientPublic/img/polaroid10.jpg" class="img-responsive" />
                        <p>Birthday Cake</p>
                    </a>
                </li>
                <!-- image11 -->
                <li class="polaroid-item col-lg-3 col-md-6 col-sm-6">
                    <a href="/ClientPublic/img/polaroid11.jpg">
                        <img alt="" src="/ClientPublic/img/polaroid11.jpg" class="img-responsive" />
                        <p>Brownie and ice cream</p>
                    </a>
                </li>
                <!-- image12 -->
                <li class="polaroid-item col-lg-3 col-md-6 col-sm-6">
                    <a href="/ClientPublic/img/polaroid12.jpg">
                        <img alt="" src="/ClientPublic/img/polaroid12.jpg" class="img-responsive" />
                        <p>Mini cream tarts with cherry</p>
                    </a>
                </li>
            </ul>
            <!-- /ul-polaroids -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section -->
    <!-- ==== Team ==== -->
    <section id="team">
        <div class="container">
            <!-- Section Heading -->
            <div class="section-heading">
                <h2>Our Team</h2>
            </div>
            <div class="col-lg-7">
                <h3>We make the magic happen</h3>
                <p>lacerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc
                    vel mauris ultricies, vest ibulum orci eget,Fusce mollis imperdiet interdum donec eget metus auguen
                    unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac s Li
                    Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica,
                    sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li
                    pronunciation e li plu commun vocabules. Omnicos directe al desirabilite de un nov lingua franca: On
                    refusa continuar payar custosi traductores. </p>
            </div>
            <!-- Parallax object -->
            <div class="parallax-object hidden-sm hidden-xs hidden-md "
                data-bottom-top="right:15%;margin-top:-100px;transform:rotate(-10deg);"
                data-top="transform:rotate(0deg);">
                <!-- Image -->
                <img src="/ClientPublic/img/bgcake1.png" alt="">
            </div>
            <div id="owl-team" class="margin1 owl-carousel">
                <div class="col-md-12">
                    <!-- team member 1 -->
                    <div class="our-team cake-ornament">
                        <!-- picture -->
                        <div class="pic">
                            <img src="/ClientPublic/img/team1.jpg" alt="">
                        </div>
                        <!-- member info -->
                        <div class="team-content">
                            <h3 class="title">Mary Jones</h3>
                            <span class="post">Owner</span>
                        </div>
                        <!-- Social icons -->
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                        <!--/ul  -->
                    </div>
                    <!-- /our-team -->
                </div>
                <!-- /col-md-12 -->
                <div class="col-md-12">
                    <!-- team member 2 -->
                    <div class="our-team cake-ornament">
                        <!-- picture -->
                        <div class="pic">
                            <img src="/ClientPublic/img/team2.jpg" alt="">
                        </div>
                        <!-- member info -->
                        <div class="team-content">
                            <h3 class="title">Lucas Jones</h3>
                            <span class="post">Co-Owner</span>
                        </div>
                        <!-- Social icons -->
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                        <!--/ul  -->
                    </div>
                    <!-- /our-team -->
                </div>
                <!-- /col-md-12 -->
                <div class="col-md-12">
                    <!-- team member 3 -->
                    <div class="our-team cake-ornament">
                        <!-- picture -->
                        <div class="pic">
                            <img src="/ClientPublic/img/team3.jpg" alt="">
                        </div>
                        <!-- member info -->
                        <div class="team-content">
                            <h3 class="title">Larissa Smith</h3>
                            <span class="post">Master Baker</span>
                        </div>
                        <!-- Social icons -->
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                        <!--/ul  -->
                    </div>
                    <!-- /our-team -->
                </div>
                <!-- /col-md-12 -->
                <div class="col-md-12">
                    <!-- team member 4 -->
                    <div class="our-team cake-ornament">
                        <!-- picture -->
                        <div class="pic">
                            <img src="/ClientPublic/img/team4.jpg" alt="">
                        </div>
                        <!-- member info -->
                        <div class="team-content">
                            <h3 class="title">Ana Carter</h3>
                            <span class="post">Baker</span>
                        </div>
                        <!-- Social icons -->
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                        <!--/ul  -->
                    </div>
                    <!-- /our-team -->
                </div>
                <!-- /col-md-12 -->
                <div class="col-md-12">
                    <!-- team member 5 -->
                    <div class="our-team cake-ornament">
                        <!-- picture -->
                        <div class="pic">
                            <img src="/ClientPublic/img/team5.jpg" alt="">
                        </div>
                        <!-- member info -->
                        <div class="team-content">
                            <h3 class="title">Mauris Smith</h3>
                            <span class="post">Baker</span>
                        </div>
                        <!-- Social icons -->
                        <ul class="social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                        <!--/ul  -->
                    </div>
                    <!-- /our-team -->
                </div>
                <!-- /col-md-12 -->
            </div>
            <!-- /owl-team -->
        </div>
        <!-- /container -->
    </section>
    <!--/ Section -->
    <!-- ==== Call to Action ==== -->
    <section id="call-to-action" class="border-shape container-fluid" data-0="background-position:100% 20px;"
        data-end="background-position:100% -40px">
        <div class="container">
            <div class="col-md-6 col-sm-6 col-centered well text-center">
                <h4>Visit us Today!</h4>
                <p>Lotam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi Suspendisse
                    a elementum anteu imperdiet et maecenas eu eros non nibh aliquet iaculis..</p>
                <!-- Button -->
                <div class="page-scroll">
                    <a href="#contact">
                        <div class="blob-btn no-margin-bottom">
                            Contact Us
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
                <!-- /page-scroll -->
            </div>
            <!-- /col-md-6 -->
        </div>
        <!-- /.container -->
    </section>
    <!-- / section-->
    <!-- ==== Contact ==== -->
    <section id="contact" class="container-fluid cake-ornament">
        <div class="container">
            <div class="col-lg-12">
                <!-- Section heading -->
                <div class="section-heading">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <!-- Contact icons -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="col-md-4">
                        <div class="contact-icon res-margin">
                            <!---icon-->
                            <i class="fa fa-envelope top-icon"></i>
                            <!-- contact-icon info-->
                            <div class="contact-icon-info">
                                <p class="subtitle">Send us a Message</p>
                                <p>Email address: <br /><a href="mailto:email@yoursite.com">email@yoursite.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- /contact-icon-->
                    <div class="col-md-4">
                        <div class="contact-icon res-margin">
                            <!---icon-->
                            <i class="fa fa-map-marker top-icon"></i>
                            <!-- contact-icon info-->
                            <div class="contact-icon-info">
                                <p class="subtitle">Visit our Location</p>
                                <p>St Anderson Street 123 <br /> New York</p>
                            </div>
                        </div>
                    </div>
                    <!-- /contact-icon-->
                    <div class="col-md-4">
                        <div class="contact-icon res-margin">
                            <!---icon-->
                            <i class="fa fa-phone top-icon"></i>
                            <!-- contact-icon info-->
                            <div class="contact-icon-info">
                                <p class="subtitle">Call us</p>
                                <p>Phone number: <br />(123) 456-789</p>
                            </div>
                        </div>
                        <!-- /contact-icon-->
                    </div>
                    <!-- /col-md-4-->
                </div>
                <!-- /col-lg -->
            </div>
            <div class="row margin1">
                <div class="col-md-5">
                    <h4>Get in touch with us</h4>
                    <p>Consectetur adipiscing elit Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit
                        libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.</p>
                    <div class="form-style" id="contact_form">
                        <!-- Contact Form -->
                        <!-- Form Starts -->
                        <div class="form-group">
                            <label>Name<span class="required">*</span></label>
                            <input type="text" name="name" class="form-control input-field" placeholder=""
                                required="">
                            <label>Email<span class="required">*</span></label>
                            <input type="email" name="email" class="form-control input-field" placeholder=""
                                required="">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control input-field" placeholder="">
                            <label>Message<span class="required">*</span></label>
                            <textarea name="message" id="message" class="textarea-field form-control" rows="4" placeholder=""
                                required=""></textarea>
                            <!-- Button -->
                            <button class="blob-btn" id="submit_btn">
                                Send Message
                                <span class="blob-btn__inner">
                                    <span class="blob-btn__blobs">
                                        <span class="blob-btn__blob"></span>
                                        <span class="blob-btn__blob"></span>
                                        <span class="blob-btn__blob"></span>
                                        <span class="blob-btn__blob"></span>
                                    </span>
                                </span>
                            </button>
                        </div>
                        <!-- Contact results -->
                        <div id="contact_results"></div>
                    </div>
                    <!--/Contact_form -->
                </div>
                <!-- / col-md-5-->
                <!-- Map with Reveal Box -->
                <div class="col-md-6 col-md-offset-1 revealedBox goLeft res-margin">
                    <!-- Map -->
                    <div class="contentBox" id="map-canvas"></div>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!--/col-lg-6  -->
            </div>
            <!--/row -->
        </div>
        <!-- /container-->
    </section>
    <!-- / section-->
    <!--============== Footer Starts ==============-->
    <svg id="curveUpColor" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%"
        height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C 20 0 50 0 100 100 Z" />
    </svg>
    <footer class="bg-primary">
        <div class="container">
            <div class="row text-center">
                <!-- social media and logo -->
                <div class="col-lg-4">
                    <h6 class="text-light">Opening Times</h6>
                    <ul class="ul-custom ul-no-margin text-light">
                        <li>Mon - fri: 9am-6pm</li>
                        <li>Weekends & Holidays: Closed</li>
                    </ul>
                </div>
                <!-- /row -->
                <div class="col-lg-4">
                    <a href="#page-top"><img src="/ClientPublic/img/white-logo.png" alt=""
                            class="img-responsive center-block"></a>
                </div>
                <div class="col-lg-4">
                    <!-- social-icons -->
                    <h6 class="text-light">Follow us</h6>
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
                    <p>Copyright © 2018 - Designed by <a href="http://www.ingridkuhn.com">Ingrid Kuhn</a></p>
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
    <!--============== //Footer Ends ==============-->

    <!-- Core JavaScript Files -->
    <script src="/ClientPublic/js/jquery.min.js"></script>
    <script src="/ClientPublic/js/bootstrap.min.js"></script>
    <!-- Main Js -->
    <script src="/ClientPublic/js/main.js"></script>
    <!-- Open street maps -->
    <script src="/ClientPublic/js/map.js"></script>
    <!-- MailChimp Validator -->
    <script src="/ClientPublic/js/mc-validate.js"></script>
    <!-- GreenSock -->
    <script src="/ClientPublic/js/layerslider/js/greensock.js"></script>
    <!-- LayerSlider Script files -->
    <script src="/ClientPublic/js/layerslider/js/layerslider.transitions.js"></script>
    <script src="/ClientPublic/js/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="/ClientPublic/js/layerslider/js/layerslider.load.js"></script>
    <!-- Other Plugins -->
    <script src="/ClientPublic/js/plugins.js"></script>
    <!-- Prefix Free CSS -->
    <script src="/ClientPublic/js/prefixfree.js"></script>
    <!-- Counter -->
    <script src="/ClientPublic/js/counter.js"></script>
</body>

</html>
