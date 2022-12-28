<?php

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
        Schema::table('interaccions', function (Blueprint $table) {
            $table->bigInteger('perro_interesado_id')->unsigned();
            $table->bigInteger('perro_candidato_id')->unsigned();
            $table->foreign('perro_interesado_id')->references('id')->on('perros');
            $table->foreign('perro_candidato_id')->references('id')->on('perros');
        });
    }

    public function down()
    {
        Schema::table('interaccions', function (Blueprint $table) {
            $table->dropForeign('interaccions_perro_interesado_id_foreign');
            $table->dropForeign('interaccions_perro_candidato_id_foreign');
        });
    }


};
