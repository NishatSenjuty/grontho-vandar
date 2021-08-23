<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>laravelEcommerce</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>


   <div class="wrapper">

     {{--Navigation--}}

     <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container">

          <img src="{{URL::asset('/image/logo2.png')}}" alt="profile Pic" height="60" width="60">

  <a class="navbar-brand" href="#">গ্রন্থভান্ডার.Com</a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
     <a class="nav-link" href="{{ route('indexx')}}">Home <span class="sr-only">(current)</span></a>
   </li>







      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Authors
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">হুমায়ুন আহমেদ</a>
          <a class="dropdown-item" href="#">মুহাম্মদ জাফর ইকবাল</a>
          <a class="dropdown-item" href="#">জহির রায়হান</a>
          <a class="dropdown-item" href="#">আনিসুল হক</a>
          <a class="dropdown-item" href="#">ড্যান ব্রাউন</a>
          <a class="dropdown-item" href="#">ইমদাদুল হক মিলন</a>
          <a class="dropdown-item" href="#">সেলিনা হোসেন</a>
          <a class="dropdown-item" href="#">শওকত ওসমান</a>
          <a class="dropdown-item" href="#">আবুল আসাদ</a>
          <a class="dropdown-item" href="#">আনিসুজ্জামান</a>
          <a class="dropdown-item" href="#">রবীন্দ্রনাথ ঠাকুর</a>
          <a class="dropdown-item" href="#">কাজী নজরুল ইসলাম</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">অন্যান্য</a>
        </div>
      </li>




      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Books Catagories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">ইঞ্জিনিয়ারিং</a>
          <a class="dropdown-item" href="#">গল্প ও উপন্যাস</a>
          <a class="dropdown-item" href="#">এডমিশন</a>
          <a class="dropdown-item" href="#">ইসলামিক</a>
          <a class="dropdown-item" href="#">সায়েন্স ফিকশন</a>
          <a class="dropdown-item" href="#">অনুবাদ</a>
          <a class="dropdown-item" href="#">মেডিকেল</a>
          <a class="dropdown-item" href="#">নন-ফিকশন</a>
          <a class="dropdown-item" href="#">ছোট গল্প</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">অন্যান্য</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Publisher
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">বাংলা একাডেমি</a>
          <a class="dropdown-item" href="#">বাতিঘর প্রকাশনী</a>
          <a class="dropdown-item" href="#">সময় প্রকাশনী</a>
          <a class="dropdown-item" href="#">প্রথমা প্রকাশনী</a>
          <a class="dropdown-item" href="#">সেবা</a>
          <a class="dropdown-item" href="#">পিয়ারসন</a>
          <a class="dropdown-item" href="#">বিভাস</a>
          <a class="dropdown-item" href="#">লেকচার</a>
          <a class="dropdown-item" href="#">অনুপম প্রকাশনী</a>
          <a class="dropdown-item" href="#">তাম্রলিপি</a>
          <a class="dropdown-item" href="#">পাঠক</a>
          <a class="dropdown-item" href="#">ইমদাদিয়া লাইব্রেরি</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">অন্যান্য</a>
        </div>
      </li>




     <li class="nav-item">
      <form class="form-inline my-2 my-lg-0" action="{!! route('search') !!}" method="get">
        <div class="input-group mb-3">
      <input type="text" class="form-control" name="search" placeholder="Search Book" aria-label="Recipient's username" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
      </div>
    </div>
      </form>
    </li>


        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            </li>
        @else
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('dashboard') }}">{{ __('dashboard') }}</a>

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>


                    <a class="dropdown-item" href="{{ route('dashboard') }}">

                        {{ __('My Dashboard') }}
                    </a>



                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    <img src="{{URL::asset('/image/logo3.png')}}" alt="Add To Cart" height="40" width="40">

      </ul>




  </div>
</div>
</nav>

<!--Start sidebar-->








<!--End sidebar-->



    @yield('content')
<footer class="footer-bottom">
  <p class="text-center">&copy; 2019 All Rights Reserved  | Ecommerce Site </p>




</footer>
   </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
