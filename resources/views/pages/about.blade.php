@extends('layout.master')
@section('content')
    <div class="content">
        <h1 class="title">About Me: {{ $first }} {{ $last }}</h1>
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias animi, at corporis cum eius eligendi
                eum, expedita explicabo fuga fugiat hic impedit in iusto magnam nemo nobis optio quae quam, quisquam rem
                sint suscipit temporibus ut velit vero voluptas. Ab aut consectetur dolor excepturi laudantium, nostrum
                nulla officia. Corporis, magni, optio! Accusamus accusantium, ad animi delectus doloribus exercitationem
                facilis id in, ipsum maiores natus officia possimus quae ratione voluptatem.</p>
            <footer>
                {{ Inspiring::quote() }}
            </footer>
        </blockquote>
    </div>
@endsection