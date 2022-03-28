<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_donor extends Model
{
    use HasFactory;
    function donor()
    {
        return $this->hasMany(donors::class);
    }
}
