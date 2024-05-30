
@extends('Client.Layouts.index')

@section('content')

<main>

    <!-- about-area-start -->
    <section class="about-area tpabout__inner-bg pt-175 pb-170 mb-50" data-background="img33.jpg">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="tpabout__inner text-center">
               
                   <h3 class="tpabout__inner-title mb-35"></h3>
                   <p>Over 25 years of experience, we have crafted thousands of strategic discovery process that <br> enables us to peel back the layers which enable us to understand, connect.</p>
                   
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- about-area-end -->

    <!-- about-area-start -->
    <section class="about-area pt-100 pb-60">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-6">
                <div class="tpabout__inner-thumb-2 p-relative mb-30">
                   <img src="logo.png" alt=""Height="500px" width="500px">
                   <div class="tpabout__inner-thumb-shape d-none d-md-block">
                      
                  
                   </div>
                </div>
             </div>
             <div class="col-lg-6">
                <div class="tpabout__inner-2 mb-30">
                   <div class="tpabout__inner-tag mb-10">
                      <span class="active"></span>
                      <span>Ice vegas</span>
                   </div>
                   <h3 class="tpabout__inner-title-2 mb-25" style="color:#96AE00 ">Savourez l'excellence glacée avec Ice Vegas
                      </h3>
                   <p>Plongez dans l'univers d'Ice Vegas et laissez-vous séduire par nos créations glacées. Que ce soit pour une pause gourmande, une célébration ou simplement pour le plaisir, Ice Vegas vous promet une expérience unique à chaque dégustation.

                       Merci de choisir Ice Vegas, où chaque glace est une aventure délicieuse.</p>
                  
                      <h3 class="tpabout__inner-title-2 mb-25">Nos Valeurs
                     </h3>
                      <div class="tpabout__inner-list">
                      <ul>
                         <li><i class="icon-check"></i> Qualité : Nous sélectionnons rigoureusement nos matières premières pour vous offrir des produits de la plus haute qualité.</li>
                         <li><i class="icon-check"></i>Innovation : Toujours à la recherche de nouvelles saveurs et de nouvelles textures pour surprendre et satisfaire nos clients.</li>
                         <li><i class="icon-check"></i> Éthique : Nous respectons des normes strictes de production durable et responsable, en minimisant notre impact environnemental.</li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <style>
       .pb-50{
           padding-bottom: 29px;
       }
       .pt-80{
           padding-top: 0px;
       }

    </style>
    <!-- about-area-end -->

    <!-- about-area-start -->
   
    <!-- about-area-end -->

    <!-- img-box-area-start -->
 
    <!-- img-box-area-end -->

    <!-- video-area-start -->
    <section class="video-area pt-80 pb-50">
       <div class="container">
          <div class="row">
             <div class="col-lg-12 text-center">
                <div class="tpsection mb-35">
                   <h4 class="tpsection__sub-title">~ Good Performance ~</h4>
                   <h4 class="tpsection__title">Our Working Ability</h4>
                   <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                </div>
             </div>
          </div>
          <div class="row">
           <div class="col-lg-12">
               <div class="tpvideo__bg p-relative mb-25">
                   <img src="assets/img/banner/video-bg-1.jpg" alt="Video Background">
                   <div class="tpvideo__video-btn">
                       <video width="100%" controls>
                           <source src="{{ asset('ICE VEGAS FLOWER-1.mp4') }}" type="video/mp4">
                           Your browser does not support the video tag.
                       </video>
                   </div>
               </div>
           </div>
       </div>
       
       <style>
       .tpvideo__video-btn video {
           width: 76%;
           border-radius: 10px; /* Add border radius if needed */
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow if needed */
       }
       </style>
       
          </div>
        
       </div>
    </section>
    <!-- video-area-end -->

    <!-- choose-area-start -->
    <section class="choose-area tpchoose__bg pb-80 grey-bg">
       <div class="container">
          <div class="row">
             <div class="col-lg-12 text-center">
                <div class="tpsection mb-35 pt-75">
                   <h4 class="tpsection__sub-title">~ Why choose us? ~</h4>
                   <h4 class="tpsection__title">What makes us different</h4>
                   <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tpchoose__item text-center mb-30">
                   <div class="tpchoose__icon mb-20">
                      <img src="assets/img/icon/choose-icon1.svg" alt="">
                   </div>
                   <div class="tpchoose__content">
                      <h4 class="tpchoose__title">100% Fresh Food</h4>
                      <p>Adjust global theme options and see design changes in real-time.</p>
                      <a href="#" class="tpchoose__details d-flex align-items-center justify-content-center">learn more<i class="icon-chevrons-right"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tpchoose__item text-center mb-30">
                   <div class="tpchoose__icon mb-20">
                      <img src="assets/img/icon/choose-icon2.svg" alt="">
                   </div>
                   <div class="tpchoose__content">
                      <h4 class="tpchoose__title">Premium Quality</h4>
                      <p>Adjust global theme options and see design changes in real-time.</p>
                      <a href="#" class="tpchoose__details d-flex align-items-center justify-content-center">learn more<i class="icon-chevrons-right"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tpchoose__item text-center mb-30">
                   <div class="tpchoose__icon mb-20">
                      <img src="assets/img/icon/choose-icon3.svg" alt="">
                   </div>
                   <div class="tpchoose__content">
                      <h4 class="tpchoose__title">100% Natural</h4>
                      <p>Adjust global theme options and see design changes in real-time.</p>
                      <a href="#" class="tpchoose__details d-flex align-items-center justify-content-center">learn more<i class="icon-chevrons-right"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tpchoose__item text-center mb-30">
                   <div class="tpchoose__icon mb-20">
                      <img src="assets/img/icon/choose-icon4.svg" alt="">
                   </div>
                   <div class="tpchoose__content">
                      <h4 class="tpchoose__title">100% Organic Goods</h4>
                      <p>Adjust global theme options and see design changes in real-time.</p>
                      <a href="#" class="tpchoose__details d-flex align-items-center justify-content-center">learn more<i class="icon-chevrons-right"></i></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-12">
                <div class="tpproduct__all-item text-center pt-15">
                   <span>Our nearly 1.4K committed staff members are ready to help. 
                      <a href="#">Help Center <i class="icon-chevrons-right"></i></a>
                   </span>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- choose-area-end -->

    <!-- testimonial-area-start -->
 
    <!-- testimonial-area-end -->

    <!-- feature-area-start -->
   
    <!-- feature-area-end -->

 </main>
@endsection