@extends('layouts.main')

@section('content')

    <div class='loginContainer'>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h1>Registro</h1>
            <div>
                <p>Email</p>
                <input type="text" class='input' name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div>
                <p>Password</p>
                <input type="password" class='input' name="password" required>
            </div>
            <br>
            <div>
                <p>Confirmar Password</p>
                <input type="password" class='input' name="password_confirmation" required>
            </div>
            <br>
            <button type="submit" class="botonAzul">REGISTRO</button>
        </form>
        <img src="{{asset ('media/illust-login.avif')}}" alt='login'>
    </div>
@endsection
