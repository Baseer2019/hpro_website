@extends('admin.body.Admin')
@section('content')
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    <!--<div class="col-sm-5 col-6 text-right m-b-30">-->
                    <!--    <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>-->
                    <!--</div>-->
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href=""><img class="avatar" src="{{ asset('backend/assets/img/user/'.$user->profile_photo_path)}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{$user->first_name}}</h3>
                                                <div class="last_name"><h4>{{$user->last_name  }}</h4></div>
                                                <small class="text-muted">{{$user->position->name}}</small>

                                                <div class="staff-msg"><a href="{{route('user.edit', $user->id)}}" class="btn btn-primary">Edit Your Profile</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone Number:</span>
                                                    <span class="text"><a href="#">{{$user->phone_number}}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="#">{{$user->email}}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Position Number:</span>
                                                    <span class="text"><a href="#">{{$user->position_number}}</a></span>
                                                </li>        
                                                 <li>
                                                    <span class="title">Status:</span>
                                                    @if($user->status == 1)
                                                        <span class="text">Active</span>
                                                    @else
                                                        <span class="text">Inactive</span>
                                                    @endif
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                        @if($user->gender == 1)
                                                            <span class="text">Male</span>
                                                        @else
                                                            <span class="text">Male</span>
                                                        @endif
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<div class="profile-tabs">
					<ul class="nav nav-tabs nav-tabs-bottom">
						<li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">About</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane show active" id="about-cont">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h3 class="card-title">Short Bioygrophy</h3>
                            <div class="experience-box">
                                <ul class="experience-list">

                                    <li>
                                        <div class="experience-user">
                                            <div class="before-circle"></div>
                                        </div>
                                        <div class="experience-content">
                                            <div class="timeline-content">
                                               <P><i>{{ $user->bio }}</i></P>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
