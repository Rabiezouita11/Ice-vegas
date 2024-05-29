
@extends('Client.Layouts.index')

@section('content')

<main>

    <!-- blog-area-start -->
    <section class="blog-area pt-30">
        <div class="container-fluid">
            <div class="swiper-container blog-active-3">
                <div class="swiper-wrapper">
                    @foreach ($categoriesALL as $category)
                        <div class="swiper-slide">
                            <div class="tpblog__single p-relative">
                                <div class="tpblog__single-img">
                                    <img src="{{ asset($category->Image) }}" alt="{{ $category->Nom }}">
                                </div>
                                <div class="tpblog__single-text text-center">
                                    <div class="tpblog__entry-wap">
                                        <span class="cat-links"><a
                                                href="{{ route('categories.show', ['category' => $category->id]) }}">{{ $category->Nom }}</a></span>
                                        <span class="author-by"><a href="#">Admin</a></span>
                                        <span class="post-data"><a
                                                href="#">{{ $category->created_at->format('M d, Y') }}</a></span>
                                    </div>


                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

    <!-- blog-area-start -->
    <section class="blog-area pt-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-9">
                    <div class="tpblog__left-wrapper">
                        <div class="tpblog__left-item ">
                            <div class="row">

                                @foreach ($products as $product)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tpblog__item tpblog__item-2 mb-20">
                                            <div class="tpblog__thumb fix">
                                                <img src="{{ asset($product->Image) }}" class="card-img-top"
                                                    alt="{{ $product->name }}">
                                            </div>
                                            <div class="tpblog__wrapper">
                                                <div class="tpblog__entry-wap">
                                                    <span class="cat-links"><a
                                                            href="shop-details.html">Lifestyle</a></span>
                                                    <span class="author-by"><a href="#">Admin</a></span>
                                                    <span class="post-data"><a href="#">SEP 15.
                                                            2022</a></span>
                                                </div>


                                                <h4 class="tpblog__title"><a
                                                        href="{{ route('products.show', $product->id) }}">{{ $product->Nom }}</a>
                                                </h4>
                                                <p>{{ $product->Description }}</p>
                                                <div class="tpblog__details">
                                                    <a href="{{ route('products.show', $product->id) }}">Continue
                                                        reading <i class="icon-chevrons-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tpbasic__pagination pr-100">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="basic-pagination text-center mb-80">
                                        <nav>
                                            <ul>
                                                <li>
                                                    <span class="current">1</span>
                                                </li>
                                                <li>
                                                    <a href="blog.html">2</a>
                                                </li>
                                                <li>
                                                    <a href="blog.html">3</a>
                                                </li>
                                                <li>
                                                    <a href="blog.html">
                                                        <i class="icon-chevrons-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3">
                    <div class="tpblog__right-item pb-50">
                        <div class="sidebar__widget mb-30">
                            <div class="sidebar__widget-content">
                                <div class="sidebar__search">
                                    <form action="#">
                                        <div class="sidebar__search p-relative">
                                            <input type="text" placeholder="Search">
                                            <button type="submit"><i class="far fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__widget mb-40">
                            <h3 class="sidebar__widget-title mb-15">Blog Categories</h3>
                            <div class="sidebar__widget-content">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li>
                                         <a href="{{ route('categories.show', ['category' => $category->Nom]) }}">
                                            {{ $category->Nom }} <span>({{ $category->products_count }})</span>
                                        </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                       
                        <div class="sidebar__widget mb-55">
                            <h3 class="sidebar__widget-title mb-15">Tags</h3>
                            <div class="sidebar__widget-content">
                                <div class="tagcloud">
                                    <a href="blog-details.html">Ice vegas</a>
                                    <a href="blog-details.html">natural</a>
                                    
                                    <a href="blog-details.html">foods</a>
                                    <a href="blog-details.html">#AlimentationSaine
                                    </a>
                                    <a href="blog-details.html">#Sorbet
                                    </a>
                                    <a href="blog-details.html">ParfumsGlace </a>
                                    <a href="blog-details.html">fresh</a>
                                    <a href="blog-details.html">vegan</a>
                                    <a href="blog-details.html">#GlaceChocolat
                                    </a>
                                    <a href="blog-details.html">#GlaceBio
                                    </a>
                                    <a href="blog-details.html">fruits</a>
                                    <a href="blog-details.html">DélicesGivrés</a>
                                    <a href="blog-details.html">Tunis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

    <!-- feature-area-start -->
  
    <!-- feature-area-end -->

</main>

@endsection