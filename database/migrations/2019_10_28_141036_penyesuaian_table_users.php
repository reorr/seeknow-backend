<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PenyesuaianTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->string('username');
            $table->string('avatar')->nullable();
            $table->integer('point');
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->softDeletes();
            // $table->enum('status', ['ACTIVE', 'INACTIVE']);
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
            $table->dropColumn('username');
            $table->dropColumn('avatar');
            $table->dropColumn('point');
            $table->dropColumn('softDeletes');
        });
    }
}
