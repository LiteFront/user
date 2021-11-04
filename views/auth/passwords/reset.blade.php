<div class="auth-wrapper">
    <div class="container h-100">
        <div class="row flex-row h-100 auth-form-bg align-items-center">
            <div class="col-xl-7 col-lg-6 col-md-5 d-md-block d-lg-block d-sm-none d-none">
                <img src="{{theme_asset('img/login-1.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-xl-4 col-lg-6 col-md-7 ml-auto authentication-form-block">
                <div class="authentication-form mx-auto">
                    <h3>Reset Password</h3> 
                    <p>Enter the email address and new password.</p>
                    @include('notifications')
                        {!!Form::vertical_open()
                        ->id('reset')
                        ->action(guard_url('password/reset'))
                        ->addClass('login-form')
                        ->method('POST')!!}
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email Address" required="">
                            <i class="las la-envelope"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                required="">
                                <i class="las la-key"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"
                                required="">
                                <i class="las la-lock"></i>
                        </div>
                        <div class="sign-btn text-center mt-20">
                            <button type="submit" class="btn btn-theme btn-block">{{ __('Reset Password') }}</button>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







