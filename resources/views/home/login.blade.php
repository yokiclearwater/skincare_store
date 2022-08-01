@extends('home.master')
@section("login")
<div class="container my-5 pt-5">
            <div class="col-10 col-md-6 col-lg-4 m-auto">
                <div class="card border-5px shadow" >
                    <div class="card-body">
                    <h2 class="text-muted ms-1"> Login </h2>
                        <form action="login" method="POST" >
                            @csrf
                            <input type="email" name="email" id="" class="form-control my-4 py-2" placeholder="Email" required>
                            <input type="password" name="password" id="" class="form-control my-4 py-2" placeholder="Password" required>
                            <div class="text-center mt-3">
                                <button name="submit" class="btn btn-secondary mb-3"> Login</button><br>
                                Don't have an acconunt?
                                <a href="register.php" class=" nav-link link-primary ">Register Here</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </div>
@endsection
