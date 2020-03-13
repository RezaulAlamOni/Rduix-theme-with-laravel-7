<!doctype html>
<html lang="zxx">

<x-Header/>

<body>
<section class="user-area-all-style log-in-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Login to your account!</h3>
                        <p class="form-desc">With your social network.</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <button class="default-btn" type="submit">
                                    <i class="bx bxl-google"></i>
                                    Google
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <button class="default-btn" type="submit">
                                    <i class="bx bxl-facebook"></i>
                                    Facebook
                                </button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <button class="default-btn" type="submit">
                                    <i class="bx bxl-twitter"></i>
                                    Twitter
                                </button>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
{{--                                    <input class="form-control" type="text" name="name" placeholder="Username or Email">--}}
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                           placeholder="Username or Email" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
{{--                                    <input class="form-control" type="password" name="password" placeholder="Password">--}}
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                           name="password" placeholder="Password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 form-condition">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <a class="forget" href="">Forgot my password?</a>
                            </div>
                            <div class="col-12">
                                <button class="default-btn btn-two" type="submit">
                                    Log In Now
                                </button>
                            </div>
                            <div class="col-12">
                                <p class="account-desc">
                                    Not a member?
                                    <a href="{{ route('register') }}">Register</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<x-Footer/>
</body>

<!-- Mirrored from templates.envytheme.com/arduix/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Mar 2020 11:43:12 GMT -->
</html>

