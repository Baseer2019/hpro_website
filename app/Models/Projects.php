<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Projects extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'image',
        'pdf',
        'project_type_id'
    ];
    function projectType(){
        return $this->belongsTo(project_type::class);
    }

}
