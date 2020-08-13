@extends('layouts.app')


@section('content')

    <div id="header" class="w-full  h-64">
        <h1 class=" text-center font-title text-5xl pt-24">Articles</h1>
    </div>


    <section class="w-full mt-16 w-40">

        <div class="flex justify-center flex-wrap">
            <div class="flex flex-col md:w-2/2 w-100 px-6 h-full overflow-hidden  ">
                <div class="pb-4 col-span-8 ">
                    <div class="max-w-xl rounded overflow-hidden shadow-lg bg-white">
                        <img class="w-full" src="/img/article1.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">

                            <div class="relative">
                                <h1 class="font-title text-2xl mb-2 text-black">uncomming fighter</h1>
                                <p class="pr-6 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptates, velit
                                    ipsa accusamus sunt alias sit blanditiis possimus totam fuga similique cum maxime
                                    esse
                                    eos quos quasi. Impedit minima quas voluptas.</p>
                                <a class="float-right btn-gardiant rounded px-4 py-1 m-2 relative bottom-0 right-0"
                                   href="#">voir plus...</a></div>
                        </div>
                    </div>

                    <div class="py-4"><span class="bg-yellow-200"> </span></div>
                    <div class="max-w-xl rounded overflow-hidden shadow-lg bg-white ">
                        <img class="w-full " src="/img/article1.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="relative">
                                <h1 class="font-title text-2xl mb-2 text-black">uncomming fighter</h1>
                                <p class="pr-6 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptates, velit
                                    ipsa accusamus sunt alias sit blanditiis possimus totam fuga similique cum maxime
                                    esse
                                    eos quos quasi. Impedit minima quas voluptas.</p>
                                <a class="float-right btn-gardiant rounded px-4 py-1 m-2 relative bottom-0 right-0"
                                   href="#">voir plus...</a></div>
                        </div>
                    </div>
                    <div class="py-4"><span class="bg-yellow-200"> </span></div>
                    <div class="max-w-xl rounded overflow-hidden shadow-lg bg-white">
                        <img class="w-full" src="/img/article1.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="relative">
                                <h1 class="font-title text-2xl mb-2 text-black">uncomming fighter</h1>
                                <p class="pr-6 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptates, velit
                                    ipsa accusamus sunt alias sit blanditiis possimus totam fuga similique cum maxime
                                    esse
                                    eos quos quasi. Impedit minima quas voluptas.</p>
                                <a class="float-right btn-gardiant rounded px-4 py-1 m-2 relative bottom-0 right-0"
                                   href="#">voir plus...</a></div>
                        </div>
                    </div>
                    <div class="py-4"><span class="bg-yellow-200"> </span></div>
                    <div class="max-w-xl rounded overflow-hidden shadow-lg bg-white">
                        <img class="w-full" src="/img/article1.png" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="relative">
                                <h1 class="font-title text-2xl mb-2 text-black">uncomming fighter</h1>
                                <p class="pr-6 text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptates, velit
                                    ipsa accusamus sunt alias sit blanditiis possimus totam fuga similique cum maxime
                                    esse
                                    eos quos quasi. Impedit minima quas voluptas.</p>
                                <a class="float-right btn-gardiant rounded px-4 py-1 m-2 relative bottom-0 right-0"
                                   href="#">voir plus...</a></div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="text-left bg-gray-400 lg:w-1/3 w-5/6">
                <div class="flex flex-col p-6 bg-white">
                    <div class=" w-full relative">
                        <input
                            class="shadow-none appearance-none border rounded-full w-full p-4 mb-2 text-gray-700"
                            id="text" type="text" placeholder="Rechercher">
                        <a href="#" class="absolute rounded-full right-0 top-0 m-2">
                            <img class="" src="/img/recherche.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="bg-white p-3 mt-1">
                    <div class="m-2">
                        <h1 class="text-2xl text-center text-black font-title pb-5">Derniers Articles</h1>
                    </div>

                    <div class="p-10 text-center">
                        <div
                            class="inline-grid max-w-xs sm:max-w-xs lg:max-w-lg lg:flex bg-black rounded-lg border shadow-lg pb-6 lg:pb-0">
                            <div class="w-full lg:w-2/4 lg:p-4">
                                <!-- <img src="img/profile.jpg" alt="profile picture" class="rounded-lg"> -->
                                <img src="/img/article1.png" alt="image"
                                     class="h-64 lg:h-full object-cover object-center w-full">
                            </div>

                            <div class="w-full lg:w-2/3 p-4">
                                <div class="inline-grid">
                                    <p class="font-semibold text-xl text-white text-center">Segoe cute</p>
                                    <p class="text-sm my-4 text-white opacity-75">Lorem ipsum dolor sit amet
                                        consectetur
                                        adipisicing elit. Exercitationem fuga odit repellendus vero iure alias accusamus
                                        ex sed
                                        facilis magni aperiam dicta obcaecati, possimus rerum, consequuntur deserunt aut
                                        dolor
                                        ipsa.</p>
                                    <a class="text-center btn-gardiant rounded px-3 py-1" href="#">voir plus...</a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="inline-grid max-w-xs sm:max-w-xs lg:max-w-lg lg:flex bg-black rounded-lg border shadow-lg pb-6 lg:pb-0">
                            <div class="w-full lg:w-2/4 lg:p-4">
                                <!-- <img src="img/profile.jpg" alt="profile picture" class="rounded-lg"> -->
                                <img src="/img/article1.png" alt="image"
                                     class="h-64 lg:h-full object-cover object-center w-full">
                            </div>

                            <div class="w-full lg:w-2/3 p-4">
                                <div class="inline-grid">
                                    <p class="work-sans font-semibold text-xl text-white text-center">Segoe cute</p>
                                    <p class="raleway text-sm my-4 text-white opacity-75">Lorem ipsum dolor sit amet
                                        consectetur
                                        adipisicing elit. Exercitationem fuga odit repellendus vero iure alias accusamus
                                        ex sed
                                        facilis magni aperiam dicta obcaecati, possimus rerum, consequuntur deserunt aut
                                        dolor
                                        ipsa.</p>
                                    <a class="text-center btn-gardiant rounded px-3 py-1" href="#">voir plus...</a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="inline-grid max-w-xs sm:max-w-xs lg:max-w-lg lg:flex bg-black rounded-lg border shadow-lg pb-6 lg:pb-0">
                            <div class="w-full lg:w-2/4 lg:p-4">
                                <!-- <img src="img/profile.jpg" alt="profile picture" class="rounded-lg"> -->
                                <img src="/img/article1.png" alt="image"
                                     class="h-64 lg:h-full object-cover object-center w-full">
                            </div>

                            <div class="w-full lg:w-2/3 p-4">
                                <div class="inline-grid">
                                    <p class="work-sans font-semibold text-xl text-white text-center">Segoe cute</p>
                                    <p class="raleway text-sm my-4 text-white opacity-75">Lorem ipsum dolor sit amet
                                        consectetur
                                        adipisicing elit. Exercitationem fuga odit repellendus vero iure alias accusamus
                                        ex sed
                                        facilis magni aperiam dicta obcaecati, possimus rerum, consequuntur deserunt aut
                                        dolor
                                        ipsa.</p>
                                    <a class="text-center btn-gardiant rounded px-3 py-1" href="#">voir plus...</a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="inline-grid max-w-xs sm:max-w-xs lg:max-w-lg lg:flex bg-black rounded-lg border shadow-lg pb-6 lg:pb-0">
                            <div class="w-full lg:w-2/4 lg:p-4">
                                <!-- <img src="img/profile.jpg" alt="profile picture" class="rounded-lg"> -->
                                <img src="/img/article1.png" alt="image"
                                     class="h-64 lg:h-full object-cover object-center w-full">
                            </div>

                            <div class="w-full lg:w-2/3 p-4">
                                <div class="inline-grid">
                                    <p class="work-sans font-semibold text-xl text-white text-center">Segoe cute</p>
                                    <p class="raleway text-sm my-4 text-white opacity-75">Lorem ipsum dolor sit amet
                                        consectetur
                                        adipisicing elit. Exercitationem fuga odit repellendus vero iure alias accusamus
                                        ex sed
                                        facilis magni aperiam dicta obcaecati, possimus rerum, consequuntur deserunt aut
                                        dolor
                                        ipsa.</p>
                                    <a class="text-center btn-gardiant rounded px-3 py-1" href="#">voir plus...</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


    </section>


    <!--/////////paginatio/////////-->

    <nav class="flex justify-center p-6">
        <a href="#"
           class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
           aria-label="Previous">
            <svg class="h-5 w-5 hover:text-red-700" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                      clip-rule="evenodd"/>
            </svg>
        </a>
        <a href="#"
           class="hover:text-red-700 -ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            1
        </a>
        <a href="#"
           class="hover:text-red-700 -ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            2
        </a>
        <a href="#"
           class="hover:text-red-700 hidden md:inline-flex -ml-px relative items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            3
        </a>
        <span
            class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-700">
          ...
        </span>
        <a href="#"
           class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
           aria-label="Next">
            <svg class="h-5 w-5 hover:text-red-700" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      clip-rule="evenodd"/>
            </svg>
        </a>
    </nav>

    <div>
        <div class="pt-12">
            <form action="{{route('articles.store')}}" method="post">
                @csrf
                <div class="flex flex-col justify-around items-center p-6 text-black">
{{--                    <div class="">--}}
                        <input type="text" class="form-input" name="title" placeholder="Title...">
                        <input type="file" class="form-input" name="img" placeholder="Image">
                        <textarea type="text" class="form-input" name="body" rows="3"  placeholder="Body..."></textarea>

                        <select name="active" id="" title="Visibility">
                            <option value="0">On</option>
                            <option value="1">Off</option>
                        </select>

                        <input type="number" class="form-input" name="votes" placeholder="Title...">
{{--                    </div>--}}
                    <div class="pt-4">
                        <button class="px-6 py-1 btn-gardiant text-white font-bold hover:underline">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div
            class="inline-grid max-w-xs sm:max-w-xs lg:max-w-lg lg:flex bg-black rounded-lg border shadow-lg pb-6 lg:pb-0">
            <div class="w-full lg:w-2/4 lg:p-4">
                <!-- <img src="img/profile.jpg" alt="profile picture" class="rounded-lg"> -->
                <img src=" " alt="image"
                     class="h-64 lg:h-full object-cover object-center w-full">
            </div>

            <div class="w-full lg:w-2/3 p-4">
                <div class="inline-grid">
                    <p class="work-sans font-semibold text-xl text-white text-center">Title</p>
                    <p class="raleway text-sm my-4 text-white opacity-75">Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing elit. Exercitationem fuga odit repellendus vero iure alias accusamus
                        ex sed
                        facilis magni aperiam dicta obcaecati, possimus rerum, consequuntur deserunt aut
                        dolor
                        ipsa.</p>
                    <a class="text-center btn-gardiant rounded px-3 py-1" href="#">voir plus...</a>
                </div>
            </div>
        </div>

    </div>
@endsection
