@extends('layouts.app')
@section('content')


<div
            class="py-[250px] dark:bg-[#454547] bg-white dark:shadow-xl shadow-lg my-5 w-full max-w-screen-md lg:max-w-screen-lg relative overflow-x-auto rounded-3xl">

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










        <div style="display: flex;align-items: center;justify-content: center;height: 100%;" class="py-[250px] container">

            <div class="lielaiscontainer">

                <div class="row">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a id="a" href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Enter size</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-8">
                        <div id="cardpicture" class="card mb-4">
                            <div style="display: flex;flex-direction: column;justify-content: center;" class="card-body text-center">
                                <h3>
                                    <center>
                                        Te var ierakstit izmeru tikai lai to saglabatu, bet var arii meklet internetaa kurpes pec taa izmera
                                    </center>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div id="cardinfo" class="card mb-4">
                            <div style="padding-top: 38px; padding-bottom: 38px;;"class="card-body">
                                <div style="justify-content:center" class="row">
                                    <form class="formss" action="/enter_size" method="post">
                                        @csrf
                                        <input id="sizeinput" max="1000" type="number" name="foot_size_cm" class="form-control"
                                            placeholder="Enter a number" aria-label="Cm" aria-describedby="button-addon2">
                                        <div style="display: flex;flex-direction: column;padding-bottom: 20p;" class="butooni">
                                            <div style="padding-bottom: 10px; padding-top: 10px;" class="viensbuttons">
                                                <button style="width: 100%!important;" class="btn btnneed btn-dark" type="submit" id="submitbutton">Save</button>
                                            </div>
                                            <a id="nulll" style="width: 100%!important;" href="/start_pages/size_converter" class="btn btnneed btn-dark" role="button"><span>Next</span></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection
