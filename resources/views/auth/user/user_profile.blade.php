@extends('layouts.app')
@section('content')
    <div class="mx-5 pt-[200px] flex flex-col items-center ">


        <!-- Alerti -->
        <div class=" mb-2 w-full max-w-screen-md lg:max-w-screen-lg relative overflow-x-auto">
            @if (session('status'))
                <div id="alert "class="mb-2 flex p-4 text-sm text-green-800 border border-green-300 rounded-2xl bg-green-50 dark:bg-[#454547] dark:text-green-400 dark:border-green-800"
                    role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{ session('status') }}
                    </div>
                </div>
            @elseif (session('error'))
                <div id="alert "class="mb-2 flex p-4 text-sm text-red-800 border border-red-300 rounded-2xl bg-red-50 dark:bg-[#454547] dark:text-red-400 dark:border-red-800"
                    role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{ session('error') }}
                    </div>
                </div>
            @endif
        </div>

        <!-- Breadcrumb -->
        <nav class="mb-2 w-full max-w-screen-md lg:max-w-screen-lg relative overflow-x-auto flex px-5 py-3 dark:bg-[#454547] bg-white dark:shadow-xl shadow-lg rounded-3xl"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Home
                    </a>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">My Profile</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- User Information -->
        <div
            class="dark:bg-[#454547] bg-white dark:shadow-xl shadow-lg my-5 w-full max-w-screen-md lg:max-w-screen-lg relative overflow-x-auto rounded-3xl">

            <div class=" border-b-[1px] dark:border-zinc-500 border-zinc-200 px-8 py-4 ">
                <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white">
                    Edit profile
                </h2>
            </div>

            <div class=" px-8 pb-8 pt-1 ">


                <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action="{{ url('update_user/' . Auth::user()->id) }}"
                    id="myForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Username
                        </label>
                        <input readonly value="{{ Auth::user()->name }}" type="text" id="textmuted" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#323232] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-600">

                    </div>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email
                        </label>
                        <input readonly value="{{ Auth::user()->email }}" type="text" id="textmuted" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#323232] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-600">
                    </div>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Foot
                            size
                            (cm)
                        </label>
                        <input readonly value="{{ auth()->user()->foot_size_cm }}" type="number" id="textmuted"
                            name="foot_size_cm"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#323232] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-600">
                    </div>

                    <button id="readonly" type="button"
                        class="text-white dark:text-black bg-gray-800 dark:bg-white hover:bg-gray-900 dark:hover:bg-zinc-200 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border">Edit
                        profile</button>
                    <button value="Submit" id="saveChanges_Button" type="submit"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save
                        changes</button>

                </form>

            </div>

        </div>

        <!-- User password change -->
        <div
            class="dark:bg-[#454547] bg-white dark:shadow-xl shadow-lg my-5 w-full max-w-screen-md lg:max-w-screen-lg relative overflow-x-auto rounded-3xl">

            <div class=" border-b-[1px] dark:border-zinc-500 border-zinc-200 px-8 py-4">
                <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white">
                    Edit password
                </h2>
            </div>

            <div class=" px-8 pb-8 pt-1 ">


                <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action="{{ route('update-password') }}" id="myform2"
                    method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Current Password
                        </label>
                        <input readonly type="password" placeholder="••••••••" id="oldPasswordInput" name="old_password"
                            class="@error('old_password') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#323232] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-600">
                        @error('old_password')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> New
                            Password
                        </label>
                        <input readonly type="password" placeholder="••••••••" id="newPasswordInput" name="new_password"
                            class="@error('new_password') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#323232] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-600">
                        @error('new_password')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Confirm New Password
                        </label>
                        <input readonly type="password" placeholder="••••••••" id="confirm_password"
                            name="new_password_confirmation"
                            class="@error('old_password') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#323232] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-600">

                    </div>


                    <button id="readonly2" type="button"
                        class="text-white dark:text-black bg-gray-800 dark:bg-white hover:bg-gray-900 dark:hover:bg-zinc-200 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border">Edit
                        password</button>
                    <button value="Submit" id="saveChanges_Button2" type="submit"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save
                        changes</button>


                </form>
            </div>

        </div>

        <!-- User account deletion -->
        <div
            class="dark:bg-[#454547] bg-white dark:shadow-xl shadow-lg my-5 w-full max-w-screen-md lg:max-w-screen-lg relative overflow-x-auto rounded-3xl">

            <div class=" border-b-[1px] dark:border-zinc-500 border-zinc-200 px-8 py-4">
                <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white">
                    Delete Account
                </h2>
            </div>

            <div class=" px-8 pb-8 pt-1 ">


                <div class="mt-4 space-y-4 lg:mt-5 md:space-y-5">

                    <div>
                        <label for="name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">
                            Once your account is deleted, all of its resources and data will be permanently deleted. Before
                            deleting your account, please download any data or information that you wish to retain.
                        </label>


                        <form action="{{ url('self-delete') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Permanently
                                Delete</button>
                        </form>


                    </div>
                </div>

            </div>

        </div>




        <style>
            #readonly {
                display: block;
            }

            #saveChanges_Button {
                display: none;
            }

            #readonly2 {
                display: block;
            }

            #saveChanges_Button2 {
                display: none;
            }
        </style>

        <script src="{{ asset('js/edit_profile.js') }}"></script>
    @endsection
