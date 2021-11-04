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
                        <div class="profile-aside">
                            <div>

                                <div id="photo" class="profile-avatar show" >
                                    <img src="{{url('image/original/'.@$user['photo'][0]['path'])}}"  id="photo_image" class="avatar-image" onerror="this.src = '{{theme_asset('img/default-user.png')}}'">
                                </div>
                                <div class="profile-info mb-20">
                                    <h1 class="name">{{@user()->name}}</h1>
                                    <p class="designation">{{@user()->account_type}}</p>
                                </div>
                                <div class="profile-buttons">
                                    <div class="mb-15">
                                        <button type="button" id="photo_remove" class="btn btn-theme">
                                        Upload New Avatar
                                        </button>
                                    </div>
                                </div>
                                <div class="dropzone" id="photo_dropzone" style="display:none;">
                                    <div class="dz-default dz-message"><span>Maximum file size is 3 mb and dimension is within 200X200.</span></div>
                                </div>
                                <span id="img-status" style="color:red"></span>
     
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" value="{{@user()->name}}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{@user()->email}}">
                        </div>
                        <div class="form-group">
                            <label for="email" class="d-block">Date of Birth</label>
                            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                <input type="text" name="dob" class="form-control datepicker-input" data-target="#datetimepicker1"
                                    value="{{date('m/d/Y', strtotime(@user()->dob))}}" required>
                                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control" name="designation" value="{{@user()->designation}}">
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="card-body border-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="street" class="mb-5">{{trans('user.user.label.street')}}</label>
                            <input type="text" class="form-control" name="street" value="{{@user()->street}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="house_number" class="mb-5">{{trans('user.user.label.house_number')}}</label>
                            <input type="text" class="form-control" name="house_number" value="{{@user()->house_number}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country" class="mb-5">{{trans('user.user.label.country')}}</label>
                            <input type="text" class="form-control" name="country" value="{{@user()->country}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="state" class="mb-5">{{trans('user.user.label.state')}}</label>
                            <input type="text" class="form-control" name="state" value="{{@user()->state}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="zipcode" class="mb-5">{{trans('contact::contact.label.zip')}}</label>
                            <input type="text" class="form-control" name="zipcode" value="{{@user()->zipcode}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="full-name" class="mb-5">{{trans('user.user.label.phone')}}</label>
                            <input type="text" class="form-control" name="phone" value="{{@user()->phone}}">
                        </div>
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


<script>
	 $(document).ready(function(){
    $('#datetimepicker1').datepicker({
        
    });
});
	</script>