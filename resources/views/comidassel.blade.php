@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Carta</div>

                    <div class="panel-body">
                        <?php
                        $comidaSel=$_POST['comida'];
                         ?>

                        @foreach($comidaSel as $comida)
                              @if($comida =="pintxos")
                                <h2>Pintxos</h2>
                                <div>
                                    <input type="checkbox" value="bola" name=""/>
                                    <label>Bola de carne</label><br>
                                </div>
                              @elseif($comida =="aperitivos")
                                <h2>Aperitivos</h2>
                                <div>
                                    <input type="checkbox" value="alioli" name=""/>
                                    <label>Patatas ali-oli</label><br>
                                </div>
                              @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection