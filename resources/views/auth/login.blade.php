@extends('layouts.app')
@section('content')


    <div style="height:100%" class=lielaiss>
        <div class="container">
            <div style="width:100%" class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div id="shadoww" class="card flex-row my-5 border-0 rounded-3 overflow-hidden">

                        <div class="card-img-left d-none d-md-flex">
                            {{-- <video  alt="" width="100%" height="700px" class="imageww" autoplay loop muted>
                    <source src="{{ asset('/image/video.mp4') }}" type="video/mp4">
                  </video> --}}
                            <img class="imageww" src="{{ asset('/image/wallpaper3.png') }}" alt="" width="100%"
                                height="100%">
                        </div>

                        <div id="carder" class="card-body p-4 p-sm-5">
                            <h2 class=" text-center mb5 fw-light fs5">Login</h2>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input name="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" id="Emaill"
                                        placeholder="email@example.com" required autocomplete="email"
                                        value="{{ old('email') }}" autofocus>


                                </div>



                                <div class="form-floating mb-3">
                                    <input name="password" type="password"
                                        class="form-control  @error('password') is-invalid @enderror" id="Passwordd"
                                        placeholder="Password" required autocomplete="current_password" autofocus>
                                </div>
                                @error('password')
                                    <span style="position: absolute;" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @error('email')
                                    <span style="position: absolute;" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <hr>

                                <div class="d-grid mb-2">
                                    <button id="vjg2" class="btn2 btn-lg btn-primary btn-login fw-bold text-uppercase"
                                        type="submit">Login</button>
                                </div>

                                <hr class="my-4">
                                <a id="a1" class="d-block text-center mt-2 small" href="/register">New around here?
                                    Sign up</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/show-hide.js') }}"></script>
    <script src="{{ asset('js/darkmode.js') }}"></script>
@endsection
