@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>
            <p>
                <img src="/images/banner.jpg" alt="" class="image image-full" />
            </p>
            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input type="text" class="input" name="title" id="title" value="{{ $article->title }}">
                    </div>
                </div>

                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <div class="control">
                        <textarea name="excerpt" id="excerpt" class="textarea">{{ $article->excerpt }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label for="body" class="label">Body</label>
                    <div class="control">
                        <textarea name="body" id="body" class="textarea">{{ $article->body }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection