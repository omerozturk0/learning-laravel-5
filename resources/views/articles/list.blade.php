@extends('layout.master')
@section('content')

    <div class="content list-group">

        @foreach($articles as $article)
            <article class="list-group-item">
                <h3>
                    <a href="{{ url('articles', $article->id) }}">{{ $article->title }}</a>
                </h3>

                <div class="body">{{ $article->body }}</div>

                <span class="label label-info">{{ $article->user->name }}</span>

                <div class="buttons pull-right">
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['articles.destroy', $article->id], 'style' => 'display: inline-block;']) !!}
                        <!-- Delete Submit Button -->
                        <div class="form-group">
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>

                <div class="clearfix"></div>
            </article>
        @endforeach

        <div class="articles-paginate">
            {!! str_replace('/?', '?', $articles->render()) !!}
        </div>

    </div>

@endsection