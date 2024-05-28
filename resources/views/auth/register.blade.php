<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="LoginRegister/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="LoginRegister/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="LoginRegister/font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="LoginRegister/style.css">
</head>

<body>
    <style>
        /* Styling for the video background */
        .fxt-video-background {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
            z-index: -1;
            /* Ensures the video stays behind other content */
        }

        .fxt-video {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            overflow: hidden;
        }

        #fxtVideo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ensures the video covers the entire container */
        }
    </style>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout24">
        <!-- Video Area Start Here -->
        <div class="fxt-video-background">
            <div class="fxt-video">
                <video id="fxtVideo" autoplay muted loop>
                    <source src="LoginRegister/ICE VEGAS GAMME COMPLETE 26-01-2021.mp4" type="video/mp4">
                    <!-- You can include additional source tags for other video formats if needed -->
                    Your browser does not support the video tag.
                </video>
            </div>
                    
        </div>
        <!-- Video Area Start Here -->
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-3 col-12">
                    <div class="fxt-header">
                        <a href="login-24.html" class="fxt-logo"><img src="LoginRegister/img/image.png" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="fxt-content">
                        <h2>Créer un nouveau compte</h2>
                        <div class="fxt-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="votre nom" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="votre email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="votre mot de passe" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirmé mot de passe" required autocomplete="password-confirm">


                                        <i toggle="#password-confirm" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" placeholder="votre telephone" required autocomplete="telephone">
                                        @error('telephone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                                        <div class="fxt-checkbox-area">
                                            <div class="checkbox">
                                                <input id="checkbox1" type="checkbox">
                                                <label for="checkbox1">Keep me logged in</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <button type="submit" class="fxt-btn-fill">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="fxt-footer">
                            <div class="fxt-transformY-50 fxt-transition-delay-9">
                                <p>Avez-vous déjà un compte ?<a href="{{route('login')}}" class="switcher-text2 inline-text">Log in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="LoginRegister/js/jquery-3.5.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="LoginRegister/js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="LoginRegister/js/imagesloaded.pkgd.min.js"></script>
    <!-- YouTube js -->
    <!-- Validator js -->
    <script src="LoginRegister/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="LoginRegister/js/main.js"></script>

</body>

</html>