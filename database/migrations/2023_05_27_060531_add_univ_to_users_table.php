<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUnivToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('univ')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('rating')->nullable();
            $table->string('like')->nullable();
            $table->string('no_like')->nullable();
            $table->string('feedback')->nullable();
            $table->string('recomended')->nullable();
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
            $table->dropColumn('univ');
            $table->dropColumn('no_hp');
            $table->dropColumn('rating');
            $table->dropColumn('like');
            $table->dropColumn('no_like');
            $table->dropColumn('feedback');
            $table->dropColumn('recomended');
        });
    }
}
