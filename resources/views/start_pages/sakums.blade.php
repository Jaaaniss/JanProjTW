@extends('layouts.app')
@section('content')


    <section class="pt-[236px] pb-[236px] text-gray-600 body-font">
        <div class="px-5">
            <div class="text-center mb-[90px]">
                <div class="dark:invert flex justify-center ">
                    <img id="imgg" height="200px" width="200px" src="{{ asset('/image/LOGO.png') }}"
                        style="transform: scaleX(-1);">
                </div>
                <h1 class="dark:text-white sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4 mt-2"> Would you
                    like to know your international shoe size? </h1>
                <p class="dark:text-zinc-300  text-xl leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Do you know
                    how long is your feet in centimeters?</p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-red-500 inline-flex"></div>
                </div>
            </div>
            <div class="dark:text-zinc-300 justify-center flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="break-normal mx-6 bg-[#ffffff1f] rounded-2xl shadow-box-shadow dark:shadow-2xl p-4 md:w-1/4 sm:w-full xs:w-full flex flex-col text-center items-center">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-red-100 dark:bg-[#323232] text-red-500 mb-5 flex-shrink-0">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAACXBIWXMAAAsTAAALEwEAmpwYAAADbklEQVR4nO2YTWhUVxTHb4qVKpUqJepCiq0tuixEZBbqA+f+/+81iWm7yKZWKFi6atGVQkCioEYQF10VUXBRsFgoxWoptSIl0A+1i/qBdFPspov6rcTMnBv1ljO5iRPzxryJ42RG5g8HZh7v3vu7551777nHmBpKyM8F+MlZ2+c7OxebZpCQtxzp1YQsOGCrN6bNNDw08KcAHzny7zCBQw0NrtBC/qa/fU/PPCF/DOCfmmaAVvkoetkBV/S5t/YV0wzQpWfApuDtT0yzQPt8/lUhHzryK9Ms0KXnwB0BBk1TQZPXhDxnGlEt6Hqp5enn1tOFJFk2Esc2qzlrI9/bO3usve/qWqD7sZDf1wXajw7oxjK0rCbAvlJ7Y9o0LQ3Pt6RBO+AfPRWzmlj78QjZ7detW5Tu5TheGtLJ3x25bSoTYFcAvCDk/tBO/1/0udycx/t3jzK+qi0484g6Nh0a+CLTl+nsXPyYx+874KhPkva094vkCgF6qzVHfibAL6VxgG9rAi3AcQHe9lE03zwjeQ09YFDXi2aNTw3tyMOmDhLgBx1vQojMFLTv6lrgyI5KViTf07ALsf3zhMYzBS3kuYy71Nl7SbKkIaBHrM0LsDfVdAsF/grjHJvUuFFj2kfRLAFO6FgF4PWmgFYJMFAay9qcKdeMLcT+/hd0MaZZicnazQLcFeCG7+6e2xDQotWoqU/E2yPAO5MazyD0Jkd+nWLfCXA1MJ1MLfZUgi6Qb2qhpQi8r5+y1tBPkoaDA74J8bw6E7SL4zVCDpd9qmNjM67XQpQ43hhCZEMmaM2LBXigdTkhT4UZr6wHtDemzZGrHHBJGYpxvDwbNHBaK5+aEClcyLTW1gJagA+F/E+Am6lGDpUtxN2pnVTw9AcTVjJwfuymUp7laY4w6YidQkVgvR7NjvxjggHnSyXiUdiHxTh+t2InlRaibjWOPCjAjvIMKyWffqA3DVMD+VxuzvgtyNq+qqErdvwI+oLmCY78t6bgSdIe+j8yJbQjLzvyQAb7sjymi9a+VQLXiy0woLXpaQN3dLwo5J7gxJ2VXxwtgN+u+g4HbB+feJIsC5PWeBwW4IyeeFXaoB7Zoe8rHlj45Bn29Mwr5PNvZLVha1+b1EcUvRTyhV+FvD6NS+yQLkZH9muJeLpfq6WWWmrpOdL/z9GaigVpk2QAAAAASUVORK5CYII=">
                    </div>
                    <div class="flex-grow">
                        <h2 class="dark:text-white text-gray-900 text-xl title-font font-medium mb-3">Select</h2>
                        <p class="leading-relaxed text-lg">If you do know, then click button "next" to select a size</p>
                    </div>
                </div>
                <div class="break-normal mx-6 bg-[#ffffff1f] rounded-2xl shadow-box-shadow dark:shadow-2xl p-4 md:w-1/4 sm:w-full xs:w-full flex flex-col text-center items-center">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full dark:bg-[#323232]  bg-red-100 text-red-500 mb-5 flex-shrink-0">
                        <img
                            src="data:image/png;base64,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">
                    </div>
                    <div class="flex-grow">
                        <h2 class="dark:text-white  text-gray-900 text-xl title-font font-medium mb-3">Measure</h2>
                        <p class="leading-relaxed text-lg">If you do not know, you can easly measure its length (Preferably in
                            cm)</p>
                    </div>
                </div>
                <div class="break-normal mx-6 bg-[#ffffff1f] rounded-2xl shadow-box-shadow dark:shadow-2xl p-4 md:w-1/4 sm:w-full xs:w-full flex flex-col text-center items-center">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full dark:bg-[#323232]  bg-red-100 text-red-500 mb-5 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="45" height="45"
                            viewBox="0,0,256,256" style="fill:#FA4646;">
                            <g fill="#FA4646" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <g transform="scale(8.53333,8.53333)">
                                    <path
                                        d="M15,3c-2.9686,0 -5.69718,1.08344 -7.79297,2.875c-0.28605,0.22772 -0.42503,0.59339 -0.36245,0.95363c0.06258,0.36023 0.31676,0.6576 0.66286,0.77549c0.3461,0.1179 0.72895,0.03753 0.99842,-0.20959c1.74821,-1.49444 4.01074,-2.39453 6.49414,-2.39453c5.19656,0 9.45099,3.93793 9.95117,9h-2.95117l4,6l4,-6h-3.05078c-0.51129,-6.14834 -5.67138,-11 -11.94922,-11zM4,10l-4,6h3.05078c0.51129,6.14834 5.67138,11 11.94922,11c2.9686,0 5.69718,-1.08344 7.79297,-2.875c0.28605,-0.22772 0.42504,-0.59339 0.36245,-0.95363c-0.06258,-0.36023 -0.31676,-0.6576 -0.66286,-0.7755c-0.3461,-0.1179 -0.72895,-0.03753 -0.99842,0.20959c-1.74821,1.49444 -4.01074,2.39453 -6.49414,2.39453c-5.19656,0 -9.45099,-3.93793 -9.95117,-9h2.95117z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="dark:text-white  text-gray-900 text-xl title-font font-medium mb-3">Convert</h2>
                        <p class="leading-relaxed text-lg">In case you can not measure it in cm, there is converter at the
                            bottom</p>
                    </div>
                </div>
            </div>

            <div id="collapse3" style="display:none" class=" flex justify-center mt-20">
                <div class="flex flex-col flex justify-between dark:bg-[#454547] md:w-1/4 sm:w-full xs:w-full bg-white w-1/4 p-5 h-[190px] rounded-3xl">

                    <div class="">
                        <label class='dark:text-zinc-200' for="inputInches">Inches:</label>
                        <input id="inputInches" class="mt-1 bg-zinc-100 text-gray-900 dark:text-zinc-200 text-sm rounded-lg focus:ring-blue-500 border-transparent block w-full p-2.5 dark:bg-[#323232] dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 " type="number"
                            oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                    </div>
                    <div class="">
                        <label class='dark:text-zinc-200' for="inputcm">Cm:</label>
                        <input id="inputcm" class=" mt-1 bg-zinc-100 text-gray-900 dark:text-zinc-200 text-sm rounded-lg focus:ring-blue-500 border-transparent block w-full p-2.5 dark:bg-[#323232] dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 " type="number"
                            oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
                    </div>
                </div>
            </div>


            <div class="mx-auto mt-[90px] flex items-center flex-col">
                <a href="/start_pages/size_converter"
                    class="flex justify-center w-[220px] block bg-[#FA4646] mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Next</a>

                <a id="dark2" href="#collapse3" id="toggle" class="nav-link dark:text-zinc-300 text-zinc-700 text-sm hover:text-blue-500 cursor-pointer">
                    Need a
                    converter?
                    Click on me
                </a>

            </div>
        </div>
    </section>

    <script src="{{ asset('js/converter.js') }}"></script>

@endsection
