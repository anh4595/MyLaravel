<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class customers extends Authenticatable
{

    protected $guards = 'customer';

    protected $table = 'customers';

    protected $fillable = ['id','username','password','name','address','email','phone','status'];

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
