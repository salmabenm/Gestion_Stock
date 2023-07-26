<?php

// database/migrations/<timestamp>_create_poste_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosteTable extends Migration
{
    public function up()
    {
        Schema::create('poste', function (Blueprint $table) {
            $table->id();
            $table->string('poste');
            $table->string('location');
            // Ajoutez d'autres colonnes si nécessaire
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('poste');
    }
}
