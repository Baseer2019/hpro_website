<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_type extends Model
{
    use HasFactory;
    function project()
    {
        return $this->hasMany(Projects::class);
    }
}
