@extends('layout.master')
@section('content')

    <div class="content list-group">

        <article class="list-group-item">
            <h3>{{ $user->name }}</h3>
            <hr/>
            <div class="body">{{ $user->email }}</div>
        </article>

    </div>

@endsection