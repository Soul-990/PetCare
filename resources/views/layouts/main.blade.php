@section('home', 'color: lime; font-weight: 900;')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('Main/tailwag-main/css/style.min.css')}}" />
     <link rel="stylesheet" href="{{asset('Main/tailwag-main/css/style.main.css')}}" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
     <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  </head>

   <body>
    <nav>
      <div class="container">
        <div class="logo">
          <a href="{{ route('welcome') }}" class="petcare-logo">
    <span class="petcare-icon">
        <i class="fas fa-paw"></i>
    </span>
    <span class="petcare-text">
        <span class="pet">Pet</span><span class="care">Care</span>
    </span>
</a>
            </div>
        <ul id="nav__items">
          <li><a href="{{ route('welcome') }}" style="@yield('home')">Home</a></li>
          <li><a href="{{ route('about')}}" style="@yield('about')">About</a></li>
          <li><a href="{{route('products')}}" style="@yield('products')">Products</a></li>
          <li><a href="{{ route('care') }}" style="@yield('care')">Care Tips</a></li>
          <li><a href="{{route('adopt')}}" style="@yield('adopt')">Adopt</a></li>
          @if (isset(Auth::user()->id))
          <li><a href="{{ route('home') }}" class="btn" style="padding: 10px 15px;">Dashboard</a></li>
          @else
          <li><a href="{{ route('login') }}" class="btn" style="padding: 10px 15px;">Login</a></li>
          <li><a href="{{ route('register') }}" class="btn" style="padding: 10px 15px;">Register</a></li>
          @endif
        </ul>

        <button id="open__nav-btn"><i class="bx bx-menu"></i></button>
        <button id="close__nav-btn"><i class="bx bx-x"></i></button>


      </div>
    </nav>

   
      @yield('content')
    

<footer>
<div class="container" style="padding-bottom: 40px">

  <article>
  <a href="{{ route('welcome') }}" style="font-size: 25px; color: lime; font-weight: 700">PetCare</a>
  <p>Discover the compassionate care for your pets at PetCare. Our dedicated team is committed to providing exceptional veterinary services and ensuring the well-being of your furry friends.</p>

</article>

<article>
  <h3>Support</h3>
  <a href="#">Privacy Policy</a>
  <a href="#">Cookie Policy</a>
  <a href="#">Purchasing Policy</a>
  <a href="#">Terms & Conditions</a>
  <a href="#">Career</a>
</article>


<article>
  <h3>Permalinks</h3>
  <a href="{{ route('welcome') }}">Home</a>
  <a href="{{ route('about')}}">About</a>
  <a href="{{route('products')}}">Products</a>
  <a href="{{ route('care') }}">CareTips</a>
  <a href="{{ route('adopt') }}">Adopt</a>
</article>

<article>
  <h3>Contact Us</h3>
  <p>Press</p>
  <p>FAQs</p>
<div class="footer__socials">
  <a href="#"><i class="bx bxl-linkedin"></i></a>
  <a href="#"><i class="bx bxl-twitter"></i></a>
  <a href="#"><i class="bx bxl-facebook"></i></a>
  <a href="#"><i class="bx bxl-instagram"></i></a>
</div>
</article>


</div>


    <script src="Main/tailwag-main/main.js" async></script>

    <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {

        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        breakpoints: {

            0: {
                slidesPerView: 1,
                spaceBetween: 15
            },

            768: {
                slidesPerView: 2,
                spaceBetween: 20
            },

            1024: {
                slidesPerView: 3,
                spaceBetween: 30
            }

        }

    });
</script>


</body>
</html>