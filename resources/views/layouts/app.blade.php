<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>

    <meta name="color-scheme" content="dark light">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tailwind.css') }}">


    <title>JSneaks</title>

    @vite('resources/css/app.css')

    <title>JSneaks</title>
</head>

<body>


    <div id="app">
        {{-- <nav style="padding-top:300px" class="bg-white border-gray-200 dark:bg-zinc-800 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <div class="filter-none dark:invert">
                    <a href="/">
                        <img id="picturenav" src="{{ asset('/image/LOGO2.png') }}" alt="Girl in a jacket">
                    </a>
                </div>
                <button data-collapse-toggle="navbar-multi-level" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-multi-level" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-zinc-800 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                                aria-current="page">Home</a>
                        </li>
                        <li>

                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="flex items-center justify-between w-full py-2 pl-3 pr-4  text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Authorize<svg
                                    class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg></button>
                            <!-- Dropdown menu -->


                            @guest
                                <div id="dropdownNavbar"
                                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                        aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Authorize</a>
                                        </li>
                                        <li aria-labelledby="dropdownNavbarLink">
                                            <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                                                data-dropdown-placement="right-start" type="button"
                                                class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Authorize<svg
                                                    aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg></button>
                                            <div id="doubleDropdown"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="doubleDropdownButton">
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Login</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Register</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                    </ul>
                                </div>
                            @endguest

                            @auth
                                <div id="dropdownNavbar"
                                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                        aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Authorize</a>
                                        </li>
                                        <li aria-labelledby="dropdownNavbarLink">
                                            <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown"
                                                data-dropdown-placement="right-start" type="button"
                                                class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Authorize<svg
                                                    aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg></button>
                                            <div id="doubleDropdown"
                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                    aria-labelledby="doubleDropdownButton">
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Login</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Register</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign
                                            out</a>
                                    </div>
                                </div>
                            @endauth
                        </li>


                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                        </li>


                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav> --}}

        <div class="apple-navbar">
            <header
                class="dark:bg-[#4a4a4c] dark:border-zinc-800 fixed inset-x-0 top-0 z-30 mx-auto w-full max-w-screen-md border border-gray-100 bg-white/80 py-3 shadow-lg dark:shadow-xl backdrop-blur-lg md:top-6 md:rounded-3xl lg:max-w-screen-lg">
                <div class="px-4">
                    <div class="flex items-center justify-between">
                        <div class=" flex shrink-0">
                            <a aria-current="page" class="flex items-center" href="/">
                                <div class="dark:invert">
                                    <img id="imgg" src="{{ asset('/image/LOGO.png') }}" width="100" height="50" style="transform: scaleX(-1);">
                                </div>
                            </a>
                        </div>
                        <div class=" md:flex md:items-center md:justify-center md:gap-5">
                            <a aria-current="page"
                                class="dark:text-white inline-block rounded-lg px-2 py-1 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-200 dark:hover:bg-zinc-700 hover:text-gray-900"
                                href="#">Home</a>
                            <a class="dark:text-white inline-block rounded-lg px-2 py-1 text-sm font-medium text-gray-900 transition-all duration-200 hover:bg-gray-200 dark:hover:bg-zinc-700 hover:text-gray-900"
                                href="/start_pages/size_converter">Size converter</a>
                        </div>
                        <div class="flex items-center justify-end gap-3">
                            <div class="flex md:order-2 divide-x">
                                <div class="darkmode-button pr-2">
                                    <button id="theme-toggle" type="button"
                                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                        </svg>
                                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                fill-rule="evenodd" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="authorize-buttons flex justify-center pl-1">
                                        <a class=" mr-2 ml-1 inline-flex items-center justify-center rounded-lg bg-red-600 px-3 py-2 text-sm font-semibold text-white dark:shadow-md shadow-sm transition-all duration-150 hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 "
                                        href="/login">Login</a>
                                        <a class="border border-gray-200 mr-2 ml-1 inline-flex items-center justify-center rounded-lg bg-white dark:bg-[#ababab] dark:border-transparent dark:hover:bg-gray-100 px-3 py-2 text-sm font-semibold text-black dark:shadow-md shadow-sm transition-all duration-150 hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                                        href="/register">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>


    </div>


    <main class="dark:bg-[#323232] blade" class="py-4">
        @yield('content')
    </main>

</body>

<script src="{{ asset('js/darkmode.js') }}"></script>

</html>
