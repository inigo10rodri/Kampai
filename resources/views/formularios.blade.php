@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Carta</div>

                    <div class="panel-body">
                        @if($_POST['accion'] == "comer")
                            <form class="comida" method="post" action="comidassel">
                                {{ csrf_field()}}
                                <h2>Comida</h2>
                                <div>
                                    <input type="checkbox" value="pintxos" name="comida[]"/>
                                    <label>Pintxos</label><br>
                                </div>
                                <div>
                                    <input type="checkbox" value="aperitivos" name="comida[]"/>
                                    <label>Aperitivos</label><br>
                                </div>
                                <div >
                                    <input type="checkbox" value="bocatas" name="comida[]"/>
                                    <label>Bocatas</label><br>
                                </div>
                                <div>
                                    <input type="checkbox" value="raciones" name="comida[]"/>
                                    <label>Raciones</label><br>
                                </div>
                                <div>
                                    <input type="checkbox" value="menus" name="comida[]" />
                                    <label>Menus</label><br>
                                </div>
                                <div>
                                    <input type="checkbox" value="pizzas" name="comida[]" />
                                    <label>Pizzas</label><br>
                                </div>
                                <div id="boton">
                                    <input type="submit" class="btn btn-default" value="Siguiente" />
                                </div>
                            </form>
                        @elseif ($_POST['accion'] == "beber")
                            <form class="bebida" method="post" action="bebidassel">
                                {{ csrf_field()}}
                                <h2>Bebidas</h2>
                                <div>
                                    <input type="radio" value="alcoholicas" name="bebidas" />
                                    <label>Alcoholicas</label><br>
                                </div>
                                <div>
                                    <input type="radio" value="noAlcoholicas" name="bebidas" />
                                    <label>No alcoholicas</label><br>
                                </div>
                                <div id="boton">
                                    <input type="submit" class="btn btn-default" value="Siguiente" />
                                </div>
                            </form>
                        @elseif ($_POST['accion'] == "bebcom")
                            <form class="bebcom" method="post" action="bebcomsel">
                                {{ csrf_field()}}
                                <h2>Comida</h2>
                                <div>
                                    <input type="checkbox" value="pintxos" name="comida[]" />
                                    <label>Pintxos</label><br>
                                </div>
                                <div>
                                    <input type="checkbox" value="aperitivos" name="comida[]" />
                                    <label>Aperitivos</label><br>
                                </div>
                                <div >
                                    <input type="checkbox" value="bocatas" name="comida[]" />
                                    <label>Bocatas</label><br>
                                </div>
                                <div>
                                    <input type="checkbox" value="raciones" name="comida[]" />
                                    <label>Raciones</label><br>
                                </div>
                                <div>
                                    <input type="checkbox" value="menus" name="comida[]" />
                                    <label>Menus</label><br>
                                </div>
                                <div>
                                    <input type="checkbox" value="pizzas" name="comida[]" />
                                    <label>Pizzas</label><br>
                                </div>
                                <h2>Bebidas</h2>
                                <div>
                                    <input type="radio" value="alcoholicas" name="bebidas"/>
                                    <label>Alcoholicas</label><br>
                                </div>
                                <div>
                                    <input type="radio" value="noAlcoholicas" name="bebidas" />
                                    <label>No alcoholicas</label><br>
                                </div>
                                <div id="boton">
                                    <input type="submit" class="btn btn-default" value="Siguiente" />
                                </div>
                            </form>

                        @endif



                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection