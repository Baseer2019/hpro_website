@extends('admin.body.Admin')
@section('content')

<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <h4 class="page-title">Edit Project</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <form method="PATCH" action="{{ route('update_project',  $project->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Project Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="name" value="{{$project->name}}">
                       
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Description <span class="text-danger"></span></label>
                        <input class="form-control" type="description" name="description" value="{{$project->description}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Start Date<span class="text-danger"></span></label>
                        <div class="">
                            <input type="date" class="form-control datetimepicker" name="start_date" value="{{$project->Start_date}}">
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
                {{-- <div class="col-sm-6">
                    <div class="form-group">
                        <label>Project Type Name</label>
                        <select name="project_type_id" id="">
                            @foreach ($project_types as $project_type)
                                <option value="{{ $project_type->id }}">{{ $project_type->name }}</option>
                            @endforeach
                        </select>
                        {{ $errors->first('project_type_id') }}
                    </div>
                </div> --}}
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Image For Project <span class="text-danger">*</span></label>
                        <div class="profile-upload">
                            <div class="upload-img">
                                <img alt="" src="assets/img/user.jpg">
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
                        <label>PDF file For Project <span class="text-danger">*</span></label>
                        <div class="profile-upload">
                            <div class="upload-pdf">
                                <img alt="" src="assets/img/user.jpg">
                            </div>
                            <div class="upload-input">
                                <input type="file" class="form-control" name="pdf">
                                {{ $errors->first('pdf') }}
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
