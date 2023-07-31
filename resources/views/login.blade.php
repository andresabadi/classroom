@extends('layouts.main')
@section('content')

<div class='loginContainer'>
          <form action="/login" method="POST">
          @csrf
          <h1>Log In</h1>
            <div> 
              <label for="email"><p>Email</p> 
                <input type="email" name="email" id="email">
              </label>
            </div>
            <div> 
              <label for="password"><p>Password</p> 
                <input type="password" name="password" id="password">
              </label>
            </div>
            <br /> 
              {{-- <input type="submit" value="Login"> --}}
              <x-loginbutton />
          </form>
      <img src="{{asset ('media/illust-login.png')}}" alt='login' />
    </div>

@endsection