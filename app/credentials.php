<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class credentials extends Model
{
    protected $table = 'credentials';

    protected $fillable = ['id','usergroup_id','role_id','status'];

    public $timestamps = true;
}
