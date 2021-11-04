<div class="col-lg-9 col-md-7">
    {!!Form::vertical_open()
    ->id('form-change-password')
    ->action(guard_url('password'))
    ->method('POST')
    ->class('change-password')!!}
    @include('notifications')
    <div class="page-title-container mb-15">

    <div class="entry-form-wrap">

        <div class="mb-30 card">
            <div class="card-header">
                <h6>Change password</h6>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="full-name" class="col-lg-4 col-form-label text-lg-right">Current Password</label>
                    <div class="col-lg-8">
                        <input type="password" class="form-control" name="old_password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="full-name" class="col-lg-4 col-form-label text-lg-right">Enter New Password</label>
                    <div class="col-lg-8">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="full-name" class="col-lg-4 col-form-label text-lg-right">Confirm New Password</label>
                    <div class="col-lg-8">
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-theme btn-block"><i class="las la-save mr-5"></i> <span>Update
                    Password</span></button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>