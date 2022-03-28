@extends('admin.body.Admin')
@section('content')
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Donor</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    <form method="PUT" action="{{route('update_donor',$donor->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                        {{$errors->first('name')}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea class="form-control" rows="10" cols="30" name="description"  value="{{$donor->name}}"></textarea>
                                    <span>{{$errors->first('description')}}</span>
                                </div>
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Web link</label>
												<input type="text" class="form-control" name="weblink" value="{{$donor->weblink}}">
											</div>
										</div>
									</div>
								</div>
                                <div class="col-sm-6">
									<div class="form-group">
										<label>Image*</label>
										<div class="profile-upload">
											<div class="upload-img">
												<img alt="" src="assets/img/user.jpg">
											</div>
											<div class="upload-input">
                                                <input type="file" class="form-control" name="image">
                                                {{$errors->first('image')}}
											</div>
										</div>
									</div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
@endsection




