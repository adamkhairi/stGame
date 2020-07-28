<nav id="nav" class="flex justify-between fixed z-20  items-center text-white w-full p-4 px-20 ">

    <div class="flex w-3/12 justify-start">
        <a href="#" class="flex-shrink-0">
            <img src="/img/favicon.png" alt="LOGO">
        </a>
    </div>

    <div class="flex  justify-center hidden lg:flex w-6/12">
        <div class="mx-3 hover:bg-gray-200 hover:text-gray-900 hover:shadow-lg hover:font-bold px-6 py-1 rounded">
            <a href="#">Acceuil</a>
        </div>
        <div class="mx-3 hover:bg-gray-200 hover:text-gray-900 hover:shadow-lg hover:font-bold px-6 py-1 rounded">

            <a href="#">Activités</a>
        </div>
        <div class="mx-3 hover:bg-gray-200 hover:text-gray-900 hover:shadow-lg hover:font-bold px-6 py-1 rounded">
            <a href="#">Articles</a>
        </div>
        <div class="mx-3 hover:bg-gray-200 hover:text-gray-900 hover:shadow-lg hover:font-bold px-6 py-1 rounded">
            <a href="">Contact</a>
        </div>
    </div>
    <div class="">
        <div id="menu-toggle" class="block lg:hidden shadow">
            <i class="fas fa-bars text-4xl hover:text-gray-600"></i>
        </div>
        <div id="menu" class="hidden absolute rounded-lg bg-gray-300 shadow w-64 m-2 right-0">
            <ul class="list-reset text-black">
                <li class="text-right">
                    <button id="closeMenu">
                        <i class="fas fa-times text-2xl m-2"></i>
                    </button>
                </li>

                <li>
                    <a href="#"
                       class="block p-4 font-bold border-b-2 border-white  hover:border-red-700 hover:bg-red-200 ">Accueil</a>
                </li>
                <li>
                    <a href="#"
                       class="block p-4 font-bold border-b-2 border-white  hover:border-red-700 hover:bg-red-200 ">Activités</a>
                </li>
                <li>
                    <a href="#"
                       class="block p-4 font-bold border-b-2 border-white  hover:border-red-700 hover:bg-red-200 ">Articles</a>
                </li>

                <li>
                    <a href="#"
                       class="block p-4 font-bold border-b-2 border-white  hover:border-red-700 hover:bg-red-200 ">Contact</a>
                </li>

                <li>
                    <a href=""
                       class="block text-center text-white px-5 py-1 m-2 rounded-full btn-gardiant">Connexion</a>

                </li>
            </ul>
        </div>
    </div>
    @if(Route::has('login'))
        @auth
            <a href="{{ url('/home') }}"
               class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}
            </a>
        @else

            <div class="flex items-center justify-between  hidden lg:flex w-3/12">
                <a href="{{ route('login') }}" type="button" id="loginBtnNav"
                   class=" m-1 px-4 py-1 rounded btn-gardiant ">
                    Connexion
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" id="registerBtn" class="m-1 whitespace-no-wrap btn-gardiant px-4 py-1 rounded">
                        Inscrivez-vous
                    </a>

                @endif

            </div>
        @endauth
    @endif

    {{--        @if(Route::has('login'))--}}
    {{--            <div class="absolute top-0 right-0 mt-4 mr-4">--}}
    {{--                @auth--}}
    {{--                    <a href="{{ url('/home') }}"--}}
    {{--                       class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>--}}
    {{--                @else--}}
    {{--                    <a href="{{ route('login') }}"--}}
    {{--                       class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">{{ __('Login') }}</a>--}}
    {{--                    @if (Route::has('register'))--}}
    {{--                        <a href="{{ route('register') }}"--}}
    {{--                           class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>--}}
    {{--                    @endif--}}
    {{--                @endauth--}}
    {{--            </div>--}}
    {{--        @endif--}}
</nav>
