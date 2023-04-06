@extends('layouts.app')
@section('content')

    <style>
        @media (max-width: 767px) {
            #bladess {
                padding-top: 250px
            }
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        textarea:-webkit-autofill,
        textarea:-webkit-autofill:hover,
        textarea:-webkit-autofill:focus,
        select:-webkit-autofill,
        select:-webkit-autofill:hover,
        select:-webkit-autofill:focus {
        border: 1px solid rgba(0, 128, 0, 0);
        -webkit-text-fill-color: rgb(0, 0, 0);
        -webkit-box-shadow: 0 0 0px 1000px #00000000 inset;
        transition: background-color 5000s ease-in-out 0s;
        }
    </style>

    <div class="w-full h-screen md:flex">

            <div class="w-full">
                <img class="object-cover h-full w-full relative overflow-hidden md:flex justify-around items-center hidden"
                    src="{{ asset('/image/wallpaper_jordan.jpg') }}" alt="">
            </div>

        <div class="2 w-full flex justify-center py-10 items-center bg-[#eeeeee] dark:bg-[#323232]">
            <div id="bladess" class="w-1/2 flex justify-center py-10 items-center bg-transparent">
                <div class="w-[400px] bg-transparent">
                    <h1 class="dark:text-white text-gray-800 font-bold text-2xl mb-1">Register</h1>
                    <p class="dark:text-zinc-300 text-sm font-normal text-gray-600 mb-7">Welcome</p>


                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="text-zinc-700 dark:text-zinc-200 border-transparent dark:bg-[#4a4a4c] bg-white flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                            <input class="border-transparent focus:border-transparent focus:ring-0 bg-transparent pl-2 outline-none border-none" type="text" name="name"
                                id="" autofocus placeholder="Username" />
                        </div>

                        <div class="text-zinc-700 dark:text-zinc-200 border-transparent dark:bg-[#4a4a4c] bg-white flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                            <input name="email" type="email" class="border-transparent focus:border-transparent focus:ring-0 bg-transparent pl-2 outline-none border-none"
                                id="Emaill" placeholder="email@example.com" required autocomplete="email"
                                value="{{ old('email') }}" >
                        </div>

                        <div class="text-zinc-700 dark:text-zinc-200 border-transparent dark:bg-[#4a4a4c] bg-white flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                            </svg>
                            <input type="password" class="border-transparent focus:border-transparent focus:ring-0 bg-transparent  pl-2 outline-none border-none" name="password"
                                id="" placeholder="Password" />
                        </div>

                        <div class="text-zinc-700 dark:text-zinc-200 border-transparent dark:bg-[#4a4a4c] bg-white flex items-center border-2 py-2 px-3 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <input name="password_confirmation" type="password"
                                class="border-transparent focus:border-transparent focus:ring-0 bg-transparent pl-2 outline-none border-none" id="Passwordd"
                                placeholder="Confirm Password" required autocomplete="current_password" autofocus>
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


                        <button id="vjg2"
                            class="block w-full bg-[#FA4646] mt-4 py-2 rounded-2xl text-white font-semibold mb-2"
                            type="submit">Register</button>
                        <a href="/login"
                            class="dark:text-zinc-300 text-zinc-700 text-sm ml-2 hover:text-blue-500 cursor-pointer">Have an
                            account? Go
                            back to login</a>
                    </form>
                </div>
            </div>
        </div>

    </div>



    <script src="{{ asset('js/password.js') }}"></script>
@endsection
