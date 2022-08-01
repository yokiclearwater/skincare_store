@extends('layouts.app')
@section('content')
<style>
  .cards:hover{

box-shadow: 5px 6px 6px 2px #e9ecef;
transform: scale(1.1);
}
</style>
<div class="py-5" style="background-color:#FCE2DB">
  <div class="container py-5">

    <div class="row align-items-center mb-5" >
      <div class="col-lg-5  mx-auto"><img src="{{asset('image_page/skincare.png')}}" alt="" class="img-fluid mb-4 mb-lg-0 w-900" ></div>
        <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
          <h2 class="font-weight-light">Vision & Mission</h2>
          <p class="font-italic text-muted mb-4">
              <strong>Our Vision</strong> is to develop our business with excellence to become a leading website with local and international recognition to be accessible on buying goods on line and learning more about business on line.</br>
              <strong>Our Mission </strong> is to try our best to provide the users with an easy and quick accessibility to do business on line with their partners.
          </p>
          <a href="/skincare" class="btn btn-light px-5 rounded-pill shadow-sm">Shop now</a>
        </div>
    </div>
    <div class="row align-items-center mb-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
       
            <div class="col">
                  <div class="card cards">
                    <img src="{{ asset('images/1658827679-KnHtFOWtcSifKfbAAtdGzp6dG8nz0Uho9xV82FEA.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                  <div class="card cards">
                    <img src="{{ asset('images/1658827679-KnHtFOWtcSifKfbAAtdGzp6dG8nz0Uho9xV82FEA.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                  <div class="card cards">
                    <img src="{{ asset('images/1658827679-KnHtFOWtcSifKfbAAtdGzp6dG8nz0Uho9xV82FEA.webp') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
            </div>
         
       </div>
    </div>
    <div class="row align-items-center mb-5">
        <div class="col-lg-5  mx-auto"><img src="{{asset('image_page/shoping.png')}}" alt="" class="img-fluid mb-4 mb-lg-0 w-900" ></div>
          <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
            <h2 class="font-weight-light">Vision & Mission</h2>
            <p class="font-italic text-muted mb-4">
              <strong>Our Vision</strong> is to develop our business with excellence to become a leading website with local and international recognition to be accessible on buying goods on line and learning more about business on line.</br>

              <strong>Our Mission </strong> is to try our best to provide the users with an easy and quick accessibility to do business on line with their partners.
            </p>
            <a href="/home" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
        </div>
    </div>

  </div>
</div> 
@endsection
