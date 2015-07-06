@extends('layout.master')
@section('content')

    <div class="content list-group">

        @foreach($users as $user)
            <article class="list-group-item">
                <h3>
                    <a href="{{ url('users', $user->id) }}">{{ $user->name }}</a>
                </h3>

                <div class="body">{{ $user->email }}</div>

                <div class="buttons pull-right">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display: inline-block;']) !!}
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
            {!! str_replace('/?', '?', $users->render()) !!}
        </div>

    </div>

@endsection