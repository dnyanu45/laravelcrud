<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    
// app/Models/User.php

public function orders()
{
    return $this->hasMany(Order::class);
}
}

