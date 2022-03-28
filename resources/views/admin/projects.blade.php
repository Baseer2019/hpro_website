@extends('admin.body.Admin')

@section('content')
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Projects</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="{{route('project.create')}}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Project</a>
                    </div>
                </div>
				<div class="row doctor-grid">
                {{-- @if(session('message'))
                            <span class="alert">{{ session('message') }}</span>
                    @endif --}}
                    @foreach($projects as $project)
                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href="{{asset('backend/assets/img/project/'.$project->pdf)}}"><img alt="" src="{{asset('backend/assets/img/user/'.$project->image)}}"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{route('project.edit',$project->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        @csrf
                                        <button class="dropdown-item" type="submit">
                                            <i class="fa fa-trash-o m-r-5"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <h4 class="project-name text-ellipsis"><a href="">{{$project->name}}</a></h4>
                            <h4 class="project-name text-ellipsis">{{$project->projectType->name}} </h4>
                            <h4 class="project-name text-ellipsis">{{$project->start_date}}</h4>

                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $projects->links('pagination::bootstrap-4') }}
@endsection
