<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * @property mixed password
 */
class Account extends Authenticatable
{
    protected $fillable = ['id','name','email','password'];

}
