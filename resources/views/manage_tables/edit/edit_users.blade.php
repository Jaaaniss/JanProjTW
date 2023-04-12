@extends('layouts.app')
@section('content')


    @role('Admin')
    <div class="py-[367.5px] flex justify-center">


        <div class=" bg-white dark:bg-[#454547] shadow-xl rounded-3xl w-full max-w-screen-md lg:max-w-screen-lg ">

            <div class="px-6 py-5 text-xl border-b-[1px] border-zinc-200 dark:border-zinc-500 dark:text-white">
                <h4>Edit & Update Users</h4>
            </div>

            <form class="px-6 py-6 " action="{{ url('update/' . $userr->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="flex flex-col gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="name" value="{{ $userr->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-100 block w-full p-2.5 dark:bg-[#323232] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foot size (cm)</label>
                        <input type="number" name="foot_size_cm" value="{{ $userr->foot_size_cm }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-[#323232] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            >
                    </div>
                </div>
                <div class="flex flex-row justify-between">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                    <a href="{{ url('manage_tables/manage_users') }}"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Back</a>
                </div>
            </form>


        </div>
    </div>
    @endrole


@endsection
