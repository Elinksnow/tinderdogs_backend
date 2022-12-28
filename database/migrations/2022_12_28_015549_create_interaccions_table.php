<?php

use App\Models\Perro;
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
        Schema::create('interaccions', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('preferencia');
            $table->timestamps();
            // $table->foreign('perro_candidato_id')->references('id')->on('perros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interaccions');
    }
};
