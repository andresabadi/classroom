@extends('layouts.main')

@section('content')
<style>
  .center-content {
    display: flex;
    /* flex-direction: column; */
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin-top: 50px; 
  }

  .center-content h1,
  .center-content img,
  .center-content h3 {
    margin: 2px 0;
    color: blue;
  }

</style>

<div class="center-content">
  <!-- <h1>uuuuuuupppppsss...</h1> -->
  <img src="{{asset('media/404.svg')}}" alt="404 Image" />
  <!-- <h3>no hemos encontrado la página</h3> -->
</div>
@endsection
