<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoorsModel extends Model
{
    protected $table = 'doors';
    public $timestamps = false;

    public function relation()
    {
        return $this->hasMany(RelationsModel::class, 'door_id');
    }
}
