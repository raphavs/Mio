<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolesModel extends Model
{
    protected $table = 'roles';
    public $timestamps = false;

    public function relation()
    {
        return $this->hasMany(RelationsModel::class, 'role-id');
    }

}
