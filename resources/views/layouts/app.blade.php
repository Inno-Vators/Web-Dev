<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

    <title>Blog</title>
</head>
<body>

    <div class="div">

    <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand text-light fs-1" href="/">IIZIT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/about_us">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/contact_us">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="/register">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="/login">Login</a>
        </li>
      </ul>
      <form class="d-flex">

      </form>
    </div>
  </div>
</nav>
        @yield('content')
        @yield('posts')

<div class="bg-info">
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="/" class="nav-link px-2 text-light">Home</a></li>
      <li class="nav-item"><a href="/about_us" class="nav-link px-2 text-light">About Us</a></li>
      <li class="nav-item"><a href="/about_us" class="nav-link px-2 text-light">Contact Us</a></li>
      {{-- <li class="nav-item"><a href="#" class="nav-link px-2 text-light">About</a></li> --}}
    </ul>
    <li class="nav-item"><a href="/about_us" class="nav-link px-2 text-light text-center"><small>Terms and Condition</small> </a></li>
    <p class="text-center text-light">© 2023 IIZIT, Inc</p>
  </footer>
</div>
</div>

    </div>







  <!-- JavaScript Bundle with Popper -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/scripts.js')}}"></script>
</body>

</html>
