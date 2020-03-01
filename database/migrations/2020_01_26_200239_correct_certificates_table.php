<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorrectCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_curso');
            $table->string('tipo');
            $table->string('fecha_ac');
            $table->string('fecha_cad');
            $table->string('duracion');
            $table->string('observaciones');
            $table->string('estado_solicitud');
            $table->string('file');
            $table->timestamps();

            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
    /*
    Schema::table('users', function (Blueprint $table) {
        $table->renameColumn('from', 'to');
    });
    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
