<nav id="nav" class="flex justify-between fixed z-20  items-center text-white w-full p-4 px-20 ">
    <div class="flex w-3/12 justify-start">
        <a href="#" class="flex-shrink-0">
            <img src="/img/favicon.png" alt="LOGO">
        </a>
    </div>
    <div class="flex  justify-center hidden lg:flex w-6/12">
        <div class="mx-3 hover:bg-gray-200 hover:text-gray-900 hover:shadow-lg hover:font-bold px-6 py-1 rounded">
            <a href="{{ route('/') }}">Acceuil</a>
        </div>
        <div class="mx-3 hover:bg-gray-200 hover:text-gray-900 hover:shadow-lg hover:font-bold px-6 py-1 rounded">

            <a href="{{ route('activity') }}">Activités</a>
        </div>
        <div class="mx-3 hover:bg-gray-200 hover:text-gray-900 hover:shadow-lg hover:font-bold px-6 py-1 rounded">
            <a href="{{ route('articles') }}">Articles</a>
        </div>
        <div class="mx-3 hover:bg-gray-200 hover:text-gray-900 hover:shadow-lg hover:font-bold px-6 py-1 rounded">
            <a href="{{ route('contact') }}">Contact</a>
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

    {{--                    <div class="flex-1 text-right">--}}
    <div class="flex items-center justify-around  hidden lg:flex w-3/12">

        @guest
            <a href="{{ route('login') }}" id="loginBtnHero" class="btn-gardiant whitespace-no-wrap px-4 py-1 m-2 rounded">Se
                connecter</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" id="registerBtn" class="btn-gardiant whitespace-no-wrap px-4 py-1 m-2 rounded">Inscrivez-vous</a>

            @endif
        @else
            <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

            <a href="" class="m-1 flex-shrink-0"><img src="/img/stream.svg" class="rounded-lg" alt=""></a>

            <a href="{{ route('logout') }}"
               class="no-underline hover:underline text-gray-300 text-sm p-3"
               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>
        @endguest
    </div>


</nav>
