@extends('layout.master')
@section('content')
    <div class="content">
        <h1 class="title">Contact Me</h1>
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor et fugiat illum ipsam nobis! Adipisci
                aspernatur atque aut consectetur cum ducimus ea esse fugiat, hic id impedit in ipsum labore libero
                maxime molestiae natus nisi nobis non numquam officiis omnis pariatur placeat praesentium quasi
                quibusdam quod, quos sed sunt tempore tenetur ut veritatis voluptas. Aspernatur autem, cupiditate,
                dolore dolorum eius, error ipsa labore molestiae nam porro quaerat ratione reiciendis vitae.</p>
            <footer>
                {{ Inspiring::quote() }}
            </footer>
        </blockquote>
    </div>
@endsection