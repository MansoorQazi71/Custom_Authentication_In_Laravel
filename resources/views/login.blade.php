<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Log In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css" />

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('signup/signup.css')}}" />
</head>
<body>
    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure>
                            <img src="images/signin-image.jpg" alt="sing up image" />
                        </figure>
                        <a href="{{route('register')}}" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Log In</h2>
                        <form method="POST" action="{{route('/signin')}}" class="register-form" id="login-form" enctype="multipart/form-data">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your email" value="{{old('email')}}"/>
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" />
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li>
                                    <a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
