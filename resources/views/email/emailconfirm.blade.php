@extends('layouts.app')

@section('content')
    <div>
      <h2>Email verificado</h2>
      <p>Tu email fue verificado, click aquí para <a href="{{url('/login')}}"> iniciar sesión </a></p>
    </div>
@endsection