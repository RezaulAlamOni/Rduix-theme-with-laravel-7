<!doctype html>
<html lang="zxx">

<x-Header/>

<body>
<section class="user-area-all-style sign-up-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Create an account!</h3>
                        <p class="form-desc">With your social network.</p>
                    </div>
                    <form method="post" action="{{ route('register') }}">
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
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"
                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                           placeholder="First Name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Enter email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="new-password" placeholder="Enter your password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password"
                                           placeholder="Confirm your password">

                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-condition">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb1">
                                    <label for="chb1">
                                        I agree with Haipe's
                                        <a href="#">Privacy Policy</a>
                                    </label>
                                </div>
                                <div class="agree-label">
                                    <input type="checkbox" id="chb2">
                                    <label for="chb2">
                                        I agree with Haipe's
                                        <a href="#">Terms of Services</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="default-btn btn-two" type="submit">
                                    Register Account
                                </button>
                            </div>
                            <div class="col-12">
                                <p class="account-desc">
                                    Already have an account?
                                    <a href="{{ route('login') }}"> Login</a>
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
