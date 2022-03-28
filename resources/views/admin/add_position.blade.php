@extends('admin.body.Admin')
@section('content')
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Donor</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <form method="POST" action="{{route('positions.store')}}">
                @csrf
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name">
                                {{$errors->first('name')}}
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
