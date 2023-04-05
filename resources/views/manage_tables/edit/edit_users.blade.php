@extends('layouts.app')
@section('content')


    @role('Admin')
        <div class="container">
            <div style="width: 100%;" class="row">
                <div class="col-md-12">
                    <div id="kolor" class="card">
                        <div id="editcard" class="card-header">
                            <h4 style="margin: 0;">Edit & Update Users</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ url('update/' . $userr->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-group mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{ $userr->name }}" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Foot size (cm)</label>
                                    <input type="text" name="foot_size_cm" value="{{ $userr->foot_size_cm }}" class="form-control">
                                </div>

                                <div style="display: flex;justify-content: space-between;" class="form-group mb-3">
                                    <button type="submit" class="btn btn_edit_size  btn-primary">Update User</button>
                                    <a href="{{ url('manage_tables/manage_users') }}" class="btn btn_edit_size btn-danger float-end">BACK</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endrole


@endsection
