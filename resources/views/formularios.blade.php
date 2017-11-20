@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Comida</div>

                    <div class="panel-body">
                        @if($_POST['accion'] == "comer")
                            comer {{$_POST['accion']}}
                            @else
                            <p>beber</p>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection