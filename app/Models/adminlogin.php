<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class adminlogin extends Model
{
    protected $guard = 'admin';  // Specify that this model is for the "admin" guard
}
