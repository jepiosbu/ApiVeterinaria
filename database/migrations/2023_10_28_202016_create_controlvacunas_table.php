<?php

use App\Models\mascota;
use App\Models\vacuna;
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
        Schema::create('controlvacunas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(mascota::class)->constrained();
            $table->foreignIdFor(vacuna::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controlvacunas');
    }
};
