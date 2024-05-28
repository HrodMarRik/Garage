<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    use HasFactory;

    protected $fillable = [
        'adresse',
        'montant_charges',
        'prix_particulier',
        'prix_entreprise',
        'remboursement_emprunt_mois',
        'date_achat',
        'date_fin_remboursement_emprunt',
    ];
}
