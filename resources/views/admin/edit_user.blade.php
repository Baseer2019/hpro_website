@extends('admin.body.Admin')
@section('content')
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit User Profile</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="PATCH" action="{{route('update_user', $user->id)}}">
                         @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="{{$user->first_name}}" name="first_name">
                                         <span>{{$errors->first('first_name')}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="{{$user->last_name}}" name="last_name">
                                         <span>{{$errors->first('last_name')}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" type="text" value="{{$user->username}}" name="username">
                                         <span>{{$errors->first('username')}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email<span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" value="{{$user->email}}" name="email">
                                         <span>{{$errors->first('email')}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password" name="confirm_password">
                                    </div>
                                </div>

                                <div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Gender:<span class="text-danger">*</span></label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input" value="1">Male
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input" value="0">Female
											</label>
										</div><br>
										 <span>{{$errors->first('gender')}}</span>
									</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input class="form-control" type="text" value="{{$user->phone_number}}" name="phone_number">
                                         <span>{{$errors->first('phone_number')}}</span>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Position Number <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="{{$user->position_number}}" name="position_number">
                                         <span>{{$errors->first('position_number')}}</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group">
										<label>Image</label>
										<div class="profile-upload">
											<div class="upload-img">
												<img alt="" src="assets/img/user.jpg">
												 <span>{{$errors->first('profile_photo_path')}}</span>
											</div>
											<div class="upload-input">
												<input type="file" class="form-control" value="{{$user->profile_photo_path}}" name="profile_photo_path">
											</div>
										</div>
									</div>
                                </div>
                            </div>
							<div class="form-group">
                                <label>Short Biography<span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="10" cols="30" name="bio">{{$user->bio}}</textarea>
                                 <span>{{$errors->first('bio')}}</span>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Status</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="admin_active" value="option1" checked>
									<label class="form-check-label" for="doctor_active">
									Active
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="admin_inactive" value="option2">
									<label class="form-check-label" for="doctor_inactive">
									Inactive
									</label>
								</div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
@endsection
