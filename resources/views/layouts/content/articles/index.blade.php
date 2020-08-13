@extends('layouts.app')


@section('content')

    <div id="header" class="w-full  h-64">
        <h1 class=" text-center font-title text-5xl pt-24">Articles</h1>
    </div>


    <section class="w-full mt-16 w-40">

        <div class="flex justify-center flex-wrap">
            <div class="flex flex-col md:w-2/2 w-100 px-6 h-full overflow-hidden  ">

                {{--                ARTICLES LOOP           --}}

                @foreach ($articles as $article)
                    <div class="pb-4 col-span-8 ">


                        <div class="py-4"><span class="bg-yellow-200"> </span></div>


                        <div class="max-w-xl rounded overflow-hidden shadow-lg bg-white">
                            <a href="{{ route('articles.show',$article->id) }}">
                                <img class="w-full" src="{{ $article->img }}" alt="Sunset in the mountains">
                            </a>
                            <div class="px-6 py-4">
                                <div class="relative">
                                    <h1 class="font-title text-2xl mb-2 text-black">{{ $article->title }}</h1>
                                    <p class="pr-6 text-black">{{ $article->body }}</p>
                                    <p class="pr-6 text-black text-right"><span><i
                                                class="fas fa-heart pr-1"></i></span>{{ $article->votes }}</p>
                                    <a class="float-right btn-gardiant rounded px-4 py-1 m-2 relative bottom-0 right-0"
                                       href="{{ route('articles.show',$article->id) }}">voir plus...</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
        <div class="bg-gray-200 font-bold">
            {!! $articles->links() !!}
        </div>
    </section>




@endsection
