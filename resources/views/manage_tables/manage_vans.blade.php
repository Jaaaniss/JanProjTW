@extends('layouts.app')
@section('content')


    @role('Admin')
    <div class="h-full py-[200px] flex justify-center">
        <div class=" w-full max-w-screen-md lg:max-w-screen-lg relative overflow-x-auto">
            <div class="bg-white dark:bg-[#454547] border-b-[1px] border-zinc-200 dark:border-zinc-500 rounded-t-3xl flex items-center justify-between">
                <div class='py-3'>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="mx-5 py-3 dark:text-white text-black bg-transparent focus:outline-none text-2xl font-medium rounded-lg px-4 py-2.5 text-center inline-flex items-center"
                        type="button">Vans<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg></button>
                    <div id="dropdown"
                        class="z-10 hidden bg-zinc-200 divide-y divide-zinc-100 rounded-lg shadow w-44 dark:bg-zinc-800">
                        <ul class="py-2 text-sm text-zinc-700 dark:text-zinc-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{ url('manage_tables/manage_adidas') }}"
                                    class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white">Adidas</a>
                            </li>
                            <li>
                                <a href="{{ url('manage_tables/manage_nike') }}"
                                    class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white">Nike</a>
                            </li>
                            <li>
                                <a href="{{ url('manage_tables/manage_nb') }}"
                                    class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white">New
                                    Balance</a>
                            </li>
                            <li>
                                <a href="{{ url('manage_tables/manage_users') }}"
                                    class="block px-4 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-600 dark:hover:text-white">Users</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="{{ url('/manage_tables/add/add') }}"
                    class="w-[150px] flex justify-center mx-5 py-3 text-white dark:text-black bg-gray-800 dark:bg-white dark:hover:bg-zinc-200 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                    type="button">Add size</a>
            </div>

            <div class="shadow-md relative overflow-x-auto shadow-md rounded-b-3xl">
                <table class="dark:bg-[#454547] bg-[#ffffff] w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="shadow-xl shadow-[#0000000a] dark:shadow-[#00000017] text-xs text-gray-700 uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-9 py-3">CM</th>
                            <th scope="col" class="px-9 py-3">EU</th>
                            <th scope="col" class="px-9 py-3">UK</th>
                            <th scope="col" class="px-9 py-3">US M</th>
                            <th scope="col" class="px-9 py-3">US W</th>
                            <th scope="col" class="px-9 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vans as $item)
                            <tr
                                class=" border-b dark:border-zinc-700 hover:bg-zinc-50 dark:hover:bg-[#585858]">
                                <td class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->cm }}</td>
                                <td class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->eu }}</td>
                                <td class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->uk }}</td>
                                <td class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->usm }}</td>
                                <td class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->usw }}</td>
                                <td
                                    class="px-9 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white  flex flex-col">
                                    <div class="stails">
                                        <a href="{{ url('manage_tables/edit/edit/' . $item->id . '/vans') }}"
                                            class="font-bold text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ url('delete/' . $item->id . '/vans') }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-bold dark:text-red-500 text-red-500 hover:underline">Remove</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endrole


@endsection
