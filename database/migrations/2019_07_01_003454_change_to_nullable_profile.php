<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeToNullableProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {

            $table->string('range')->nullable()->change();
            $table->string('blood_type')->nullable()->change();
            $table->string('CURP')->nullable()->change();
            $table->string('tel_contact_2')->nullable()->change();


            // Datos fiscales
            $table->string('fis_business_name')->nullable()->change(); // Razón Social
            $table->string('fis_dir_fiscal', 255)->nullable()->change();
            $table->string('fis_RFC')->nullable()->change();
            $table->string('fis_email')->nullable()->change();

            // Otros
            $table->string('generation')->nullable()->change();
            $table->string('BLS_exp')->nullable()->change(); // Vencimiento BLS
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('range');
            $table->string('blood_type');
            $table->string('CURP');
            $table->string('tel_contact_2');


            // Datos fiscales
            $table->string('fis_business_name');
            $table->string('fis_dir_fiscal', 255);
            $table->string('fis_RFC');
            $table->string('fis_email');

            // Otros
            $table->string('generation');
            $table->string('BLS_exp');
        });
    }
}
