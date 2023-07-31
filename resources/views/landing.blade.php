@extends('layouts.main')

@section('content')
    <div class="landingContainer">
        <img src="{{ asset('media/backgroundIMG.png') }}" alt='background' />
        <div class="sidebar">
            <h1>Welcome</h1>
            <p>Disfruta de nuestros cursos con los mejores profesionales del sector</p>
            <x-signinbutton />
            <button class="botonBlanco">GOOGLE AUTH</button>
        </div>
    </div>
@endsection