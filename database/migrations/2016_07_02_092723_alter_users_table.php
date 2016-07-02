<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('firebird_host')->default('localhost');
            $table->string('firebird_database')->nullable();
            $table->string('firebird_username')->nullable();
            $table->string('firebird_password')->nullable();
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
            $table->dropColumn(['firebird_host', 'firebird_database', 'firebird_username', 'firebird_password']);
        });
    }
}
