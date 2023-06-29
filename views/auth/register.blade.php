<div class="auth-wrapper">
    <div class="container h-100">
        <div class="row flex-row h-100 auth-form-bg">
            <div class="col-xl-6 col-lg-6 col-md-5 d-md-block d-lg-block d-sm-none d-none">
                <img src="{{theme_asset('img/login-1.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-xl-5 col-lg-6 col-md-7 ml-auto authentication-form-block">
                <div class="authentication-form mx-auto">
                    <h2 class="mb-20">Create an <br>Classifieds Account</h2>
                    <p>Join in Classifieds to monitor and manage your acoount.</p>
                    @include('notifications')
                        {!!Form::vertical_open()
                        ->id('register')
                        ->addClass('login-form')
                        ->method('POST')!!}
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full name" name="name" required="">
                            <i class="las la-user-circle"></i>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required="">
                            <i class="las la-envelope"></i>
                        </div>
                        <!-- <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Phone" required="">
                            <i class="las la-phone"></i>
                        </div> -->
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="">
                            <i class="las la-key"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Repeat Password"  name="password_confirmation" required="">
                            <i class="las la-lock"></i>
                        </div>

                        <div class="sign-btn text-center">
                            <button type="submit" class="btn btn-theme btn-block">Sign Up</button>
                        </div>
                        {!! Form::close() !!}
                        <div class="social-login">
                        <p>Or you can sign in with</p>
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
                            <a href="{{guard_url('login')}}">Already have an account? <span class="text-primary">Sign In
                                    here</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


