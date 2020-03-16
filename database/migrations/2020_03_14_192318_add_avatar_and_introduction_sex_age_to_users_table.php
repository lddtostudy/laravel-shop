<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAvatarAndIntroductionSexAgeToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable()->after('password');
            $table->string('introduction')->nullable()->after('avatar');
            $table->string('sex')->nullable()->after('introduction');
            $table->Integer('age')->nullable()->after('sex');
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
            $table->dropColumn('avatar')->nullable();
            $table->dropColumn('introduction')->nullable();
            $table->dropColumn('sex')->nullable();
            $table->dropColumn('age')->nullable();
        });
    }
}
