@extends('layout.master')
@section('content')

    <h1>Register User</h1>

    <hr/>

    {!! Form::open(['route' => 'users.store']) !!}
        @include('users.form', ['submitButtonText' => 'Register User'])
    {!! Form::close() !!}

@endsection