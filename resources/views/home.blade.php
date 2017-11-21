@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">¿Que te apetece?</div>

                <div class="panel-body">
                    <form class="inicio" method="post" action="formularios">
                        {{ csrf_field()}}
                        <div id="comer">
                            <input type="radio" value="comer" name="accion"/>
                            <label>Comer</label><br>
                        </div>
                        <div id="beber">
                            <input type="radio" value="beber" name="accion"/>
                            <label>Beber</label><br>
                        </div>
                        <div id="bebcom">
                            <input type="radio" value="bebcom" name="accion"/>
                            <label>Comer y beber</label><br>
                        </div>
                        <div id="boton">
                            <input type="submit" class="btn btn-default" value="Siguiente" />
                        </div>

                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
