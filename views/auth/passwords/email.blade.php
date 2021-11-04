<div class="auth-wrapper">
    <div class="container h-100">
        <div class="row flex-row h-100 auth-form-bg align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-5 d-md-block d-lg-block d-sm-none d-none">
                <img src="{{theme_asset('img/login-1.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-xl-5 col-lg-6 col-md-7 ml-auto authentication-form-block">
                <div class="authentication-form mx-auto">
                    <h2 class="mb-20">Forgot your <br>Classifieds Password?</h2>
                    <p>Don't worry! enter the email address associated with your account.</p>
                    @include('notifications')
                        {!!Form::vertical_open()
                        ->id('reset')
                        ->action(guard_url('password/email'))
                        ->addClass('login-form')
                        ->method('POST')!!}
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email Address" required="">
                            <i class="las la-envelope"></i>
                        </div>
                        <div class="sign-btn text-center mt-20">
                            <button type="submit" class="btn btn-theme btn-block">Reset Password</button>
                        </div>

                        {!! Form::close() !!}
                    <div class="row mt-20">
                        <div class="col">
                            <a href="{{guard_url('login')}}">Know your password? <span class="text-primary">Login Here</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

