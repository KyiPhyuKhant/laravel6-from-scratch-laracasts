@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h4>{{ $article->title}}</h4>
            </div>
            <p>
                <img src="/images/banner.jpg" alt="" class="image image-full" />
            </p>
            {!! $article->body !!}
            <p style="margin-top:1em;">
                @foreach ($article->tags as $tag)
                <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
                @endforeach
            </p>
        </div>
    </div>
</div>
@endsection