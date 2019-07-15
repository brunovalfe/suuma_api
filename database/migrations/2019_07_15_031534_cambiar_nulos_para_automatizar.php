<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CambiarNulosParaAutomatizar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('appat')->nullable()->change();
            $table->string('apmat')->nullable()->change();
            $table->string('date_birth')->nullable()->change();
            $table->string('tel_contact')->nullable()->change();
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
            $table->string('name')->nullable(false)->change();
            $table->string('appat')->nullable(false)->change();
            $table->string('apmat')->nullable(false)->change();
            $table->string('date_birth')->nullable(false)->change();
            $table->string('tel_contact')->nullable(false)->change();
        });
    }
}
