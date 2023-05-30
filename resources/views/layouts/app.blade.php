<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <link
    href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
    rel="stylesheet">

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <title>Website</title>

    @vite('resources/css/app.css')

</head>

<body class="dark:bg-[#323232] bg-[#eeeeee]">


    <div id="app">

        <div class="w-auto apple-navbar">
            <header
                class="dark:bg-[#4a4a4c]/80 fixed inset-x-0 top-0 z-30 mx-auto w-full max-w-screen-md border border-none bg-white/80 py-3 shadow-lg dark:shadow-xl backdrop-blur-lg md:top-6 md:rounded-3xl lg:max-w-screen-lg">
                <div class="px-4">
                    <div class="flex items-center justify-between">
                        <div class=" flex shrink-0">
                            <a aria-current="page" class="flex items-center" href="/">
                                <div class="dark:invert">
                                    <img id="imgg" src="{{ asset('/image/LOGO.png') }}" width="100"
                                        height="50" style="transform: scaleX(-1);">
                                </div>
                            </a>
                        </div>
                        <div class="hidden md:inline md:flex md:items-center md:justify-center md:gap-5">
                            <a aria-current="page"
                                class="dark:text-white inline-block rounded-lg px-2 py-1 text-sm font-medium text-zinc-900 transition-all duration-200 hover:bg-zinc-200 dark:hover:bg-[#383838] hover:text-zinc-900"
                                href="/">Home</a>
                            <a class="dark:text-white inline-block rounded-lg px-2 py-1 text-sm font-medium text-zinc-900 transition-all duration-200 hover:bg-zinc-200 dark:hover:bg-[#383838] hover:text-zinc-900"
                                href="/start_pages/size_converter">Size converter</a>
                        </div>
                        <div class="flex items-center justify-end gap-3">

                            <div class="flex md:order-2 divide-x dark:divide-zinc-500">
                                <div class="darkmode-button pr-2">
                                    <button id="theme-toggle" type="button"
                                        class="text-zinc-500 dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-[#383838] focus:outline-none focus:ring-4 focus:ring-transparent dark:focus:ring-transparent rounded-lg text-sm p-2.5">
                                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                            </path>
                                        </svg>
                                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                fill-rule="evenodd" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                @guest
                                    <div class="authorize-buttons flex justify-center pl-1">
                                        <a class=" mr-1 ml-1 inline-flex items-center justify-center rounded-lg bg-[#FA4646] px-3 py-2 text-sm font-semibold text-white dark:shadow-md shadow-sm transition-all duration-150 hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 "
                                            href="/login">Login</a>
                                        <a class="border border-gray-200 mr-2 ml-1 inline-flex items-center justify-center rounded-lg bg-white dark:border-transparent dark:hover:bg-gray-100 px-3 py-2 text-sm font-semibold text-black dark:shadow-md shadow-sm transition-all duration-150 hover:bg-gray-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                                            href="/register">Register</a>
                                    </div>
                                @endguest
                            </div>

                            @auth
                                <div class="flex items-center md:order-2">
                                    <button type="button"
                                        class="flex mr-3 text-sm rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                        data-dropdown-placement="bottom">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="dark:invert w-8 h-8 rounded-full"
                                        src="{{ asset('/image/profile.png') }}"
                                            alt="user photo">
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div class="z-50 hidden my-4 text-base bg-[#f6f6f6] list-none bg-white divide-y divide-zinc-200 rounded-lg shadow dark:bg-[#434343] dark:divide-zinc-600"
                                        id="user-dropdown">
                                        <div class="px-4 py-3">
                                            <span
                                                class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                            <span
                                                class="block text-sm  text-zinc-500 truncate dark:text-zinc-300">{{ Auth::user()->email }}</span>
                                        </div>
                                        <ul class="py-2" aria-labelledby="user-menu-button">
                                            @role('Admin')
                                                <li>
                                                    <a href="/manage_tables/manage_Vans"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-zinc-300 dark:hover:bg-[#575757] dark:text-zinc-200 dark:hover:text-white">{{ __('Manage sizes') }}</a>
                                                </li>
                                                <li>
                                                    <a href="/auth/user/user_profile"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-zinc-300 dark:hover:bg-[#575757] dark:text-zinc-200 dark:hover:text-white">{{ __('Manage "My profile"') }}</a>
                                                </li>
                                                <li>
                                                    <a href="/check-size"
                                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-zinc-300 dark:hover:bg-[#575757] dark:text-zinc-200 dark:hover:text-white">{{ __('Manage "Edit your size"') }}</a>
                                                </li>
                                            @endrole
                                            @if (Auth::user()->email != 'Admin@Admin.Admin')
                                            <li>
                                                <a href="/auth/user/user_profile"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-zinc-300 dark:hover:bg-[#575757] dark:text-zinc-200 dark:hover:text-white">{{ __('My profile') }}</a>
                                            </li>
                                            <li>
                                                <a href="/check-size"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-zinc-300 dark:hover:bg-[#575757] dark:text-zinc-200 dark:hover:text-white">{{ __('Edit your size') }}</a>
                                            </li>
                                            @endif
                                            <li>
                                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-zinc-300 dark:hover:bg-[#575757] dark:text-zinc-200 dark:hover:text-white"
                                                    href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </header>
        </div>

    </div>

    <main class="dark:bg-[#323232] bg-[#eeeeee] blade" class="py-4">
        @yield('content')
    </main>

</body>

<script src="{{ asset('js/darkmode.js') }}"></script>

</html>
