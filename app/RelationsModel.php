<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelationsModel extends Model
{
    protected $table = 'relations';
    // public $timestamps = false;

    public function door()
    {
        return $this->belongsTo(DoorsModel::class, 'door_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(RolesModel::class, 'role_id');
    }

}