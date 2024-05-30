@extends('Client.Layouts.index')

@section('content')

<section class="category-area grey-bg pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="tpsection mb-35">
                    <h4 class="tpsection__title" style="color: black">Résultats de recherche pour: "{{ $query }}"</h4>
                    <p style="color: black">"Découvrez notre sélection exclusive de produits pour répondre à tous vos besoins"</p>
                </div>
            </div>
        </div>
        <div class="swiper-container category-active">
            <div class="swiper-wrapper">
                @if($products->isEmpty())
                    <div class="swiper-slide">
                        <div class="category__item mb-30">
                            <div class="category__content">
                                <p>Aucun produit trouvé.</p>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($products as $product)
                        <div class="swiper-slide">
                            <div class="category__item mb-30">
                                <div class="category__thumb fix mb-15">
                                    <a href="{{ route('products.show', $product->id) }}">
                                        <img src="{{ $product->Image }}" alt="{{ $product->Nom }}">
                                    </a>
                                </div>
                                <div class="category__content">
                                    <h5 class="category__title">
                                        <a href="{{ route('products.show', $product->id) }}">{{ $product->Nom }}</a>
                                    </h5>
                                    <span class="category__count">
                                        <p>Categorie: {{ $product->categorie->Nom }}</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
