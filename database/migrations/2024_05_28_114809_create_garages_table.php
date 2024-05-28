<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('garages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->adresse();
            $table->montant_charges();
            $table->prix_particulier();
            $table->prix_entreprise();
            $table->remboursement_emprunt_moi();
            $table->date_achat();
            $table->date_fin_remboursement_emprunt();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garages');
    }
};
