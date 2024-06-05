@extends('Client.Layouts.index')

@section('content')
<main>

    <!-- breadcrumb-area-start -->
    <div class="breadcrumb__area pt-5 pb-5">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="tp-breadcrumb__content">
                   <div class="tp-breadcrumb__list">
                      <span class="tp-breadcrumb__active"><a href="index.html">Acceuil</a></span>
                      <span class="dvdr">/</span>
                      <span>Contactez Nous</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- contact-area-start -->
 
    <!-- contact-area-end -->

    <!-- map-area-start -->
    <section class="map-area tpmap__box">
       <div class="container">
          <div class="row gx-0">
             <div class="col-lg-6 col-md-6 order-2 order-md-1">
     
                <div class="tpmap__wrapper">
                <iframe src="https://maps.google.com/maps?q=benarous&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
    ></iframe>                     
                   </div>
             </div>
             <div class="col-lg-6 col-md-6 order-1 order-md-2">
                <div class="tpform__wrapper pt-120 pb-80 ml-60">
                   <h4 class="tpform__title" style="color: black">Contactez Ice Vegas</h4>
                   <p>Nous sommes ravis d'entendre parler de vous ! Que vous ayez des questions, des commentaires ou des préoccupations, notre équipe est là pour vous aider.</p>
                   <div class="tpform__box">
                      <form action="#">
                         <div class="row gx-7">
                            <div class="col-lg-6">
                              
                               <div class="form-group">
                                   <div class="fxt-transformY-50 fxt-transition-delay-1">
                                       <input id="email"  placeholder="Nom*"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                      
                                   </div>

                               </div>
                            </div>
                            <br>
                            <div class="col-lg-6">
                               
                               <div class="fxt-transformY-50 fxt-transition-delay-1">
                                   <input id="email"  placeholder="Email *"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  
                               </div>
<br>
                            </div>
                            <div class="col-lg-6">

                               <div class="fxt-transformY-50 fxt-transition-delay-1">
                                   <input id="email"  placeholder="Votre sujet *"  type="Subject" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  
                               </div>
                              <br> 
                            </div>
                            <div class="col-lg-6">
                              
                               <div class="fxt-transformY-50 fxt-transition-delay-1">
                                   <input id="email"  placeholder="Télephone *"  type="Subject" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  
                               </div>
                            </div>
                            <div class="col-lg-12">
                               <div class="tpform__textarea">
                                  <textarea name="message" placeholder="Message"></textarea>
                                  <div class="tpform__textarea-check mt-20 mb-25">
                                     <div class="form-check">
                                        <label class="form-check-label" for="flexCheckDefault01">
                                        </label>
                                      </div>                                  
                                  </div>
                                  <button>Send message</button>
                               </div>
                               <br>
         
                            </div>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- map-area-end -->

    
    <!-- feature-area-start -->

    <!-- feature-area-end -->

 </main>
 @endsection