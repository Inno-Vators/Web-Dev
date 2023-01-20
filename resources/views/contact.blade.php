@extends('layouts.app')

@section('content')
<h1 class="text-center">Contact Us</h1>
  <div class="container my-5 pt-5">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <h2 class="text-info">Location:</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, esse.</p>

        <h2 class="text-info">Email:</h2>
        <p>michael@gmial.com</p>

        <h2 class="text-info">Call:</h2>
        <p>08146004569</p>

        <img src="./img/pic.jpg" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <form action="">
          <div class="row my-3">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <label for="exampleFormControlInput1" class="form-label">Your Name:</label>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <label for="exampleFormControlInput1" class="form-label">Your Email:</label>
              <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Subject:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
          </div>

          <button class="btn btn-outline-info w-100">Send Message</button>
        </form>


      </div>
    </div>
  </div>
@endsection
