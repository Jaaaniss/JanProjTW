@extends('layouts.app')
@section('content')


{{-- <style>
    #size1  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size2  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size3  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size4  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size5  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size6  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size7  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size8  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size9  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size10  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size11  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size12 {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size13  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size14  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size15  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

    #size16  {
    background: #000000;
    width: 35px;
    display: flex;
    height: 25px;
    justify-content: center;
    border-radius: 5px;
    align-items: center;
    }

</style> --}}

    <div class=" pt-[150px] flex flex-col items-center">

        <a
            class=" dark:hover:bg-[#3f3f3f] dark:bg-[#4a4a4c] w-full max-w-screen-md lg:max-w-screen-lg        my-5 flex flex-col align-center bg-white  rounded-lg shadow-lg dark:shadow-xl md:flex-row md:max-w-full hover:bg-gray-100  ">

            <div class="flex align-center">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-[20rem] md:rounded-none md:rounded-l-lg"
                    src="{{ asset('/image/vans.png') }}" alt="">
            </div>

            <div class=" w-full">
                <div class=" flex flex-col justify-between p-4 leading-normal">
                    <div class="selekts">
                        <select id="ident"
                            class="mb-5 border-transparent focus:border-transparent focus:ring-0 dark:bg-[#323232] bg-zinc-200 border border-none text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:border-none dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-transparent">
                            @foreach ($vans as $value)
                                <option value="" disabled selected hidden>--> Select your feet size <--</option>
                                <option class="optioncolor" id="ident" value="{{ $value->cm }}">{{ $value->cm }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <ul class=" space-y-4 text-left text-gray-500 dark:text-gray-400">
                        <li class="flex justify-between items-center space-x-3">
                            <span>EU size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size1"></span>
                        </li>
                        <li class="flex justify-between items-center space-x-3">
                            <span>UK size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size2"></span>
                        </li>
                        <li class="flex justify-between items-center space-x-3">
                            <span>US-M size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size3"></span>
                        </li>
                        <li class="flex justify-between items-center space-x-3">
                            <span>US-W size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size4"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </a>

        <a
            class=" dark:hover:bg-[#3f3f3f] dark:bg-[#4a4a4c] w-full max-w-screen-md lg:max-w-screen-lg        my-3 flex flex-col align-center bg-white rounded-lg shadow-lg dark:shadow-xl md:flex-row md:max-w-full hover:bg-gray-100">

            <div class="flex align-center">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-[20rem] md:rounded-none md:rounded-l-lg"
                    src="{{ asset('/image/nike.png') }}" alt="">
            </div>

            <div class="w-full">
                <div class=" flex flex-col justify-between p-4 leading-normal">
                    <div class="selekts">
                        <select id="ident2"
                            class="mb-5 border-transparent focus:border-transparent focus:ring-0 dark:bg-[#323232] bg-zinc-200 border border-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-transparent">
                            @foreach ($nike as $value)
                                <option value="" disabled selected hidden>--> Select your feet size <--</option>
                                <option class="optioncolor" id="ident2" value="{{ $value->cm }}">{{ $value->cm }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <ul class=" space-y-4 text-left text-gray-500 dark:text-gray-400">
                        <li class="flex justify-between items-center space-x-3">
                            <span>EU size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size5"></span>
                        </li>
                        <li class="flex justify-between items-center space-x-3">
                            <span>UK size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size6"></span>
                        </li>
                        <li class="flex justify-between items-center space-x-3">
                            <span>US-M size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size7"></span>
                        </li>
                        <li class="flex justify-between items-center space-x-3">
                            <span>US-W size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size8"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </a>

        <a
            class=" w-full max-w-screen-md lg:max-w-screen-lg        my-3 flex flex-col align-center bg-white rounded-lg shadow-lg dark:shadow-xl md:flex-row md:max-w-full hover:bg-gray-100 dark:hover:bg-[#3f3f3f] dark:bg-[#4a4a4c]">

            <div class="flex align-center">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-[20rem] md:rounded-none md:rounded-l-lg"
                    src="{{ asset('/image/adidas.png') }}" alt="">
            </div>

            <div class="w-full">
                <div class=" flex flex-col justify-between p-4 leading-normal">
                    <div class="selekts">
                        <select id="ident3"
                            class="mb-5 border-transparent focus:border-transparent focus:ring-0 dark:bg-[#323232] bg-zinc-200 border border-none text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-transparent">
                            @foreach ($adidas as $value)
                                <option value="" disabled selected hidden>--> Select your feet size <--</option>
                                <option class="optioncolor" id="ident3" value="{{ $value->cm }}">
                                    {{ $value->cm }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <ul class=" space-y-4 text-left text-gray-500 dark:text-gray-400">
                        <li class="flex justify-between items-center space-x-3">
                            <span>EU size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size9"></span>
                        </li>
                        <li class="flex justify-between items-center space-x-3">
                            <span>UK size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size10"></span>
                        </li>
                        <li class="flex justify-between items-center space-x-3">
                            <span>US-M size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size11"></span>
                        </li>
                        <li class="flex justify-between items-center space-x-3">
                            <span>US-W size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size12"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </a>

        <a
            class=" w-full max-w-screen-md lg:max-w-screen-lg        my-3 flex flex-col align-center bg-white rounded-lg shadow-lg dark:shadow-xl md:flex-row md:max-w-full hover:bg-gray-100 dark:hover:bg-[#3f3f3f] dark:bg-[#4a4a4c]">

            <div class="flex align-center">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-[20rem] md:rounded-none md:rounded-l-lg"
                    src="{{ asset('/image/newbalance.png') }}" alt="">
            </div>

            <div class="w-full">
                <div class=" flex flex-col justify-between p-4 leading-normal">
                    <div class="selekts">
                        <select id="ident4"
                            class="mb-5 border-transparent focus:border-transparent focus:ring-0 dark:bg-[#323232] bg-zinc-200 border border-none text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-transparent block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-transparent">
                            @foreach ($newbalance as $value)
                                <option value="" disabled selected hidden>--> Select your feet size <--</option>
                                <option class="optioncolor" id="ident4" value="{{ $value->cm }}">
                                    {{ $value->cm }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <ul class=" space-y-4 text-left text-gray-500 dark:text-gray-400">
                        <li class="flex justify-between items-center space-x-3">
                            <span>EU size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size13"></span>
                        </li>
                        <li class="flex justify-between items-center space-x-3">
                            <span>UK size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size14"></span>
                        </li>
                        <li class="flex justify-between items-center space-x-3">
                            <span>US-M size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size15"></span>
                        </li>
                        <li class="flex justify-between items-center space-x-3">
                            <span>US-W size</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            <span id="size16"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </a>


    </div>









    <script src="{{ asset('js/ajax.js') }}"></script>
@endsection
