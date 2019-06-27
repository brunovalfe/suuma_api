<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultToUsersParams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('first_time')->nullable()->change();
            $table->integer('instructor')->default(0)->change();
            $table->integer('service_chief')->default(0)->change();
            $table->integer('operator')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('first_time');
            $table->integer('instructor');
            $table->integer('service_chief');
            $table->integer('operator');
        });
    }
}
