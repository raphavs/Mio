<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function relations()
    {
        return $this->hasMany(RelationsModel::class, 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(RolesModel::class, 'role_id');
    }

    public function hasRole($role)
    {
        return $this->role->name == $role;
    }

    public function authorizeRole($role)
    {
        return $this->hasRole($role) ||
            abort(401, 'This action is unauthorized.');
    }

}