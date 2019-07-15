<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CambiarNulosQuitarRange extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('range');
            $table->string('ec_name')->nullable()->change();
            $table->string('ec_appat')->nullable()->change();
            $table->string('ec_apmat')->nullable()->change();
            $table->string('ec_relationship')->nullable()->change();

            // Direccion
            $table->string('dir_street', 255)->nullable()->change();
            $table->string('dir_state')->nullable()->change();
            $table->string('dir_col')->nullable()->change();
            $table->string('dir_pc')->nullable()->change();
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
            $table->addColumn('range');
            $table->string('ec_name')->nullable(false)->change();
            $table->string('ec_appat')->nullable(false)->change();
            $table->string('ec_apmat')->nullable(false)->change();
            $table->string('ec_relationship')->nullable(false)->change();

            // Direccion
            $table->string('dir_street', 255)->nullable(false)->change();
            $table->string('dir_state')->nullable(false)->change();
            $table->string('dir_col')->nullable(false)->change();
            $table->string('dir_pc')->nullable(false)->change();
        });
    }
}
