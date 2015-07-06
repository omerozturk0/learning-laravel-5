@extends('layout.master')
@section('content')

    <h1>Write New Article</h1>

    <hr/>

    {!! Form::open(['route' => 'articles.store']) !!}
        @include('articles.form', ['submitButtonText' => 'Add New Article', 'defaultDate' => date('Y-m-d')])
    {!! Form::close() !!}

@endsection