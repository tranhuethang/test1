<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use App\Models\Model as AppModel;

class Timesheets extends AppModel implements
    AuthenticatableContract,
    AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $primaryKey = 'id';

    protected $table = 'timesheets';

    protected $fillable = ['id', 'staff_id', 'date', 'work', 'problem', 'plan', 'approve'];

    public function staff()
    {
        return $this->belongsTo('App\Models\Staffs');
    }
}
