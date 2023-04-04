@extends('layouts.app')
@section('content')



    <div class="container">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div style="width: 100%;" class="lielaiscontainer">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a id="a" href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div id="cardpicture" class="card mb-4">
                        <div style="display: flex;flex-direction: column;align-items: center;" id="showDiv2" class="card-body text-center">
                            <img id="profilepic"
                                src="https://www.freeiconspng.com/thumbs/profile-icon-png/profile-icon-9.png" alt="avatar"
                                class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ Auth::user()->name }}</h5>
                            <p id="textmuted" class="text-muted mb-4">JSneaks website user</p>
                            <div class="d-flex justify-content-center mb-2" style="width: 100%">

                                <div class="btn-group" role="group" aria-label="Basic example" style="width: 100%">
                                    <button style="height: 50px;" id="readonly" type="button" class="btn btn-danger">Edit profile</button>
                                    <button style="height: 50px;" value="Submit" id="saveChanges_Button" type="submit" class="btn btn-primary">Save</button>
                                    <a style="height: 50px; display: flex; justify-content: center; align-items: center;" href="/auth/user/change-password" type="button" class="btn btn-primary">Change password</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div id="cardinfo" class="card mb-4">
                        <div style="padding-top: 38px; padding-bottom: 38px;;"class="card-body">
                            <form action="{{ url('update_user/' . Auth::user()->id) }}" id="myForm" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Username</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input name='name' style="background: transparent;border: none;" readonly
                                            id="textmuted" class="text-muted mb-0"value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input name='email' style="background: transparent;border: none;" readonly
                                            id="textmuted" class="text-muted mb-0"value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Current Password</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type='password' name='password' style="background: transparent;border: none;"
                                            readonly id="textmuted"
                                            class="form-control text-muted mb-0" value="{{ Auth::user()->password }}">
                                    </div>
                                </div>
                                <div id="showDiv"  style="display:none;">
                                    <div style="padding-bottom: 10px;padding-top: 20px;" class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">New Password</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type='password' style="background: transparent;" id="textmuted" class="form-control">
                                        </div>
                                    </div>
                                    <div style="padding-top: 10px;" class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Confirm New Password</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type='password' style="background: transparent;" id="textmuted" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Foot size (cm)</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input name='foot_size_cm' style="background: transparent;border: none;" readonly
                                            id="textmuted"
                                            class="text-muted mb-0"value="{{ auth()->user()->foot_size_cm }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Role</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p id="textmuted" class="text-muted mb-0">User</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/edit_profile.js') }}"></script>
@endsection
