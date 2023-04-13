@extends('layouts.app')
@section('content')
    <div class="pt-[200px] pb-[220px] flex flex-col items-center ">



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
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Search your
                            size</span>
                    </div>
                </li>
            </ol>
        </nav>


        <!-- User account deletion -->
        <div
            class="dark:bg-[#454547] bg-white dark:shadow-xl shadow-lg my-5 w-full max-w-screen-md lg:max-w-screen-lg relative overflow-x-auto rounded-3xl">

            <div class=" border-b-[1px] dark:border-zinc-500 border-zinc-200 px-8 py-4">
                <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white">
                    Search your size
                </h2>
            </div>

            <div class=" px-8 pb-8 pt-1 ">


                <div class="mt-4 space-y-4 lg:mt-5 md:space-y-5">

                    <div>

                        <p class="mb-5 text-lg dark:text-white">
                            Your saved foot size is {{ auth()->user()->foot_size_cm }}cm
                        </p>

                        <label for="name" class="block mb-5 text-md font-medium text-gray-900 dark:text-white">
                            Seit varetu ievadit savu izmeru, dzimti, zimolu un meklet veikalus kados ir tas izmers
                        </label>


                        <div>
                            <form action="/enter_size" method="post">
                                @csrf
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Foot
                                    size
                                    (cm)
                                </label>
                                <div class="relative">
                                    <input id="sizeinput" max="1000" name="foot_size_cm" type="number"
                                        class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-[#323232] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Enter a number">
                                    <button type="submit"
                                        class="text-white dark:text-black absolute right-2.5 bottom-2.5 bg-black hover:bg-zinc-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 dark:bg-white dark:hover:bg-zinc-200">Enter</button>
                                </div>
                            </form>
                        </div>

                        <div class="mt-3">
                            <form>
                                <label for="search"
                                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                    <input type="search" id="search"
                                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-[#323232] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search" required>
                                    <button type="submit"
                                        class="text-white dark:text-black absolute right-2.5 bottom-2.5 bg-black hover:bg-zinc-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 dark:bg-white dark:hover:bg-zinc-200">Search</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    @endsection
