<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use App\Models\Model as AppModel;

class Statistics extends AppModel implements
    AuthenticatableContract,
    AuthorizableContract
{
    use Authenticatable, Authorizable;

    protected $primaryKey = 'id';

    protected $table = 'statistics';

    protected $fillable = ['id', 'staff_id', 'total_count', 'approve_count', 'late_count', 'month'];

    public function staff()
    {
        return $this->hasOne('App\Models\Staffs');
    }
}
