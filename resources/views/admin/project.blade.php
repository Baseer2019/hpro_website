@extends('admin.body.Admin')
@section('content')
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="{{route('project.edit', $project->id)}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
                    </div>
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="assets/img/doctor-03.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="project-name m-t-0 mb-0">{{$project->first_name}}</h3>
                                                <small class="text-muted">{{$project->projectType->name}}</small>
                                                <div class="staff-id">Employee ID : </div>
                                                <div class="staff-msg"><a href="" class="btn btn-primary"></a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Project Type</span>
                                                    <span class="text"><a href="#">{{$project->name}}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Project Type</span>
                                                    <span class="text"><a href="#">{{$project->name}}</a></span>
                                                </li> <li>
                                                    <span class="title">Project Type</span>
                                                    <span class="text"><a href="#">{{$project->name}}</a></span>
                                                </li> <li>
                                                    <span class="title">Project Type</span>
                                                    <span class="text"><a href="#">{{$project->name}}</a></span>
                                                </li> <li>
                                                    <span class="title">Project Type</span>
                                                    <span class="text"><a href="#">{{$project->name}}</a></span>
                                                </li> <li>
                                                    <span class="title">Project Type</span>
                                                    <span class="text"><a href="#">{{$project->name}}</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Type</span>
                                                    <span class="text">{{$project->projectType->name}}<a href="#"></a></span>
                                                </li>


                                                <li>
                                                    <span class="title">{{$project->gender}}</span>

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

            </div>
@endsection
