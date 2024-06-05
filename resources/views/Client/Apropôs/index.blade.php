
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
                   <p >Ice Vegas, Depuis 2019, est l'aboutissement d'une passion dévorante pour les glaces. 
                     Nous sommes une équipe d'artisans glaciers animés par l'envie de vous faire partager notre amour pour ces créations fraîches et gourmandes.

                     <br> 
                     offrir des glaces d'exception à tous les gourmands </p>
                   
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
                  
                      <h3 class="tpabout__inner-title-2 mb-25" style="color: black">Nos Valeurs
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
    <br>
    <section class="video-area pt-80 pb-50">
       <div class="container">
          <div class="row">
             <div class="col-lg-12 text-center">
                <div class="tpsection mb-35">
                   <h4 class="tpsection__sub-title"></h4>
                   <h4 class="tpsection__title"></h4>
                </div>
             </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
               <div class="tpvideo__bg p-relative mb-25">
                   <img src="assets/img/banner/video-bg-1.jpg" alt="Video Background">
                   <div class="tpvideo__video-btn">
                     <video width="100%" controls autoplay muted>
                        <source src="{{ asset('ICE VEGAS FLOWER-1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    
                   </div>
               </div>
           </div>
           
           
       
          </div>
        
       </div>
       <br>
    </section>
    <!-- video-area-end -->

    <!-- choose-area-start -->
    <section class="choose-area tpchoose__bg pb-80 grey-bg">
       <div class="container">
          <div class="row">
             <div class="col-lg-12 text-center">
                <div class="tpsection mb-35 pt-75">
                   <h4 class="tpsection__sub-title" style="color: black" >~ Pourquoi nous choisir ? ~</h4>
                   <br>
                   <h4 class="tpsection__title" style="color: black">
                     
                     Ce qui nous rend différents </h4>
                   <p></p>
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
                      <h4 class="tpchoose__title" style="color: black" >CONVIENT AUX VÉGÉTARIENS
                     </h4>
                      <p></p>
                      <a href="#" class="tpchoose__details d-flex align-items-center justify-content-center"><i class="icon-chevrons-right"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tpchoose__item text-center mb-30">
                   <div class="tpchoose__icon mb-20">
                      <img src="assets/img/icon/choose-icon2.svg" alt="">
                   </div>
                   <div class="tpchoose__content">
                      <h4 class="tpchoose__title" style="color: black" >Qualité supérieure</h4>
                      <p></p>
                      <a href="#" class="tpchoose__details d-flex align-items-center justify-content-center"><i class="icon-chevrons-right"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tpchoose__item text-center mb-30">
                   <div class="tpchoose__icon mb-20">
                      <img src="assets/img/icon/choose-icon3.svg" alt="">
                   </div>
                   <div class="tpchoose__content">
                      <h4 class="tpchoose__title" style="color: black" >BÂTONNETS EN BOIS ISSUS DE SOURCE RESPONSABLE
                     </h4>
                      <p>.</p>
                      <a href="#" class="tpchoose__details d-flex align-items-center justify-content-center"><i class="icon-chevrons-right"></i></a>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="tpchoose__item text-center mb-30">
                   <div class="tpchoose__icon mb-20">
                      <img src="assets/img/icon/choose-icon4.svg" alt="">
                   </div>
                   <div class="tpchoose__content">
                      <h4 class="tpchoose__title" style="color: black" >Produits 100 % Bio</h4>
                      <p></p>
                      <a href="#" class="tpchoose__details d-flex align-items-center justify-content-center"><i class="icon-chevrons-right"></i></a>
                   </div>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-12">
                <div class="tpproduct__all-item text-center pt-15">
                   <span> 
                      <a href="#"> <i class="icon-chevrons-right"></i></a>
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