@extends('layouts.app')
@section('content')


    @role('Admin')
        <div class="container">
            <div id="managee" class="row">
                <div style="padding: 30px;" class="col-md-12">
                    @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                    <div id = "kaards" class="card">
                        <div id="headeris" class="card-header">
                            <div class="h2table">
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Users
                                    </a>
                                    <div style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 50px, 0px);" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ url('manage_tables/manage_vans') }}">Vans</a>
                                    <a class="dropdown-item" href="{{ url('manage_tables/manage_nike') }}">Nike</a>
                                    <a class="dropdown-item" href="{{ url('manage_tables/manage_nb') }}">New balance</a>
                                    <a class="dropdown-item" href="{{ url('manage_tables/manage_adidas') }}">Adidas</a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="poga-add">
                                <a style="width: 100%;" href="{{ url('add') }}" class="btn btn-primary float-end">Add User</a>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th style="width: 250px !important;">Foot Size (cm)</th>
                                        <th style="width: 250px !important;">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="table-darkk">
                                    @foreach ($userr as $itemm)
                                    <tr>
                                        <td>{{ $itemm->name }}</td>
                                        <td>{{ $itemm->foot_size_cm }}</td>
                                        <td>
                                            <div class="stailss">
                                                <a href="{{ url('manage_tables/edit/edit_users/'.$itemm->id) }}" style="width:100px; padding-left:20px; padding-right:20px;" class="btn btnneed btn-primary btn-sm">Edit user</a>
                                                <form action="{{ url('delete/'.$itemm->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="width:100px; padding-left:20px; padding-right:20px;" class="btn btnneed btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
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
    @endrole


@endsection
