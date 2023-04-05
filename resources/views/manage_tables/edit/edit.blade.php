@extends('layouts.app')
@section('content')



    @role('Admin')
        <div class="container">
            <div id="kolor" class="card">
                <div id="editcard" class="card-header">
                    <h4 style="margin: 0;">Edit & Update Sizes</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update/' . $item->id . '/' . $company) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">CM</label>
                            <input type="text" name="CM" value="{{ $item->cm }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">EU</label>
                            <input type="text" name="EU" value="{{ $item->eu }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">UK</label>
                            <input type="text" name="UK" value="{{ $item->uk }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">US M</label>
                            <input type="text" name="US_M" value="{{ $item->usm }}" class="form-control">
                        </div>
                        <div style="padding-bottom: 25px;" class="form-group mb-3">
                            <label for="">US W</label>
                            <input type="text" name="US_W" value="{{ $item->usw }}" class="form-control">
                        </div>
                        <div style="padding-bottom: 3px;" class="formg">
                            <div class="abibtn" style=" display:flex;justify-content: space-between;">
                                <button type="submit" class="btn btn_edit_size btn-primary">Update Sizes</button>
                                <a href="{{ url("manage_tables/manage_$company") }}" class="btn btn_edit_size btn-danger float-end">BACK</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endrole


@endsection
