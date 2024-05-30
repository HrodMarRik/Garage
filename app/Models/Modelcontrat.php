<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelcontrat extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'structure',
    ];
}
