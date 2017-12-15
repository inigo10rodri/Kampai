<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarUser;

class UsuBarController extends Controller
{
    public function anadirUsuBar()
    {

        $this->validate(request(), ['nombre' => "required|string||max:20"]);
        $this->validate(request(), ['correo' => "bail|required|string|unique:bar_users|max:30"]);
        $this->validate(request(), ['contrasena' => "bail|required|string||min:8"]);

        $nombreUsuBar = request()->get('nombre');
        $correoUsuBar = request()->get('correo');
        $contrasenaUsuBar = request()->get('contrasena');

        $barUser = new BarUser();

        $barUser->nombre = $nombreUsuBar;
        $barUser->correo = $correoUsuBar;
        $barUser->contrasena = $contrasenaUsuBar;

        $barUser->save();

        return (view('/bar.home'));
    }
}
