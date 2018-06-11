<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelationsModel extends Model
{
    protected $table = 'relations';
    public $timestamps = false;

    public function door()
    {
        return $this->belongsTo(DoorsModel::class, 'door-id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user-id');
    }

    public function role()
    {
        return $this->belongsTo(RolesModel::class, 'role-id');
    }

}
