@extends('layouts.app')
@section('content')


<div style="padding: 50px; border:solid green">
    <h1 class="flex text-6xl font-bold">
        Hello world!
    </h1>
    <h1 class="text-6xl font-bold">
        Hello world!2
    </h1>
</div>



@endsection


        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light" id="darkmodenavbar">

            <div class="picturenav">
                <a href="/">
                    <img id="picturenav" style="align-self: center;margin: 0;margin-left: auto;margin-right: auto;"
                        src="{{ asset('/image/LOGO2.png') }}" alt="Girl in a jacket" class="saturate">
                </a>
            </div>

            <div class="malaa1">
                <button id="krasaa" class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="justify-content: flex-end;">
                <div class="deda">
                    <img onclick="darkmode()" id="mybtn" src="{{ asset('/image/moon.png') }}" height="30px"
                        width="30px">
                </div>
                <div class="navbar-nav">

                    <li class="dropdown-menu-left">
                        <div class="dropdown-menu">
                            @guest
                                @if (Route::has('login'))
                        <li class="nav-item">
                            <div class="abidivi">
                                <a href="/login" id="vjg"><b>Login</b> <span class="caret"></span></a>
                                <a href="/register" id="vjg3"><b>New around here? Sign up</b> <span
                                        class="caret"></span></a>
                            </div>
                        </li>
                        @endif
                    @else
                        <li style=" display: flex;flex-direction: column;align-items: flex-end;" class="nav-item-dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div style="position:absolute" class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="navbarDropdown">
                                @if (Auth::user()->id == 1)
                                    <a class="dropdown-item" href="/manage_tables/manage_vans">
                                        {{ __('Manage sizes') }}
                                    </a>
                                @endif

                                    <a class="dropdown-item" href="/auth/user/user_profile">
                                        {{ __('My profile') }}
                                    </a>

                                <a class="dropdown-item" href="/search_size">
                                    {{ __('Search your size') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </div>
                </li>
            </div>

        </nav> --}}


        {{-- <img class="imagew" src="{{ asset('/image/wallpaper_jordan.jpg') }}" alt="" width="100%" height="600px"> --}}

    {{-- <div class="teksts">

        <div class="mainit">
            <img id="imgg" src="{{ asset('/image/LOGO.png') }}" alt="Girl in a jacket" width="100"
                height="50" class="saturate">
            <h3 id="virsr"> Would you like to know your international shoe size? </h3>
            <h4 id="virsr2"> Do you know how long is your feet in centimeters? </h4>
        </div>

        <div class="container">
            <div class="row">
                <div id="ir1" class="col-sm">
                    <div class="uu1">
                        <img id="rod1"
                            src="https://instantpot.com/wp-content/uploads/2017/07/Thumbs-Up-Icon-red.png" />
                    </div>
                    <div id="vajg1" class="col-sm">
                        <h4>1.<br> If you do know, then click "next" to select a brand </h4>
                    </div>
                </div>
                <div id="ir2" class="col-sm">
                    <div class="uu2">
                        <img id="rod2" src="https://run-of.com/wp-content/uploads/2022/03/foot-measure.png" />
                    </div>
                    <div id="vajg2" class="col-sm">
                        <h4>2.<br> If you dont know, you can easly measure its lenght (Preferably in cm) </h4>
                    </div>
                </div>
                <div id="ir3" class="col-sm">
                    <div class="uu3">
                        <img id="rod3"
                            src="https://icons.veryicon.com/png/o/education-technology/ecology/vice-versa.png" />
                    </div>
                    <div class="col-sm">
                        <h4>3.<br> In case you cant measure it in cm, there is converter at the bottom </h4>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}

    {{-- <div class="converter" id="collapse3" style="display:none">
        <div class="form-group col-sm-4">

            <div class="de">
                <input id="inputInches" class="form-control" type="number" placeholder="Inches"
                    oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
            </div>
            <div class="sk">
                <input id="inputcm" class="form-control" type="number" placeholder="Cm"
                    oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
            </div>
        </div>
    </div> --}}

    {{-- <div class="beigaas">
        <div class="box-1">
            <a id="nulll" href="/start_pages/size_converter" class="btn btnneed btn-one" role="button"><span>Next</span></a>
        </div>
        <a id="dark2" href="#collapse3" class="nav-link" id="toggle">Get converter</a>
    </div> --}}
