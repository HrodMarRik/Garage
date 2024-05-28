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
            $table->string('adresse');
            $table->decimal('montant_charges', 8, 2);
            $table->decimal('prix_particulier', 8, 2);
            $table->decimal('prix_entreprise', 8, 2);
            $table->decimal('remboursement_emprunt_mois', 8, 2);
            $table->date('date_achat');
            $table->date('date_fin_remboursement_emprunt');
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
