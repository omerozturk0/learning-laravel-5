@extends('layout.master')
@section('content')

    <div class="content list-group">

        <article class="list-group-item">
            <h3>{{ $article->title }}</h3>

            <hr/>

            <div class="body">{{ $article->body }}</div>

            @unless($article->tags->isEmpty())
                <h4>Tags:</h4>

                <hr/>

                <ul class="list-inline">
                    @foreach($article->tags as $tag)
                        <li class="list-group-item-info">{!! link_to('tags/'.$tag->id.'/'.$tag->name, $tag->name) !!}</li>
                    @endforeach
                </ul>
            @endunless
        </article>

    </div>

@endsection