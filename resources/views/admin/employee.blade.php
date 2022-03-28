@extends('admin.body.Admin')
@section('content')
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Organization Staffs</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="{{route('user.create')}}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Employee</a>
                    </div>
                </div>

				<div class="row doctor-grid">
                    @if(session('message'))
                            <span class="alert">{{ session('message') }}</span>
                    @endif
                @foreach($users as $user)
                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href="{{route('user.show',$user->id)}}"><img class="rounded-circle m-r-5" alt="" src="{{asset('backend/assets/img/user/'.$user->profile_photo_path)}}"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{route('user.edit',$user->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        @csrf
                                        <button class="dropdown-item" type="submit">
                                            <i class="fa fa-trash-o m-r-5"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <h4 class="employee-name text-ellipsis"><a href="{{route('user.show',$user->id)}}">{{$user->first_name . ' '. $user->last_name }}</a></h4>
                            <h5>{{ $user->phone_number }}</h5>
                            <h6>{{ $user->email }}</h6>
                            <div class="doc-prof">{{$user->position->name}}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
               {{ $users->links('pagination::bootstrap-4') }}
@endsection
