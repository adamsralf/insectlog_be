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
        Schema::table('insect_infos', function (Blueprint $table) {
            $table->dropForeign('insects_lang_id_foreign');
            $table->string('lang')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('insect_infos', function (Blueprint $table) {
            $table->unsignedBigInteger('lang')->change();
        });
    }
};