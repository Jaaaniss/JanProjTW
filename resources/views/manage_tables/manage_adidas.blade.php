@extends('layouts.app')
@section('content')


@role('Admin')

<div class="py-[200px] flex justify-center">
    <div class="w-full max-w-screen-md lg:max-w-screen-lg   relative overflow-x-auto shadow-md">
        <div class="flex items-center justify-between">
            <div class='mx-2 my-3 '>
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">Adidas<svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg></button>
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="{{ url('manage_tables/manage_vans') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Vans</a>
                        </li>
                        <li>
                            <a href="{{ url('manage_tables/manage_nike') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Nike</a>
                        </li>
                        <li>
                            <a href="{{ url('manage_tables/manage_nb') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">New
                                Balance</a>
                        </li>
                        <li>
                            <a href="{{ url('manage_tables/manage_user') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Users</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button
                class="mx-2 my-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Add size</button>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 rounded-lg ">
            <thead class="rounded-lg text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">CM</th>
                    <th scope="col" class="px-6 py-3">EU</th>
                    <th scope="col" class="px-6 py-3">UK</th>
                    <th scope="col" class="px-6 py-3">US M</th>
                    <th scope="col" class="px-6 py-3">US W</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($adidas as $item3)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item3->cm }}</td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item3->eu }}</td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item3->uk }}</td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item3->usm }}</td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item3->usw }}</td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white  flex flex-col">
                        <div class="stails">
                            <a href="{{ url('manage_tables/edit/edit/' . $item3->id . '/adidas') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <form action="{{ url('delete/' . $item3->id . '/adidas') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="#" type=submit class="font-medium text-blue-600 dark:text-red-500 hover:underline">Remove</a>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endrole
@endsection