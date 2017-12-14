<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barUser extends Model
{
    protected $table=['bar_users'];

    protected $fillable=['nombre','correo','contrasena'];

    protected $hidden=['contrasena'];
}
