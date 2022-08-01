@extends('master')
@section("register")
<div class="container pt-5 ">
            <div class="col-10 col-md-6 col-lg-4 m-auto">
                <div class="card border-5px shadow" >
                    <div class="card-body">
                    <h2 class="text-muted ms-1"> SignUp </h2>
                        <form action="" method="POST">
                            <input type="text" name="username" id=""  class="form-control my-4 py-2" placeholder="Username" required>
                            <input type="email" name="email" id="" value="" class="form-control my-4 py-2" placeholder="Email">
                            <input type="phone" name="phone" id=""  class="form-control my-4 py-2" placeholder="Phone Number" required>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required />
                                <label class="form-check-label" for="female">Female</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required/>
                                <label class="form-check-label" for="male">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="others" value="Others" required />
                                <label class="form-check-label" for="others">#Others</label>
                            </div>
                            <input type="text" name="address" id=""  class="form-control my-4 py-2" placeholder="Address" required>
                            <input type="password" name="password" id=""  class="form-control my-4 py-2" placeholder="Password" required>
                            <div class="text-center mt-3">
                                <button name="submit" class="btn btn-primary mb-3">Submit</button><br>
                                Already have an account?
                                <a href="login.php" class="nav-link link-primary ">Login Here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
@endsection
