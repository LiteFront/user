<div class="col-lg-9 col-md-7">
    {!!Form::vertical_open()
    ->id('form-update-profile')
    ->method('POST')
    ->action(guard_url('profile'))
    ->class('update-profile')!!}
    @include('notifications')
    <div class="entry-form-wrap">

        <div class="mb-30 card">
            <div class="card-header">
                <h5>Update Profile</h5>
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        {!!Form::avatar('photo', @user()->photo)->raw()!!}
                    </div>
                    <div class="col-lg-7">
                        {!!Form::text('name', @user()->name)!!}

                        {!!Form::email('email', @user()->email)!!}

                        {!!Form::date('dob', @user()->dob)!!}

                        {!!Form::text('designation', @user()->designation)!!}

                    </div>
                </div>
            </div>
            <div class="card-body border-top">
                <div class="row">
                    <div class="col-md-6">
                        {!!Form::text('street', @user()->street)!!}
                    </div>
                    <div class="col-md-6">
                        {!!Form::text('house_number', @user()->house_number)!!}
                    </div>
                    <div class="col-md-6">
                        {!!Form::text('country', @user()->country)!!}

                    </div>
                    <div class="col-md-6">
                        {!!Form::text('state', @user()->state)!!}

                    </div>
                    <div class="col-md-6">
                        {!!Form::text('zip', @user()->zip)!!}

                    </div>
                    <div class="col-md-6">
                        {!!Form::text('phone', @user()->phone)!!}

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-theme btn-block"><i class="las la-save mr-5"></i> <span>Update
                        Profile</span></button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>