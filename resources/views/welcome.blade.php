@extends('layout.master')
@section('content')
    <div class="container">
        <div class="content">
            <h1 class="title">Laravel 5</h1>
            <blockquote>{{ Inspiring::quote() }}</blockquote>
        </div>
    </div>
@endsection