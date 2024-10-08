<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('babs', function (Blueprint $table) {
            $table->id();
            $table->integer('subs_id');
            $table->string('name');
            $table->string('judul_sub_bab_1')->nullable();
            $table->longText('isi_sub_bab_1')->nullable();
            $table->string('image_1')->nullable();
            $table->string('video_1')->nullable();
            $table->string('judul_sub_bab_2')->nullable();
            $table->longText('isi_sub_bab_2')->nullable();
            $table->string('image_2')->nullable();
            $table->string('video_2')->nullable();
            $table->string('judul_sub_bab_3')->nullable();
            $table->longText('isi_sub_bab_3')->nullable();
            $table->string('image_3')->nullable();
            $table->string('video_3')->nullable();
            $table->string('judul_sub_bab_4')->nullable();
            $table->longText('isi_sub_bab_4')->nullable();
            $table->string('image_4')->nullable();
            $table->string('video_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('babs');
    }
}
