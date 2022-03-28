@extends('admin.body.Admin')

@section('content')
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <h4 class="page-title">Add Donor</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
    <form method="POST" action="{{route('donor.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="name">
                        {{$errors->first('name')}}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>weblink <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="weblink">
                        {{$errors->first('name')}}
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Description</label>
                        <input class="form-control" type="text" name="dscription">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Image<span class="text-danger">*</span></label>
                        <h6>The Image must be(220x220) and transparent</h6>
                        <h6>To make image resize click on the link<a href="http://www.simpleimageresizer.com/">Click</a></h6>
                        <div class="profile-upload">
                            <div class="upload-img">
                                <img alt="" src="{{asset('backend/assets/img/user.jpg')}}">
                            </div>
                            <div class="upload-input">
                                <input type="file" class="form-control" name="image">
                                {{ $errors->first('image') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn">Save</button>
                </div>
        </div>
    </form>
    </div>
</div>
@endsection
