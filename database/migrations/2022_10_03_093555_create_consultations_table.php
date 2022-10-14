<?php

use App\Models\Medicament;
use App\Models\Pathologie;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('symptomes');
            $table->string('tension_arterielle');
            $table->string('temperature');
            $table->string('pouls');
            $table->string('frequence_respiratoire');
            $table->string('poids');
            $table->string('glycemie');
            $table->foreignIdFor(Pathologie::class);
            $table->foreignIdFor(Medicament::class);
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultations');
    }
};
