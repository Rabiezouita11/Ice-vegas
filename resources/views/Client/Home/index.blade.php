@extends('Client.Layouts.index')

@section('content')
    <!-- slider-area-start -->
    <section class="slider-area tpslider-delay">
        <div class="swiper-container slider-active">
            <div class="swiper-wrapper">
                <div class="swiper-slide ">
                    <div class="tpslider pt-90 pb-0 grey-bg" data-background="mongue.png">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xxl-5 col-lg-6 col-md-6 col-12 col-sm-6">
                                    <div class="tpslider__content pt-20">
                                        <span class="tpslider__sub-title mb-35"></span>
                                        <h2 class="tpslider__title mb-30" style="color: black">Savourez
                                            l'excellence glacée avec Ice Vegas.</h2>
                                        <p style="color: black">Un duel de saveurs délicieusement intense :
                                            pistache vs chocolat !<br> Quel sera votre coup de cœur?</p>
                                        <div class="tpslider__btn">
                                            <a class="tp-btn" href="#">Nos Collection</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7 col-lg-6 col-md-6 col-12 col-sm-6">
                                    <div class="tpslider__thumb p-relative pt-15">
                                        <img class="tpslider__thumb-img" src="3.png" alt="slider-bg">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="tpslider__arrow d-none  d-xxl-block">
                <button class="tpsliderarrow tpslider__arrow-prv"><i class="icon-chevron-left"></i></button>
                <button class="tpsliderarrow tpslider__arrow-nxt"><i class="icon-chevron-right"></i></button>
            </div>
            <div class="slider-pagination d-xxl-none"></div>
        </div>
    </section>
    <!-- slider-area-end -->
    {{-- @if (session('success'))
            <div class="alert alert-success mt-2 text-center">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger mt-2 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
    <!-- category-area-start -->
    <section class="category-area grey-bg pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="tpsection mb-35">

                        <h4 class="tpsection__title" style="color: black"> Produits Ice Vegas </h4>
                        <p style="color: black">"Découvrez notre sélection exclusive de produits pour répondre à
                            tous vos besoins"</p>
                    </div>
                </div>
            </div>
            <div class="swiper-container category-active">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                        <div class="swiper-slide">
                            <div class="category__item mb-30">
                                <div class="category__thumb fix mb-15">
                                    <a href="{{ route('products.show', $product->id) }}"><img src="{{ $product->Image }}"
                                            alt="{{ $product->Nom }}"></a>
                                </div>
                                <div class="category__content">
                                    <h5 class="category__title"><a
                                            href="{{ route('products.show', $product->id) }}">{{ $product->Nom }}</a>
                                    </h5>
                                    <span class="category__count">
                                        <p>Categorie: {{ $product->categorie->Nom }}</p>
                                        <!-- Display category name -->
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>







    <!-- category-area-end -->

    <!-- product-area-start -->
    <section class="product-area grey-bg pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="tpsection mb-35">
                        <h4 class="tpsection__sub-title">~Qui sommes nous~</h4>
                        <h4 class="tpsection__title tpfeature__title mb-25" style="color: black;">Ice Vegas</h4>
                        <p style="color: black;font-size: 20px">Un plaisir insatiable à chaque dégustation</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- product-area-end -->

    <!-- product-feature-area-start -->
    <section class="product-feature-area product-feature grey-bg pt-80 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="tpfeature__thumb p-relative pb-40">
                        <img src="image3.jpg" alt="">

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="tpproduct-feature p-relative pt-45 pb-40">
                        <div class="tpsection tpfeature__content mb-35">
                            <h4 class="tpsection__sub-title mb-0"></h4>
                            <h4 style="color: black;" class="tpsection__title tpfeature__title mb-25">Ice Vegas
                                <br>
                                Un plaisir insatiable à chaque dégustation
                            </h4>
                            <p>Bienvenue chez Ice Vegas, votre destination ultime pour une expérience glacée
                                incomparable. Nous sommes une marque premium de glaces industrielles, dédiés à
                                offrir des moments de plaisir et de fraîcheur inégalés à chaque bouchée.</p>
                        </div>
                        <div class="row">

                            <div class="col-lg-6 col-md-6">
                                <div class="tpfeature__box">


                                    <div class="tpfeature__btn">
                                        <a class="tp-btn-3" href="{{ route('Apropos') }}">Ice vegas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tpfeature__shape d-none d-md-block">
                            <img class="tpfeature__shape-three" src=".jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-feature-area-end -->

    <!-- banner-area-start -->

    <section class="category-area grey-bg pb-40">
        <div class="container">
            <h4 style="color:#96AE00 "> Explorez dès maintenant notre collection </h4>

            <div class="swiper-container category-active">

                <div class="swiper-wrapper">
                    @foreach ($categoriesALL as $categorie)
                        <div class="swiper-slide">
                            <div class="category__item mb-30">
                                <div class="category__thumb fix mb-15">
                                    <a href="{{ route('categories.show', ['category' => $categorie->Nom]) }}"><img
                                            src="{{ asset($categorie->Image) }}" alt="{{ $categorie->Nom }}"></a>
                                </div>
                                <div class="category__content">
                                    <h5 class="category__title"><a
                                            href="{{ route('categories.show', ['category' => $categorie->Nom]) }}">{{ $categorie->Nom }}</a>
                                    </h5>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <!-- banner-area-end -->

    <!-- product-area-start -->

    <!-- product-area-end -->

    <!-- product-coundown-area-start -->
    
    <!-- product-coundown-area-end -->

 
    <!-- blog-area-end -->

    <!-- feature-area-start -->

    <!-- feature-area-end -->
@endsection
