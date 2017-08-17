<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Laratrust\LaratrustPermission;

class Permission extends LaratrustPermission implements Transformable
{
    use TransformableTrait;

    protected $fillable = [];

}
