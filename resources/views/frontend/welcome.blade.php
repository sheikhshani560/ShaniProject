
@extends('frontend.app')

@extends('frontend.header')


@section('Main')


    <div class="site-blocks-cover" style="background-image: url('{{asset('frontend/images/hero_1.jpg')}}');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">

              <h1>Welcome To Gennec</h1>
              HEALTH SCIENCES (PVT.)LTD.
              <h2 class="sub-title">Energised Real Value Of Life</h2>
              <p>
                <a href="https://wa.link/muk22v" class="btn btn-primary px-5 py-3">Whatsapp</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="#" class="h-100">
                <h5>Free <br> Shipping</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h5>Season <br> Sale 50% Off</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                <h5>Buy <br> A Gift Card</h5>
                <p>
                  Amet sit amet dolor
                  <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                </p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div> --}}

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">POPULAR PRODUCTS( Toll manufacturing for hamdard pakistan )</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <span class="tag">Manufacturing</span>
            <img src="{{asset('frontend/images/product_01.png')}}" alt="Image">
            {{-- <h3 class="text-dark"><a href="{{route('shop-single')}}?image=``">Bioderma</a></h3> --}}
            {{-- <p class="price"><del>95.00</del> &mdash; $55.00</p> --}}
          </div>



          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <img src="{{asset('frontend/images/product_02.png')}}" alt="Image">
            {{-- <h3 class="text-dark"><a href="{{route('shop-single')}}?image=``">Chanca Piedra</a></h3> --}}
            {{-- <p class="price">$70.00</p> --}}
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
             <img src="{{asset('frontend/images/product_03.png')}}" alt="Image">
            {{-- <h3 class="text-dark"><a href="{{route('shop-single')}}?image=``">Umcka Cold Care</a></h3> --}}
            {{-- <p class="price">$120.00</p> --}}
          </div>

          <div class="col-sm-6 col-lg-4 text-center item mb-4">

            <img src="{{asset('frontend/images/product_04.png')}}" alt="Image">
            {{-- <h3 class="text-dark"><a href="{{route('shop-single')}}?image=``">Cetyl Pure</a></h3> --}}
            {{-- <p class="price"><del>45.00</del> &mdash; $20.00</p> --}}
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <img src="{{asset('frontend/images/product_05.png')}}" alt="Image">
            {{-- <h3 class="text-dark"><a href="{{route('shop-single')}}?image=``">CLA Core</a></h3> --}}
            {{-- <p class="price">$38.00</p> --}}
          </div>
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            {{-- <span class="tag">Sale</span> --}}
            <img src="{{asset('frontend/images/product_06.png')}}" alt="Image">
            {{-- <h3 class="text-dark"><a href="{{route('shop-single')}}?image=``">Poo Pourri</a></h3> --}}
            {{-- <p class="price"><del>$89</del> &mdash; $38.00</p> --}}
          </div>
        </div>
        {{-- <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="shop.html" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div> --}}
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Product Gallery</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="text-center item mb-4">
                 <img src="{{asset('frontend/images/Allproduct_01.png')}}" alt="Image">
                {{-- <h3 class="text-dark"><a href="{{route('shop-single')}}?image=``">Umcka Cold Care</a></h3> --}}
                {{-- <p class="price">$120.00</p> --}}
              </div>

              <div class="text-center item mb-4">
                 <img src="{{asset('frontend/images/Allproduct_02.png')}}" alt="Image">
                {{-- <h3 class="text-dark"><a href="{{route('shop-single')}}?image=``">Umcka Cold Care</a></h3> --}}
                {{-- <p class="price">$120.00</p> --}}
              </div>

              <div class="text-center item mb-4">
                 <img src="{{asset('frontend/images/Allproduct_03.png')}}" alt="Image">
                {{-- <h3 class="text-dark"><a href="{{route('shop-single')}}?image=``">Umcka Cold Care</a></h3> --}}
                {{-- <p class="price">$120.00</p> --}}
              </div>

              <div class="text-center item mb-4">
                 <img src="{{asset('frontend/images/Allproduct_04.png')}}" alt="Image">
              </div>

              <div class="text-center item mb-4">
                 <img src="{{asset('frontend/images/Allproduct_05.png')}}" alt="Image">
              </div>

              <div class="text-center item mb-4">
                <img src="{{asset('frontend/images/Allproduct_06.png')}}" alt="Image">
             </div>

             <div class="text-center item mb-4">
              <img src="{{asset('frontend/images/Allproduct_07.png')}}" alt="Image">
           </div>

           <div class="text-center item mb-4">
            <img src="{{asset('frontend/images/Allproduct_08.png')}}" alt="Image">
         </div>

         <div class="text-center item mb-4">
          <img src="{{asset('frontend/images/Allproduct_09.png')}}" alt="Image">
       </div>

       <div class="text-center item mb-4">
        <img src="{{asset('frontend/images/Allproduct_10.png')}}" alt="Image">
     </div>

     <div class="text-center item mb-4">
      <img src="{{asset('frontend/images/Allproduct_11.png')}}" alt="Image">
   </div>

   <div class="text-center item mb-4">
    <img src="{{asset('frontend/images/Allproduct_12.png')}}" alt="Image">
 </div>

 <div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_13.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_14.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_15.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_16.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_17.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_18.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_19.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_20.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_21.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_22.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_23.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_24.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_25.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_26.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_27.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_28.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_29.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_30.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_31.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_32.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_33.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_34.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_35.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_36.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_37.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_38.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_39.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_40.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_41.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_42.png')}}" alt="Image">
</div>

<div class="text-center item mb-4">
  <img src="{{asset('frontend/images/Allproduct_43.png')}}" alt="Image">
</div>



            </div>
          </div>
        </div>
<div class="row">

  <a href="{{route('shop-single')}}" class="btn btn-primary px-5 mx-auto py-3">View All</a>
</div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Events</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">
              @foreach (DB::table('events')->get() as $events)
                @php
                  $images = json_decode($events->Image);

                @endphp
              <div class="testimony">
                {{-- <blockquote> --}}
                    <a href="{{route('Gallery')}}?link={{$events->id}}">

                        <img src="{{$images ? asset('public/images/Events/' . $images[0])  : ''}}" alt="Image" class="img-fluid  mb-4 rounded-circle">
                    </a>
                  {{-- <p>&ldquo;CEO/CHAIRPERSON  GENNEC HEALTH SCIENCES PVT LTD CONTRACT SIGNING CEREMONY WITH HAMDARD PAKISTAN.&rdquo;</p> --}}
                {{-- </blockquote> --}}

                <p>&mdash; {{$events->Title}}</p>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="site-section bg-secondary bg-image" style="background-image: url('{{asset('frontend/images/bg_2.jpg')}}');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('{{asset('frontend/images/bg_1.jpg')}}');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('{{asset('frontend/images/bg_2.jpg')}}');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div> --}}


    {{-- <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>GENNEC HEALTH SCIENC Pvt. Ltd has complimentary production facilities, which comprises of Disinfectants, Tablet, Syrup, Capsule and Powder Section in Nutraceutical and Herbal
                division. And Sanitizer, Soap, Tooth paste, Depilatories, Cream, Lotion , shampoo & Aerosol in Medicated cosmetics. </p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">Nutraceutical Division</a></li>
              <li><a href="#">Herbal Division</a></li>
              <li><a href="#">Medicated &amp; Cosmetics</a></li>
              <li><a href="#">Veterinary Division</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">E-182, Phase II, SITE II, Super High way Ind, Zone, Karachi,</li>
                <li class="phone"><a href="tel://23923929210">+92 335 2089670</a></li>
                <li class="email">gennechealth@gmail.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://abbushah.online" target="_blank"
                class="text-primary">Abbushah</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div> --}}
    </footer>
@endsection
