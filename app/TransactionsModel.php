<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* php artisan make:model <name_of_model> */
class TransactionsModel extends Model
{
    protected $table = 'transactions';
    public $timestamps = false;
}
