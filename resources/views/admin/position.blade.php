@extends('admin.body.Admin')
@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Positions In HPRO</h4>
            </div>
            <div class="col-sm-12 col-10 text-right m-b-20">
                <a href="{{route('positions.create')}}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Position</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <div class="card-block">
                        <h4 class="card-title">Positions</h4>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Position Name</th>
                                        <th>Delete Position</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($positions as $position)
                                    <tr>
                                        <td></td>
                                        <td>{{ $position->name }}</td>
                                        <td> <form action="{{ route('positions.destroy', $position->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            @csrf
                                            <button class="dropdown-item" type="submit">
                                                <i class="fa fa-trash-o m-r-5"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
