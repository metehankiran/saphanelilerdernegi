@extends('layouts.app')
@section('content')
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>My Account</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Account</li>
            </ul>
        </div>
    </div>
</section>


<div class="login pt-70 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="log-in-card">
                    <div class="default-section-title">
                        <h3>Log In To Your Account</h3>
                    </div>
                    <div class="login-form pr-20">
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Enter your email" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <button type="submit" class="default-button">Log In <i
                                    class="fas fa-angle-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="log-in-card">
                    <div class="default-section-title">
                        <h3>Create An Account</h3>
                    </div>
                    <div class="login-form">
                        <form>
                            <div class="mb-3">
                                <input type="Text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Repeat Password" required>
                            </div>
                            <p>The password should be at least eight characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ & )</p>
                            <button type="submit" class="default-button">Register Now <i
                                    class="fas fa-angle-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
