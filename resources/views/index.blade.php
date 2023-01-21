@extends('layouts.app')



@section('content')
    <section id="courses">
        <div class="container" id="heros" style="background-image: url({{asset('img/Group_354.png')}})">
            <div class="row">
                {{-- <img src="{{asset('img/Group 354.png')}}" class="mt-lg-5 mt-md-5 mt-5 me-lg-5 me-md-5 me-5 img-fluid" id="hero-img" alt=""> --}}
                <div class="col-xlg-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 mt-lg-5" id="hero-text">
                    <h1 class="fs-1 mt-lg-5 mt-md-5 mt-5"><strong style="font-size: 1.5em;">Gamifying <br> Learning In <br> Technology</strong></h1>
                    <p class="fs-5 mt-1 text-primary" style="--bs-text-opacity: .7;">Learn and Grow into mastery as <br> you acquire skills while having fun</p>
                    <span class="hero123"><button class="btn text-light mb-5 w-40" style="background-color: #8482FF; width: 30%">Get Started</button><img src="{{asset('img/Vector 72.png')}}" class="img-fluid ms-2 mb-5" width="100" alt=""></span>
                </div>

                <div class="col-xlg-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <img src="{{asset('img/pics.png')}}" class="img-fluid" alt="" id="img1">
                    <br>
                    <span class="buttons">
                        <button class="btn btn-light text-start mx-1" id="btn1">Learn <i id="learn"><img class="icons" src="{{asset('img/zondicons_education.svg')}}" alt="" class="img-fluid"></i></button>

                        <button class="btn btn-light text-start mx-1" id="btn2">Connect <i id="learn"><img class="icons" src="{{asset('img/grommet-icons_technology.svg')}}" alt="" class="img-fluid"></i></button>

                        <button class="btn btn-light text-start mx-1" id="btn3">Reward <i id="learn"><img class="icons" src="{{asset('img/fa6-solid_medal.svg')}}" alt="" class="img-fluid"></i></button>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section id="facilities">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="section2">
                    <p class="fs-6 fw-bolder">GET OUR APP</p>
                    <h1><strong>Build Your Career in <br> Tech From Your <br> Smart Phone</strong></h1>
                    <p style="color: #8482FF;">
                        Get outstanding courses withing the tech space <br> and begin your tech career using our XOVIYA App
                    </p>
                    <button class="btn text-light mt-1" style="background-color: #8482FF;">Download for Android</button>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="{{asset('img/Other 17.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="leaderboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="track">
                    <p class="fs-6 fw-bolder">TRACK YOUR LEARNING PROGRESS</p>
                    <h1><strong>Build-in Analytic to <br> Track Your Growth</strong></h1>
                    <p style="color: #8482FF;">
                        Top thr community leaderboard, get reward <br> and shareprogress with friends on social media.
                    </p>
                    <button class="btn text-light mt-1" style="background-color: #8482FF;">View Leaderboard</button>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="{{asset('img/Other 18.png')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="news">
        <div class="container shadow-lg py-5" id="card">

            <p class="text-center"><strong>ARE YOU READY?</strong></p>
            <h1 class="text-center" style="text-shadow: 5px 5px 5px #a0a0a040; color:#000000">Begin Your Tech <br> Career Now.</h1>
            <button id="sign" class="btn text-light my-5 col-2 offset-5" href="{{ route('register') }}" style="background-color: #8482FF;">Sign Up</button>

        </div>
    </section>

    <section id="team">
        <div class="container">
            <h1 class="text-center mt-5">Testimonal</h1>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-5 text-center">
                    <img class="img-fluid rounded-circle" src="{{asset('assets/img/avatars/avatar1.jpeg')}}" alt="" id="testimonal-img">
                    <div class="card-body card shadow border-start-primary py-2" style="background-color: #8482FF; z-index:-3;">
                        <div class="pt-5">

                            <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident cum ducimus repudiandae molestiae, sed odio inventore incidunt voluptates aperiam consequuntur vel beatae vero dolorum nihil?</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-5 text-center">
                    <img class="img-fluid rounded-circle" src="{{asset('assets/img/avatars/avatar2.jpeg')}}" alt="" id="testimonal-img">
                    <div class="card-body card shadow border-start-primary py-2" style="background-color: #8482FF; z-index:-3;">
                        <div class="pt-5">
                            <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident cum ducimus repudiandae molestiae, sed odio inventore incidunt voluptates aperiam consequuntur vel beatae vero dolorum nihil?</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mt-5 text-center">
                    <img class="img-fluid rounded-circle " src="{{asset('assets/img/avatars/avatar4.jpeg')}}" alt="" id="testimonal-img">
                    <div class="card-body card shadow border-start-primary py-2" style="background-color: #8482FF; z-index:-3;">
                        <div class="pt-5">

                            <p class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident cum ducimus repudiandae molestiae, sed odio inventore incidunt voluptates aperiam consequuntur vel beatae vero dolorum nihil?</p>
                        </div>
                    </div>
                </div>

        </div>
    </section>

    <section id="about">
        <div class="container mt-5">
            <h1 class="text-center"><strong>About Us</strong></h1>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="{{asset('img/about.jpg')}}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <p class="">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam nostrum totam libero accusamus possimus mollitia sequi eaque quia maxime dignissimos voluptatibus repudiandae voluptatem non voluptas, aut amet voluptates nulla est quo cumque nemo modi. Minus, perspiciatis iste necessitatibus consequuntur porro voluptatum ipsam! Vitae voluptatum perspiciatis expedita beatae minima iste illo corporis itaque rem, voluptas quo provident aut ea autem eveniet reiciendis delectus alias tempora vel sequi! Saepe earum nulla dignissimos fuga aliquid, et placeat vero optio similique rem facere esse sint modi consectetur impedit sapiente voluptatem facilis culpa laudantium hic recusandae. Culpa expedita repudiandae mollitia libero officiis quaerat veritatis accusantium!.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id="contact">
        <div class="container mt-5">
            <form action="mailto:oduahmichaelebuka@gmial.com">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button class="btn btn-sm btn-outline-info">Send Message</button>
            </form>
        </div>
    </section>

    <div class="">
        <a href="#courses">
            <i class="fa fa-chevron-up" id="topbtn"></i>
        </a>
    </div>
@endsection


