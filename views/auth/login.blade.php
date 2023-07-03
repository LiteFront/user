<div class="auth-wrapper">
    <div class="container h-100">
        <div class="row flex-row h-100 auth-form-bg align-items-center">
            <div class="col-xl-8 col-lg-8 col-md-5 d-md-block d-lg-block d-sm-none d-none">
                <img src="{{theme_asset('img/login-1.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-7 ml-auto authentication-form-block">
                <div class="authentication-form mx-auto">
                    <h2 class="mb-20">Sign In to <br>Classifieds</h2>
                    <p>Sign in to your account</p>
                    @include('notifications')
                    {!!Form::vertical_open()
                    ->id('login')
                    ->addClass('login-form')
                    ->method('POST')!!}
                    <div class="mb-3 form-group">
                        {!! Form::email('email')
                        ->required()
                        ->raw() !!}
                        <i class="las la-user-circle"></i>
                    </div>
                    <div class="mb-3">
                    {!! Form::password('password')
                        ->required()
                        ->raw() !!}
                        <i class="las la-key"></i>
                    </div>
                    <div class="row mt-20 mb-20">
                        <div class="col text-start">
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="remember_me" checked>
                                <label class="form-check-label text-white" for="remember_me">Remember Me</label>
                            </div>
                        </div>
                        <div class="col text-end">
                            <a href="{{guard_url('password/reset')}}">Forgot Password ?</a>
                        </div>
                    </div>
                    <div class="sign-btn">
                        <button type="submit" class="btn btn-theme btn-block">Sign In</button>
                    </div>
                    {!! Form::close() !!}
                    <div class="social-login">
                        <p>Or you can login in with</p>
                        <div class="social-login-buttons">
                            <a href="{!!guard_url('login/google')!!}" class="btn btn-google fab fa-google"></a>
                            <a href="{!!guard_url('login/facebook')!!}" class="btn btn-facebook fab fa-facebook-f"></a>
                            <a href="{!!guard_url('login/twitter')!!}" class="btn btn-twitter fab fa-twitter"></a>
                            <a href="{!!guard_url('login/linkedin')!!}" class="btn btn-linkedin fab fa-linkedin-in"></a>
                            <a href="{!!guard_url('login/github')!!}" class="btn btn-github fab fa-github"></a>
                        </div>
                    </div>
                    <div class="row mt-20">
                        <div class="col">
                            <a href="{{guard_url('register')}}">New to Classifieds? <span class="text-primary">Create an
                                    account</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>