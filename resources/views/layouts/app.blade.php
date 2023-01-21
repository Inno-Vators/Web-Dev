<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

    <title>XOVIYA</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top px-lg-5 mx-lg-5 p-0" style="z-index: 0; background:#FFFFFF" >
        <div class="container-fluid py-3">
          <a class="navbar-brand me-5 fs-4"href="/"><img src="{{asset('img/logo.png')}}" alt="" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" style="" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100%; ">
              <li class="nav-item mx-3">
                <a style="--bs-text-opacity: .8;" class="text-primary  nav-link active" href="#courses">Our Courses</a>
              </li>
              </li>
              <li class="nav-item mx-3">
                <a style="--bs-text-opacity: .8;" class="text-primary  nav-link" href="#facilities">Facilities</a>
              </li>
              </li>
              <li class="nav-item mx-3">
                <a style="--bs-text-opacity: .8;" class="text-primary  nav-link" href="#leaderboard">Leaderboards</a>
              </li>
              </li>
              <li class="nav-item mx-3">
                <a style="--bs-text-opacity: .8;" class="text-primary  nav-link" href="#news">News</a>
              </li>
              </li>
              <li class="nav-item mx-3">
                <a style="--bs-text-opacity: .8;" class="text-primary  nav-link" href="#team">Testimonal</a>
              </li>
              <li class="nav-item mx-3">
                <a style="--bs-text-opacity: .8;" class="text-primary  nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item mx-3">
                <a style="--bs-text-opacity: .8;" class="text-primary  nav-link" href="#contact">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <a href="/register" class="btn me-3">Register</a>
              <a href="/login" class="btn me-5">Login</a>

            </form>
          </div>
        </div>
    </nav>

    @yield('content')




    <footer class="mt-5">
        <div class=" text-light"  style="background-color: #000;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <ul class="mt-5" style="list-style: none">
                            <p><strong>CONTENT</strong></p>
                            <li>Calender of festivities</li>
                            <li>New assets</li>
                            <li>The most popular content</li>
                            <li>Search trends</li>
                            <li>Blog</li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <ul class="mt-5" style="list-style: none">
                            <p><strong>INFORMATION</strong></p>
                            <li>Pricing</li>
                            <li>About us</li>
                            <li>Business</li>
                            <li>Jobs</li>
                            <li>Sell your content</li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <ul class="mt-5" style="list-style: none">
                            <p><strong>LEGAL</strong></p>
                            <li>Terms and conditions</li>
                            <li>License agreement</li>
                            <li>Privacy policy</li>
                            <li>Copyright information</li>
                            <li>Cookies policy</li>
                            <br>
                            <p><strong>SUPPORT</strong></p>
                            <li>FAQ</li>
                            <li>Contact</li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="mt-5">
                            <p><strong>SOCIAL MEDIA</strong></p>
                            <span id="footer-icon" class="mx-2"><i class="bi bi-facebook"></i></span>
                            <span id="footer-icon" class="mx-2"><i class="bi bi-whatsapp"></i></span>
                            <span id="footer-icon" class="mx-2"><i class="bi bi-instagram"></i></span>
                            <span id="footer-icon" class="mx-2"><i class="bi bi-twitter"></i></span>
                            <span id="footer-icon" class="mx-2"><i class="bi bi-telegram"></i></span>
                            <p>Get exclusive assets sent straight to your inbox</p>
                            <a class="btn btn-sm text-light mt-1 mb-2" href="{{ route('register') }}" style="background-color: #8482FF;">Sign up</a>
                            <a class="btn btn-sm text-light mt-1 mb-2" href="{{ route('login') }}" style="background-color: #8482FF;">Sign In</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>









  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
