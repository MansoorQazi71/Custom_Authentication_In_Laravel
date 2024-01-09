<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css" />

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('signup/signup.css')}}" />
</head>
<body>
    <div class="main">
        <section class="signup">
            <div class="container">
              <div class="signup-content">
                <div class="signup-form">
                  <h2 class="form-title">Sign up</h2>
                  <form action="{{route('registerUser')}}" method="POST" class="register-form" id="register-form">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                      <label for="name"
                        ><i class="zmdi zmdi-account material-icons-name"></i
                      ></label>
                      <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Your Name"
                        value="{{old('name')}}"
                      />
                      <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                      <label for="email"><i class="zmdi zmdi-email"></i></label>
                      <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Your Email"
                        value="{{old('email')}}"
                      />
                      <span class="text-danger">@error('email') {{$message}} @enderror</span>

                    </div>
                    <div class="form-group">
                      <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                      <input
                        type="password"
                        name="password"
                        id="pass"
                        placeholder="Password"
                      />
                      <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    {{-- <div class="form-group">
                      <label for="re-pass"
                        ><i class="zmdi zmdi-lock-outline"></i
                      ></label>
                      <input
                        type="password"
                        name="password"
                        id="pass"
                        placeholder="Repeat your password"
                      />
                      <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div> --}}
                    <div class="form-group">
                      <input
                        type="checkbox"
                        name="agree-term"
                        id="agree-term"
                        class="agree-term"
                      />
                      <label for="agree-term" class="label-agree-term"
                        ><span><span></span></span>I agree all statements in
                        <a href="#" class="term-service">Terms of service</a></label
                      >
                    </div>
                    <div class="form-group form-button">
                      <input
                        type="submit"
                        name="signup"
                        id="signup"
                        class="form-submit"
                        value="Register"
                      />
                    </div>
                  </form>
                </div>
                <div class="signup-image">
                  <figure>
                    <img src="images/signup-image.jpg" alt="sing up image" />
                  </figure>
                  <a href="{{route('login')}}" class="signup-image-link">I am already member</a>
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
