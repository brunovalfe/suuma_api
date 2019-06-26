<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('appat');
            $table->string('apmat');
            $table->string('range');
            $table->string('date_birth');
            $table->string('blood_type');
            $table->string('CURP');
            $table->string('tel_contact');
            $table->string('tel_contact_2');

            // Contacto emergencia
            $table->string('ec_name');
            $table->string('ec_appat');
            $table->string('ec_apmat');
            $table->string('ec_relationship');

            // Direccion
            $table->string('dir_street', 255);
            $table->string('dir_state');
            $table->string('dir_col');
            $table->string('dir_pc'); // Codigo Postal

            // Datos fiscales
            $table->string('fis_business_name'); // Razón Social
            $table->string('fis_dir_fiscal', 255);
            $table->string('fis_RFC');
            $table->string('fis_email');

            // Otros
            $table->string('generation');
            $table->string('BLS_exp'); // Vencimiento BLS

            $table->timestamps();

            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
