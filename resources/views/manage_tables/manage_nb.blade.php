@extends('layouts.app')
@section('content')


    @role('Admin')
        <div style="padding-top: 50px" class="container">
            <div id="managee" class="row">
                            {{-- <a href="{{ url('manage_adidas') }}" class="btn btn-primary float-end">Adidas</a>
                    <a href="{{ url('manage_nike') }}" class="btn btn-primary float-end">Nike</a>
                    <a href="{{ url('manage_vans') }}" class="btn btn-primary float-end">Vans</a> --}}
                <div style="padding: 30px;" class="col-md-12">
                    @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                    <div id="kaards" class="card">
                        <div id="headeris" class="card-header">
                            <div class="h2table">
                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        New Balance
                                    </a>
                                    <div style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 50px, 0px);"
                                        class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ url('manage_tables/manage_adidas') }}">Adidas</a>
                                        <a class="dropdown-item" href="{{ url('manage_tables/manage_nike') }}">Nike</a>
                                        <a class="dropdown-item" href="{{ url('manage_tables/manage_vans') }}">Vans</a>
                                        <a class="dropdown-item" href="{{ url('manage_tables/manage_users') }}">Users</a>
                                    </div>
                                </div>
                            </div>
                            <div class="poga-add">
                                <a href="{{ url('/manage_tables/add/add') }}" class="btn btnneed btn-primary float-end">Add Size</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>CM</th>
                                        <th>EU</th>
                                        <th>UK</th>
                                        <th>US M</th>
                                        <th>US W</th>
                                        <th style="width: 250px !important;">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="table-darkk">
                                    @foreach ($newbalance as $item4)
                                        <tr>
                                            <td>{{ $item4->cm }}</td>
                                            <td>{{ $item4->eu }}</td>
                                            <td>{{ $item4->uk }}</td>
                                            <td>{{ $item4->usm }}</td>
                                            <td>{{ $item4->usw }}</td>
                                            <td>
                                                <div class="stails">
                                                    <a href="{{ url('manage_tables/edit/edit/' . $item4->id . '/nb') }}"
                                                        style="width:100px; padding-left:20px; padding-right:20px;"
                                                        class="btn btnneed btn-primary btn-sm">Edit size</a>
                                                    <form action="{{ url('delete/' . $item4->id . '/nb') }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            style="width:100px; padding-left:20px; padding-right:20px;"
                                                            class="btn btnneed btn-danger btn-sm">Delete</button>
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

    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
@endsection
