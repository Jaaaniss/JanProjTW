@extends('layouts.app')
@section('content')


    @role('Admin')
        <div class="container">
            <div style="width:100%" class="row ">
                <div style="padding-top: 30px;" class="col-md-12">

                    @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif

                    <div id="kolor" class="card">
                        <div id="addcard" class="card-header">
                            <h4 style="margin: 0; padding-bottom: 5px; padding-top: 5px;">Add Size</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ url('/manage_tables/add/add') }}" method="POST">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="">CM</label>
                                    <input type="text" name="CM" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">EU</label>
                                    <input type="text" name="EU" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">UK</label>
                                    <input type="text" name="UK" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">US M</label>
                                    <input type="text" name="US_M" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">US W</label>
                                    <input type="text" name="US_W" class="form-control">
                                </div>
                                <div style="padding-bottom: 10px;" class="form-group mb-3">
                                    <label for="">Brand</label>
                                    <select class="form-select" name="company" id="company">
                                        <option value="vans">Vans</option>
                                        <option value="adidas">Adidas</option>
                                        <option value="nike">Nike</option>
                                        <option value="nb">New Balance</option>
                                    </select>
                                    {{-- <input type="text" name="company" value="" class="form-control"> --}}
                                </div>
                                <div style="display: flex; justify-content: space-between;" class="form-group mb-3">
                                    <button type="submit" class="btn btn_edit_size btn-primary">Add Size</button>
                                    <a href="{{ url('manage_tables/manage_vans') }}" style="
                                    line-height: 35px;
                                " class="btn btn_edit_size btn-danger float-end">BACK</a>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endrole


@endsection
