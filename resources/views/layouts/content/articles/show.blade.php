@extends('layouts.app')

@section('content')
    <section class=" h-screen flex flex-col justify-center items-center">

        {{--        SINGLE ARTICLE SHOW     --}}

        <div class="">

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="text-2xl text-center font-extrabold">
                        <h2> Show Article</h2>
                    </div>
                    <div class="text-right">
                        <a class="btn-gardiant px-4 py-1 rounded" href="{{ route('articles.index') }}"> Back</a>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        {{ $article->title }}
                    </div>
                </div>
                <div class="">
                    <div class="form-group mx-auto">
                        <img src="{{ $article->img }}" alt="">
                    </div>
                    <div class=" pt-6">
                        <p class="pr-6 text-center"><span><i
                                    class="fas fa-heart pr-1"></i></span>{{ $article->votes }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Details:</strong>
                        {{ $article->body }}
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
