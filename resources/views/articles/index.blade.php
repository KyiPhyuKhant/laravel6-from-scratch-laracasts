@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">

        @forelse ($articles as $article)
        <div id="content">
            <div class="title">
                <h4>
                    <a href="{{ $article->path() }}">
                        {{ $article->title}}
                    </a>
                </h4>
            </div>
            <p>
                <img src="/images/banner.jpg" alt="" class="image image-full" />
            </p>

            {!! $article->body !!}

            <!-- <p>
                @foreach ($article->tags as $tag)
                <a href="#">{{ $tag->name }}</a>
                @endforeach
            </p> -->
        </div>
        @empty
        <p>No revelant articles yet.</p>
        @endforelse

    </div>
</div>
@endsection