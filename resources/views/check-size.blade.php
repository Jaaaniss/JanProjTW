@extends('layouts.app')
@section('content')
    <div class="mx-5  pt-[200px] pb-[492px] flex flex-col items-center ">


        @auth
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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Edit your
                                size</span>
                        </div>
                    </li>
                </ol>
            </nav>


            <!-- Edit size div -->
            <div
                class="dark:bg-[#454547] bg-white dark:shadow-xl shadow-lg my-5 w-full max-w-screen-md lg:max-w-screen-lg relative overflow-x-auto rounded-3xl">

                <div class=" border-b-[1px] dark:border-zinc-500 border-zinc-200 px-8 py-4">
                    <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white">
                        Edit your size
                    </h2>
                </div>

                <div class=" px-8 pb-8 pt-1 ">


                    <div class="mt-4 space-y-4 lg:mt-5 md:space-y-5">

                        <div class="flex align-center flex-col">

                            <label class="flex justify-left block mb-5 text-lg font-medium text-gray-900 dark:text-white">
                                Your saved foot size is {{ auth()->user()->foot_size_cm }}cm
                            </label>

                            <div>
                                <form action="/enter_size" method="post">
                                    @csrf
                                    <div class="relative flex justify-center">
                                        <input value="{{ auth()->user()->foot_size_cm }}" id="sizeinput" type=number step=0.01 name="foot_size_cm"
                                            class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-[#323232] dark:border-transparent  dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Enter a number">
                                        <button type="submit"
                                            class="ml-3 text-white dark:text-black bg-black hover:bg-zinc-800 focus:ring-4 focus:outline-none font-medium rounded-xl text-sm px-4 py-2 dark:bg-white dark:hover:bg-zinc-200">Enter</button>
                                    </div>
                                </form>
                            </div>
                    </div>

                </div>

            </div>
        @endauth

    @endsection
