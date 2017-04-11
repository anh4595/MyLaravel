<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = ['id','username','password','name','phone','email','createdby','updatedby','group_id','status'];

    public $timestamps = true;

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
