@extends('layouts.app')
@section('content')


    <div class=" pt-[150px] pb-[70px] px-7 flex flex-col items-center">

        <a
            class="  dark:bg-[#4a4a4c] w-full max-w-screen-md lg:max-w-screen-lg        my-5 flex flex-col align-center bg-white  rounded-lg shadow-lg dark:shadow-xl md:flex-row md:max-w-full">

            <div class="flex align-center">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-[20rem] md:rounded-none md:rounded-l-lg"
                    src="{{ asset('/image/vans.png') }}" alt="">
            </div>

            <div class=" w-full">
                <div class=" flex flex-col justify-between py-5 px-7 leading-normal">
                    <div class="selekts">
                        <select id="ident"
                            class="mb-5 border-transparent focus:border-transparent focus:ring-0 dark:bg-[#323232] bg-zinc-200 border border-none text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:border-none dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-transparent">
                            @foreach ($vans as $value)
                                <option value="" disabled selected hidden>Select size</option>
                                <option class="optioncolor" id="ident" value="{{ $value->cm }}">{{ $value->cm }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class=" relative overflow-x-auto">
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

        <a
            class=" dark:bg-[#4a4a4c] w-full max-w-screen-md lg:max-w-screen-lg        my-5 flex flex-col align-center bg-white rounded-lg shadow-lg dark:shadow-xl md:flex-row md:max-w-full">

            <div class="flex align-center">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-[20rem] md:rounded-none md:rounded-l-lg"
                    src="{{ asset('/image/nike.png') }}" alt="">
            </div>

            <div class="w-full">
                <div class=" flex flex-col justify-between py-5 px-7 leading-normal">
                    <div class="selekts">
                        <select id="ident2"
                            class="mb-5 border-transparent focus:border-transparent focus:ring-0 dark:bg-[#323232] bg-zinc-200 border border-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-transparent">
                            @foreach ($nike as $value)
                                <option value="" disabled selected hidden>Select size</option>
                                <option class="optioncolor" id="ident2" value="{{ $value->cm }}">
                                    {{ $value->cm }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" relative overflow-x-auto">
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

        <a
            class=" w-full max-w-screen-md lg:max-w-screen-lg        my-5 flex flex-col align-center bg-white rounded-lg shadow-lg dark:shadow-xl md:flex-row md:max-w-full dark:bg-[#4a4a4c]">

            <div class="flex align-center">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-[20rem] md:rounded-none md:rounded-l-lg"
                    src="{{ asset('/image/adidas.png') }}" alt="">
            </div>

            <div class="w-full">
                <div class=" flex flex-col justify-between py-5 px-7 leading-normal">
                    <div class="selekts">
                        <select id="ident3"
                            class="mb-5 border-transparent focus:border-transparent focus:ring-0 dark:bg-[#323232] bg-zinc-200 border border-none text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-transparent">
                            @foreach ($adidas as $value)
                                <option value="" disabled selected hidden>Select size</option>
                                <option class="optioncolor" id="ident3" value="{{ $value->cm }}">
                                    {{ $value->cm }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" relative overflow-x-auto">
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

        <a
            class=" w-full max-w-screen-md lg:max-w-screen-lg        my-5 flex flex-col align-center bg-white rounded-lg shadow-lg dark:shadow-xl md:flex-row md:max-w-full dark:bg-[#4a4a4c]">

            <div class="flex align-center">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-[20rem] md:rounded-none md:rounded-l-lg"
                    src="{{ asset('/image/newbalance.png') }}" alt="">
            </div>

            <div class="w-full">
                <div class=" flex flex-col justify-between py-5 px-7 leading-normal">
                    <div class="selekts">
                        <select id="ident4"
                            class="mb-5 border-transparent focus:border-transparent focus:ring-0 dark:bg-[#323232] bg-zinc-200 border border-none text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-transparent">
                            @foreach ($newbalance as $value)
                                <option value="" disabled selected hidden>Select size</option>
                                <option class="optioncolor" id="ident4" value="{{ $value->cm }}">
                                    {{ $value->cm }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" relative overflow-x-auto">
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


    </div>









    <script src="{{ asset('js/ajax.js') }}"></script>

@endsection
