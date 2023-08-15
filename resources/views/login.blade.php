<html lang="en">
    @include('layouts.head');
    <body>
    <div class="limiter">
    <div class="container-login100" style="background-image: url('{{ asset('images/logintheme.jpg') }}')">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
    <form class="login100-form validate-form">
    <span class="login100-form-title p-b-49 mt-2">
    <strong>Login</strong>
    </span>
    <div class="wrap-input100 validate-input m-b-23 ml-2 mr-2" data-validate="Username is reauired">
    <span class="label-input100">Username</span>
    <input class="input100" type="text" name="username" placeholder="Type your username">
    <span class="focus-input100" ></span>
    </div>
    <div class="wrap-input100 validate-input ml-2 mr-2" data-validate="Password is required">
    <span class="label-input100"> Password</span>
    
    <div class="input-container">
    <input class="input100" type="password" name="pass" placeholder="Type your password">
    <span class="lock-icon">
        <i class="fa fa-lock"></i>
    </span>
</div>


    <span class="focus-input100" > </span>
    </div>
    <div class="text-right p-t-8 p-b-31">
    <a href="#">
    Forgot password?
    </a>
    </div>
    <div class="container-login100-form-btn">
    <div class="wrap-login100-form-btn">
    <div class="login100-form-bgbtn"></div>
    <button class="login100-form-btn">
    Login
    </button>
    </div>
    </div>
    <div class="txt1 text-center p-t-54 p-b-20 mt-4">
    <span>
    Or Login Using
    </span>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-5">
    <div class="d-flex">
        <a href="#" class="login100-social-item bg1">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="#" class="login100-social-item bg2">
            <i class="fa fa-twitter"></i>
        </a>
        <a href="#" class="login100-social-item bg3">
            <i class="fa fa-google"></i>
        </a>
    </div>
</div>
<div class="d-flex justify-content-center align-items-center mt-4">
        <span class="txt1 p-b-17 mt-3">
            Or Sign Up Using
        </span>
        
    </div>
    <a href="#" class="txt2 d-flex  justify-content-center align-items-center mt-4 mb-3">
            Sign Up
        </a>
</div>


    @include('layouts.footer');

    </body></html>