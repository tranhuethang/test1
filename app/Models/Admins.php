<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use App\Models\Model as AppModel;

class Admins extends AppModel implements
    AuthenticatableContract,
    AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $primaryKey = 'id';

    protected $table = 'admins';

    protected $fillable = ['id', 'fullname', 'username', 'password', 'email', 'avatar'];

    protected $hidden = 'password';

    public function setPasswordAttribute($value)
    {
        if (is_string($value) && $value) {
            $this->attributes['password'] = \Hash::make($value);
        }
    }
}
