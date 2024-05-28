<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_client',
        'id_garage',
        'status',
        'structure',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function garage()
    {
        return $this->belongsTo(Garage::class, 'id_garage');
    }
}
