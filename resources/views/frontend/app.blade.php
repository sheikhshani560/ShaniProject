<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gennec &mdash; Health science (PVT.)LTD.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.1/sweetalert2.css" integrity="sha512-n1PBkhxQLVIma0hnm731gu/40gByOeBjlm5Z/PgwNxhJnyW1wYG8v7gPJDT6jpk0cMHfL8vUGUVjz3t4gXyZYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

</head>

<body>
  <div class="site-wrap">
@yield('Header')
@yield('Main')


<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

        <div class="block-7">
          <h3 class="footer-heading mb-4">About Us</h3>
          <p>GENNEC HEALTH SCIENCS Pvt. Ltd established in 2020, is driven by a challenging and
            inspiring corporate philosophy, namely that of providing an innovative range of Nutraceutical, Herbal & Medicated Cosmetic products for its consumers. These include safe and
            effective health care products.</p>
        </div>

      </div>
      <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
        <h3 class="footer-heading mb-4">List Of Sections Approved By DRAP</h3>
        <ul class="list-unstyled">
            <a href="#"><li class="qlink">Nutraceutical Division</li></a>
            <a href="#"><li class="qlink">Herbal Division</li></a>
            <a href="#"><li class="qlink">Veterinary Division</li></a>
            <a href="#"><li class="qlink">Medicated &amp; Cosmetics</li></a>
            <a href="#"><li class="qlink">Consumer Division</li></a>
        </ul>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="block-5 mb-5">
          <h3 class="footer-heading mb-4">Contact Info</h3>
          <ul class="list-unstyled">
            <li class="address">E-182, Phase II, SITE II, Super High way Ind, Zone, Karachi,</li>
            <li class="phone"><a href="tel://23923929210">+92 335 2089670</a></li>
            <li class="email"> gennechealth@gmail.com </li>
          </ul>
        </div>


      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>document.write(new Date().getFullYear());</script> All rights reserved | This WebSite is made
          with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://abbushah.online" target="_blank"
            class="text-primary">Abbushah</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>

    </div>
  </div>
</footer>

  </div>
  <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
  <script src="{{asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend/js/aos.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.11.1/sweetalert2.min.js" integrity="sha512-Ozu7Km+muKCuIaPcOyNyW8yOw+KvkwsQyehcEnE5nrr0V4IuUqGZUKJDavjSCAA/667Dt2z05WmHHoVVb7Bi+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{asset('frontend/js/main.js')}}"></script>
<script>
  $(document).ready(function () {
    $('.qlink').click(function (e) {
      e.preventDefault();
      var linkname =$(this).text();
      if (linkname == 'Nutraceutical Division') {
        Swal.fire(
        linkname,
        `<ul class="text-left ml-5">
          <li>Milk supplement section </li>
          <li>Nutraceutical syrup section</li>
          <li>Nutraceutical sachet sachet</li>
          <li>Nutraceutical tablet section</li>
          <li>Nutraceutical drops section</li>
          <li>Soft gelatin section</li>
          <li>Nutraceutical capsule section</li>
          <li>Ointment section</li>
          <li>Probiotic section ( powder )</li>
          </ul>
        `,
      )
    }else if(linkname == 'Herbal Division'){
      Swal.fire(
        linkname,
        `<ul class="text-left ml-5">
          <li>Herbal syrup section </li>
          <li>Herbal powder section</li>
          <li>Herbal tablet section</li>
          <li>Herbal extracts section</li>
          <li>Herbal liquid sachet section </li>
          <li>Herbal oils section </li>
          <li>Herbal capsule section </li>
          <li>Herbal Marham section </li>
          <li>Herbal joshanda section section </li>

          </ul>
        `,
      )


  }else if(linkname == 'Veterinary Division'){
      Swal.fire(
        linkname,
        `<ul class="text-left ml-5">
          <li>Veterinary powder section </li>
          <li>Veterinary liquid section</li>


          </ul>
        `,
      )

    }else if(linkname == 'Medicated & Cosmetics'){
      Swal.fire(
        linkname,
        `<ul class="text-left ml-5">
          <li>Creams </li>
          <li>Facewash </li>
          <li>Lotions</li>
          <li>Pastes </li>
          <li>Sunblock </li>
          <li>Serums </li>
          <li>Facial masks</li>


          </ul>
        `,
      )

    }else if(linkname == 'Consumer Division'){
      Swal.fire(
        linkname,
        `<ul class="text-left ml-5">
             <li>Toothpastes  </li>
             <li>Mouthwashes  </li>
             <li>OTC items </li>


          </ul>
        `,
      )
    }

    });

  });
</script>
</body>

</html>
