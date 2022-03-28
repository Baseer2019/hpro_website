@extends('admin.body.Admin')
@section('content')

            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Donors</h4>
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('donor.create') }}" class="btn btn-primary btn-rounded float-right"><i
                            class="fa fa-plus"></i> Add Donor</a>
                </div>
            </div>
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <label class="focus-label">Donor ID</label>
                        <input type="text" class="form-control floating">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <label class="focus-label">Donor Name</label>
                        <input type="text" class="form-control floating">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="btn btn-success btn-block"> Search </a>
                </div>
            </div>
            <div class="row doctor-grid">
                @foreach ($donors as $donor)
                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href=""><img alt=""
                                        src="{{ asset('backend/assets/img/ourclients/' . $donor->image) }}"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                        <form action="{{ route('donor.destroy', $donor->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            @csrf
                                            <button class="dropdown-item" type="submit">
                                                <i class="fa fa-trash-o m-r-5"></i> Delete
                                            </button>
                                        </form>
                                    </a>
                                </div>
                            </div>
                            <h4 class="donor-name text-ellipsis"><a href="#">{{ $donor->name }}</a></h4>
                            <div class="doc-prof">More</div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $donors->links('pagination::bootstrap-4') }}
@endsection
