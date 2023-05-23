@extends('layouts.app')
@section('content')
    <div class=" pt-[200px] pb-[70px] px-7 flex flex-col items-center">

        <!-- Breadcrumb -->
        <nav class="mb-5 w-full max-w-screen-md lg:max-w-screen-lg relative overflow-x-auto flex px-5 py-3 dark:bg-[#454547] bg-white dark:shadow-xl shadow-lg rounded-3xl"
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
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Size
                            Converter</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Vans -->
        <a
            class="  dark:bg-[#4a4a4c] w-full max-w-screen-md lg:max-w-screen-lg        my-5 flex flex-col align-center bg-white  rounded-3xl shadow-lg dark:shadow-xl md:flex-row md:max-w-full">

            <div class="flex align-center">
                <img class="object-cover w-full rounded-t-3xl h-96 md:h-auto md:w-[20rem] md:rounded-none md:rounded-l-3xl"
                    src="{{ asset('/image/vans.png') }}" alt="">
            </div>

            <div class=" w-full">
                <div class=" flex flex-col justify-between py-5 px-7 leading-normal">
                    <div class="selekts">
                        <select id="ident"
                            class="mb-2 border-transparent focus:border-transparent focus:ring-0 dark:bg-[#323232] bg-zinc-200 border border-none text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:border-none dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-transparent">

                            @auth
                                <option value="{{ auth()->user()->foot_size_cm }}">Your saved size -
                                    {{ auth()->user()->foot_size_cm }}</option>
                            @endauth

                            @guest
                                <option value="" disabled selected hidden>Select size</option>
                            @endguest

                            @foreach ($vans as $value)
                                <option class="optioncolor" id="ident" value="{{ $value->cm }}">{{ $value->cm }}
                                </option>
                            @endforeach

                        </select>
                        <div id="warning-vans" class="xs:text-center sm:text-left text-sm mb-3 text-red-600 font-bold">
                            Could not find your entered size so here is the closest -
                        </div>

                    </div>



                    <div class="mt-2 relative overflow-x-auto">
                        <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row "
                                        class="lg:w-[350px] md:w-[325px] sm:w-[300px] px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">EU size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size1"></span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row"
                                        class="px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">UK size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size2"></span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row"
                                        class="px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">US-M size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size3"></span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row"
                                        class="px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">US-W size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size4"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </a>

        <!-- Nike -->
        <a
            class=" dark:bg-[#4a4a4c] w-full max-w-screen-md lg:max-w-screen-lg        my-5 flex flex-col align-center bg-white rounded-3xl shadow-lg dark:shadow-xl md:flex-row md:max-w-full">

            <div class="flex align-center">
                <img class="object-cover w-full rounded-t-3xl h-96 md:h-auto md:w-[20rem] md:rounded-none md:rounded-l-3xl"
                    src="{{ asset('/image/nike.png') }}" alt="">
            </div>

            <div class="w-full">
                <div class=" flex flex-col justify-between py-5 px-7 leading-normal">
                    <div class="selekts">
                        <select id="ident2"
                            class="mb-2 border-transparent focus:border-transparent focus:ring-0 dark:bg-[#323232] bg-zinc-200 border border-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-transparent">
                            @auth
                                <option value="{{ auth()->user()->foot_size_cm }}">Your saved size -
                                    {{ auth()->user()->foot_size_cm }}</option>
                            @endauth

                            @guest
                                <option value="" disabled selected hidden>Select size</option>
                            @endguest

                            @foreach ($nike as $value)
                                <option class="optioncolor" id="ident2" value="{{ $value->cm }}">
                                    {{ $value->cm }}
                                </option>
                            @endforeach
                        </select>
                        <div id="warning-nike" class="xs:text-center sm:text-left text-sm mb-3 text-red-600 font-bold">
                            Could not find your entered size so here is the closest -
                        </div>
                    </div>
                    <div class="mt-2 relative overflow-x-auto">
                        <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row "
                                        class="lg:w-[350px] md:w-[325px] sm:w-[300px] px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">EU size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size5"></span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row"
                                        class="px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">UK size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size6"></span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row"
                                        class="px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">US-M size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size7"></span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row"
                                        class="px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">US-W size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size8"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </a>

        <!-- Adidas -->
        <a
            class=" w-full max-w-screen-md lg:max-w-screen-lg        my-5 flex flex-col align-center bg-white rounded-3xl shadow-lg dark:shadow-xl md:flex-row md:max-w-full dark:bg-[#4a4a4c]">

            <div class="flex align-center">
                <img class="object-cover w-full rounded-t-3xl h-96 md:h-auto md:w-[20rem] md:rounded-none md:rounded-l-3xl"
                    src="{{ asset('/image/adidas.png') }}" alt="">
            </div>

            <div class="w-full">
                <div class=" flex flex-col justify-between py-5 px-7 leading-normal">
                    <div class="selekts">
                        <select id="ident3"
                            class="mb-2 border-transparent focus:border-transparent focus:ring-0 dark:bg-[#323232] bg-zinc-200 border border-none text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-transparent">
                            @auth
                                <option value="{{ auth()->user()->foot_size_cm }}">Your saved size -
                                    {{ auth()->user()->foot_size_cm }}</option>
                            @endauth

                            @guest
                                <option value="" disabled selected hidden>Select size</option>
                            @endguest

                            @foreach ($adidas as $value)
                                <option class="optioncolor" id="ident3" value="{{ $value->cm }}">
                                    {{ $value->cm }}
                                </option>
                            @endforeach
                        </select>
                        <div id="warning-adidas" class="xs:text-center sm:text-left text-sm mb-3 text-red-600 font-bold">
                            Could not find your entered size so here is the closest -
                        </div>
                    </div>
                    <div class="mt-2 relative overflow-x-auto">
                        <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row "
                                        class="lg:w-[350px] md:w-[325px] sm:w-[300px] px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">EU size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size9"></span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row"
                                        class="px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">UK size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size10"></span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row"
                                        class="px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">US-M size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size11"></span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row"
                                        class="px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">US-W size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size12"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </a>

        <!-- New Balance -->
        <a
            class=" w-full max-w-screen-md lg:max-w-screen-lg        my-5 flex flex-col align-center bg-white rounded-3xl shadow-lg dark:shadow-xl md:flex-row md:max-w-full dark:bg-[#4a4a4c]">

            <div class="flex align-center">
                <img class="object-cover w-full rounded-t-3xl h-96 md:h-auto md:w-[20rem] md:rounded-none md:rounded-l-3xl"
                    src="{{ asset('/image/newbalance.png') }}" alt="">
            </div>

            <div class="w-full">
                <div class=" flex flex-col justify-between py-5 px-7 leading-normal">
                    <div class="selekts">
                        <select id="ident4"
                            class="mb-2 border-transparent focus:border-transparent focus:ring-0 dark:bg-[#323232] bg-zinc-200 border border-none text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-transparent">
                            @auth
                                <option value="{{ auth()->user()->foot_size_cm }}">Your saved size -
                                    {{ auth()->user()->foot_size_cm }}</option>
                            @endauth

                            @guest
                                <option value="" disabled selected hidden>Select size</option>
                            @endguest

                            @foreach ($newbalance as $value)
                                <option class="optioncolor" id="ident4" value="{{ $value->cm }}">
                                    {{ $value->cm }}
                                </option>
                            @endforeach
                        </select>

                        <div id="warning-newbalance"
                            class="xs:text-center sm:text-left text-sm mb-3 text-red-600 font-bold">
                            Could not find your entered size so here is the closest -
                        </div>
                    </div>
                    <div class="mt-2 relative overflow-x-auto">
                        <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <tbody>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row "
                                        class="lg:w-[350px] md:w-[325px] sm:w-[300px] px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">EU size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size13"></span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row"
                                        class="px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">UK size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size14"></span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row"
                                        class="px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">US-M size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size15"></span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-[#4a4a4c]">
                                    <td scope="row"
                                        class="px-0 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <span class="text-base">US-W size</span>
                                    </td>
                                    <td class="px-0 py-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </td>
                                    <td class="flex justify-end px-0 py-2">
                                        <span class="font-bold text-base" id="size16"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </a>

        @auth
        <!-- Comment input section -->
        <div class="my-[150px] w-full max-w-screen-md lg:max-w-screen-lg">

            <label for="message"
                class="mb-5 text-center block mb-2 text-lg font-medium text-gray-900 dark:text-white">Let us know if there
                is any issues or areas for improvement.</label>
            <form class="dark:shadow-xl shadow-lg rounded-3xl" action="{{ route('comments.store') }}" method="POST">
                @csrf

                <div
                    class="rounded-3xl w-full mb-4 border border-zinc-200 bg-gray-50 dark:bg-[#454547] dark:border-zinc-600">
                    <div class="px-4 py-2 bg-white rounded-t-3xl dark:bg-[#4a4a4c]">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea name="content" id="content" rows="4"
                            class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-[#4a4a4c] focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Write a comment..." required></textarea>
                    </div>
                    <div class="flex items-center justify-between px-3 py-2 border-t dark:border-zinc-600">
                        <button type="submit"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center dark:text-black text-white bg-black dark:bg-white rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Post comment
                        </button>
                    </div>
                </div>
            </form>
        </div>


        <!-- User Comments -->
        <label for="message" class="mb-5 text-center block mb-2 text-lg font-medium text-gray-900 dark:text-white">All comments</label>
        @foreach ($comments as $comment)
        <article class="w-full max-w-screen-md lg:max-w-screen-lg p-6 mb-6 text-base bg-white dark:shadow-xl shadow-lg rounded-3xl dark:bg-[#4a4a4c]">
            <footer class="flex justify-between items-center mb-2">
                <div class="flex items-center">
                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                            class="dark:invert mr-2 w-6 h-6 rounded-full"
                            src="{{ asset('/image/profile.png') }}"
                            alt="Michael Gough">{{ $comment->user->name }}</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                            title="February 8th, 2022">Feb. 8, 2022</time></p>
                </div>
                @if(auth()->check() && $comment->user_id === auth()->user()->id)
                    <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-[#4a4a4c] dark:hover:bg-[#454547] dark:focus:ring-[#454547]"
                        type="button">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                            </path>
                        </svg>
                        <span class="sr-only">Comment settings</span>
                    </button>
                @endif
                <!-- Dropdown menu -->

                <div id="dropdownComment1"
                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-[#454547] dark:divide-gray-600">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                        aria-labelledby="dropdownMenuIconHorizontalButton">

                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-[#4a4a4c] dark:hover:text-white">Edit</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-[#4a4a4c] dark:hover:text-white">Remove</a>
                        </li>

                    </ul>
                </div>

            </footer>
            <p class="break-words text-gray-500 dark:text-gray-400">{{ $comment->content }}</p>
        </article>
        @endforeach

        @endauth
    </div>

    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/comment-edit.js') }}"></script>
@endsection
