<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insect_pictures', function (Blueprint $table) {
            $table->id();
            $table->string('picture_storage_url');
            $table->unsignedBigInteger('insect_id');
            $table->foreign('insect_id')->references('id')->on('insects');
            $table->boolean('is_thumbnail')->default(false);
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
        Schema::dropIfExists('insect_pictures');
    }
};
