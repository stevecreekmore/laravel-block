<?php

namespace stevecreekmore\LaravelBlock\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use stevecreekmore\LaravelBlock\LaravelBlock;

class User extends Authenticatable
{
    use LaravelBlock;

    public $timestamps = false;

    // this model is only to be used for running tests
}
