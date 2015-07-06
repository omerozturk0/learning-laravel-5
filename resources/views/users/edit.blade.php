@extends('layout.master')
@section('content')

    <h1>Edit: {!! $user->name !!}</h1>

    <hr/>

    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user->id]]) !!}
        @include('users.form', ['submitButtonText' => 'Update User'])
    {!! Form::close() !!}

@endsection