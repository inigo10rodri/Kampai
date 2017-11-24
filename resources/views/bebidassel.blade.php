@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Carta</div>

                    <div class="panel-body">

                            @if($_POST['bebidas'] == "alcoholicas")
                                <h2>Alcoholicas</h2>
                                <div>
                                    <input type="checkbox" value="cerveza" name=""/>
                                    <label>Cerveza</label><br>
                                </div>
                            @elseif($_POST['bebidas'] == "noAlcoholicas")
                                <h2>No alcoholicas</h2>
                                <div>
                                    <input type="checkbox" value="cafe" name=""/>
                                    <label>Cafe</label><br>
                                </div>

                            @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection