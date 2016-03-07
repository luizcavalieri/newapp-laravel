@extends('master')

@section('content')

    <h1>Articles</h1>

    @foreach($articles as $article)

        <article>
            {{--<a href="articles/{{ $article->id }}"><h2>{{ $article->title }}</h2></a>--}} <!-- This is hard coded -->

            <!-- This option you filter the id through the article controller-->
            <a href="{{ action('ArticlesController@show', [$article->id]) }}"><h2>{{ $article->title }}</h2></a>

            <div class="body">{{ $article->body }}</div>


        </article>

    @endforeach

@stop