@extends('layouts.app')
@section("content")
<div class=" mt-5 container py-5" style="background-color:#FCE2DB">
   
              <!--Section: Content-->
            <section class="px-md-4 mx-md-5 text-center text-lg-left dark-grey-text " >

            <h3 class="font-weight-bold display-4 ">Contact Us</h3>
            <hr class="my-5">

            <!--Grid row-->
            <div class="row">

            <!--Grid column-->
            <div class="col-lg-5 col-md-12 mb-0 mb-md-0">

                <h4 class="font-weight-bold">Call or email</h4>

                <p class="text-muted mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                molestiae.</p>

                <p class="font-weight-bold">Support:</p>

                <p class="mb-2">+ 800 123 456</p>

                <p class="mb-2"><a href="#">Contact support</a></p>

                <p class="mb-4">Our technical support is available by phone or email from 11am to 11pm.</p>

                <p class="font-weight-bold">Sales:</p>

                <p class="mb-2">+ 900 123 456</p>

                <p class="mb-2"><a href="#">Contact sales</a></p>

                <p class="mb-4">Our sales team is available by phone or email from 11am to 11pm.</p>

                <p class="font-weight-bold">General inquiries:</p>

                <p class="mb-2"><a href="#">info@mycompany.com</a></p>


            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-7 col-md-12 mb-4 mb-md-0">

                <!--Grid row-->
                <div class="row">

                <!--Grid column-->
                <div class="col-md-6">

                    <!-- Material outline input -->
                    <div class="md-form md-outline mb-0">
                    <input type="text" id="form-first-name" class="form-control" placeholder="First name">
                    <!-- <label for="form-first-name">First name</label> -->
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">

                    <!-- Material outline input -->
                    <div class="md-form md-outline mb-0">
                    <input type="text" id="form-last-name" class="form-control" placeholder="Last name">
                    <!-- <label for="form-last-name">Last name</label> -->
                    </div>

                </div>
                <!--Grid column-->

                </div>
                <!--Grid row-->

                <!-- Material outline input -->
                <div class="md-form md-outline mt-3">
                <input type="text" id="form-company" class="form-control" placeholder="Company">
                <!-- <label for="form-company">Company name</label> -->
                </div>

                <!-- Material outline input -->
                <div class="md-form md-outline mt-3">
                <input type="email" id="form-email" class="form-control" placeholder="Example@gmail.com">
                <!-- <label for="form-email">E-mail</label> -->
                </div>

                <!-- Material outline input -->
                <div class="md-form md-outline mt-3">
                <input type="number" id="form-number" class="form-control" placeholder="(+855) 123 456 67">
                <!-- <label for="form-number">Phone</label> -->
                </div>

            

                <!-- Material outline input -->
                <div class="md-form md-outline mt-3">
                <input type="text" id="form-subject" class="form-control" placeholder="Subject">
                <!-- <label for="form-subject">Subject</label> -->
                </div>

                <!--Material textarea-->
                <div class="md-form md-outline mt-3">
                <textarea id="form-message" class="md-textarea form-control" rows="3" placeholder="How we can help ?"></textarea>
                <!-- <label for="form-message">How we can help?</label> -->
                </div>

                <button type="submit" class="btn btn-info btn-sm ml-0 mt-3">Submit<i class="far fa-paper-plane ml-2"></i></button>

            </div>
            <!--Grid column-->

            </div>
            <!--Grid row-->


            </section>
            <!--Section: Content-->
    
</div>


@endsection