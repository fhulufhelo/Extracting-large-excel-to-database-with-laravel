<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('city');
            $table->string('zip');
            $table->unsignedInteger('number');
            $table->string('number_extra')->nullable();
            $table->string('street');
            $table->string('country');
            $table->string('phone');
            $table->string('company');
            $table->string('job_title');
            $table->string('ip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
