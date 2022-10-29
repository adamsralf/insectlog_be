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
        Schema::rename('insects', 'insect_infos');

        Schema::create('insects', function (Blueprint $table) {
           $table->id();
           $table->string('species_name');
           $table->timestamps();
        });

        Schema::table('insect_infos', function (Blueprint $table) {
            $table->dropColumn('species_name');
            $table->unsignedBigInteger('insect_id');
            $table->foreign('insect_id')->references('id')->on('insects');
        });

        Schema::table('insect_infos', function (Blueprint $table) {
            $table->renameColumn('lang_id', 'lang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('insect_infos', 'insects');

        Schema::table('insect_infos', function (Blueprint $table) {
            $table->string('species_name');
        });

        Schema::table('insect_infos', function (Blueprint $table) {
            $table->renameColumn('lang', 'lang_id');
        });
    }
};
