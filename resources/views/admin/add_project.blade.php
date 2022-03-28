@extends('admin.body.Admin')
@section('content')
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Project</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="name">
                                    {{ $errors->first('name') }}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Description <span class="text-danger"></span></label>
                                    <input class="form-control" type="description" name="description">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Start Date <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input type="date" class="form-control datetimepicker" name="start_date">
                                        {{ $errors->first('start_date') }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <div class="">
                                        <input type="date" class="form-control datetimepicker" name="end_date">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Image For Project <span class="text-danger">*</span></label>
                                    <h6>The image must be (277x182) and have jpg and png extention.</h6>
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>PDF For Project <span class="text-danger">*</span></label>
                                    <div class="profile-upload">
                                        <div class="upload-img">
                                            <img alt="" src="assets/img/user.jpg">
                                        </div>
                                        <div class="upload-input">
                                            <input type="file" class="form-control" name="pdf">
                                            {{ $errors->first('pdf') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Type Name <span class="text-danger">*</span></label>
                                    <select name="project_type_id" id="">
                                        @foreach ($project_types as $project_type)
                                            <option value="{{ $project_type->id }}">{{ $project_type->name }}</option>
                                        @endforeach
                                    </select>
                                    {{ $errors->first('project_type_id') }}
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
