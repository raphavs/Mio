<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoorsModel extends Model
{
    protected $table = 'doors';
    // public $timestamps = false;

    public function relations()
    {
        return $this->hasMany(RelationsModel::class, 'door_id');
    }

    public function transactions()
    {
        return $this->hasMany(TransactionsModel::class, 'door_id');
    }

}