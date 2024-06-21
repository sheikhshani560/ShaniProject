
@extends('frontend.app')

@extends('frontend.header')


@section('Main')
    <div class="site-blocks-cover inner-page" style="background-image: url('{{asset('frontend/images/hero_1.jpg')}}');">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>Gallery</h1>
              <p>GENNEC HEALTH SCIENCS Pvt. Ltd established in 2020, is driven by a challenging and
                inspiring corporate philosophy, namely that of providing an innovative range of Nutraceutical, Herbal & Medicated Cosmetic products for its consumers. These include safe and
                effective health care products..</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <img src="{{ asset('public/images/Events/' . $images[0]) }}"  alt="Image placeholder" class="img-fluid rounded">
                {{-- <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span
                    class="icon-play"></span></a> --}}

              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">


            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">{{$Event ? $Event->Title : ''}}</h2>
            </div>
            <p>
              {{$Event ? $Event->Description : ''}}
               </p>

          </div>
        </div>
      </div>
    </div>



    <div class=" bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        @if($images)
        @foreach($images as $image)
        @if ($loop->iteration == 1)
          @else
          <div class="row mb-5">
            <div class="col-md-12 order-md-2">
              <div class="block-16">
                <figure>
                  <img src="{{ asset('public/images/Events/' . $image) }}" alt="Event Image" class="img-fluid rounded">

                </figure>
              </div>
            </div>

          </div>
          @endif
          @endforeach
          @endif
        </div>
      </div>

    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck text-primary"></span>
            </div>
            <div class="text">
              <h2>GENNEC HEALTH SCIENC Pvt. Ltd</h2>
              <p>GENNEC HEALTH SCIENC Pvt. Ltd is committed to providing top-Quality ingredients, starting even before the raw material comes through the door with our in-depth industry
                knowledge and distinguished vendor qualification program. Since Its inception, the company has focused on developing safe.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2 text-primary"></span>
            </div>
            <div class="text">
              <h2>Four Team comprises</h2>
              <p>Our Team comprises of immensely experienced marketing professionals who work in
                close coordination & collectively have lead us to the path of success. Manufacturing unit is
                located at an area more than 14000 Sq-ft equipped with state of the art machinery and
                testing laboratory.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help text-primary"></span>
            </div>
            <div class="text">
              <h2>GENNEC HEALTH SCIENC Pvt. Ltd</h2>
              <p>GENNEC HEALTH SCIENC Pvt. Ltd has complimentary production facilities, which comprises of Disinfectants, Tablet, Syrup, Capsule and Powder Section in Nutraceutical and Herbal
                division. And Sanitizer, Soap, Tooth paste, Depilatories, Cream, Lotion , shampoo & Aerosol in Medicated cosmetics. </p>
            </div>
          </div>
        </div>
      </div>
    </div>






  @endsection
