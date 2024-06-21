
@section('Header')

<div class="site-navbar py-2">

  <div class="search-wrap">
    <div class="container">
      <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
      <form action="#" method="post">
        <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
      </form>
    </div>
  </div>

  <div class="container">
    <div class="d-flex align-items-center justify-content-between">
      <div class="logo">
        <div class="site-logo">
          <a href="{{route('home')}}" class="js-logo-clone"><img src="{{asset('assets/img/Logo/GennecLogo-2.png')}}" width="100vh" alt=""></a>
        </div>
      </div>
      <div class="main-nav
       d-none d-lg-block
       ">
        <nav class="site-navigation text-right text-md-center" role="navigation">
          <ul class="site-menu js-clone-nav
          d-none d-lg-block
          ">
            <li  class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>

            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{route('about')}}">About</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="icons">

        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
          class="icon-menu"></span></a>
      </div>
    </div>
  </div>
</div>
@endsection
