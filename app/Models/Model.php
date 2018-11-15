<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    use SoftDeletes;

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];
}