@extends('layouts.app')
@section('content')

<div class="py-5" style="background-color:#FCE2DB">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light display-4">About Us  </h2>
        <p class="font-italic text-muted mb-4">Uniq Beauty Store is an online store that serve skin care product to the customers. Customer can either explore more on various kind of skincare products, contact to ask about skin problem or any question related to skin care. Fulfill your demand is our command so feel free to look into our store.</p>
        <a href="/home" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="{{ asset('image_page/work.gif')}}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5  mx-auto"><img src="{{asset('image_page/MVC.png')}}" alt="" class="img-fluid mb-4 mb-lg-0 w-900" ></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Vision & Mission</h2>
        <p class="font-italic text-muted mb-4">
        <strong>Our Vision</strong> is to develop our business with excellence to become a leading website with local and international recognition to be accessible on buying goods on line and learning more about business on line.</br>

        <strong>Our Mission </strong> is to try our best to provide the users with an easy and quick accessibility to do business on line with their partners.
       
      </div>
    </div>
  </div>
</div> 

<div  style="background-color:#FCE2DB">
  <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-4 font-weight-light">Our team</h2>
        
      </div>
    </div>

    <div class="row d-flex justify-content-around">
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5 ">
        <div class="bg-white rounded shadow-sm py-5 px-5 "><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm mx-auto d-block ">
          <h5 class="mb-0">Manuella Nevoresky</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-5 "><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail mx-auto d-block">
          <h5 class="mb-0">Samuel Hardy</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-5"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail mx-auto d-block">
          <h5 class="mb-0">Tom Sunderland</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

     

    </div>
  </div>
</div>



@endsection