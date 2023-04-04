@extends('layouts.app')
@section('content')



    <div style="height: 100%;" class=lielaiss>
        <div class="container">
            <div style="width: 100%;" class="row">
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
                            <h2 class=" text-center mb5 fw-light fs5">Register</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input name="name" type="text" class="form-control1" id="floatingInputUsername"
                                        placeholder="Username" required autofocus>
                                </div>

                                <div class="form-floating mb-3">
                                    <input name="email" type="email" class="form-control1" id="floatingInputEmail"
                                        placeholder="Email address">
                                </div>

                                <hr>

                                <div class="form-floating mb-3">
                                    <input name="password" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        class="form-control1" id="floatingPassword" placeholder="Password">
                                </div>

                                <div id="message">
                                    <div class="paragrafi">
                                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                        <p id="capital" class="invalid">A <b>uppercase</b> letter</p>
                                        <p id="number" class="invalid">A <b>number</b></p>
                                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input name="password_confirmation" type="password" class="form-control1"
                                        id="floatingPasswordConfirm" placeholder="Confirm Password">
                                </div>

                                <div class="d-grid mb-2">
                                    <button id="vjg2" class="btn2 btn-lg btn-primary btn-login fw-bold text-uppercase"
                                        type="submit">Register</button>
                                </div>

                                <hr class="my-4">
                                <a id="a1" class="d-block text-center mt-2 small" href="/login">Have an account? Go
                                    back to login</a>

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
    <script src="{{ asset('js/password.js') }}"></script>
@endsection
