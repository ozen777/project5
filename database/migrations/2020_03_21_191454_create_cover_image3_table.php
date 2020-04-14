<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoverImage3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coverImage3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('itemID');
            $table->string('cover_imagec1');
            $table->string('cover_imagec2');
            $table->string('cover_imagec3');
            $table->string('cover_imagec4');
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
        Schema::dropIfExists('coverImage3');
        $table->dropColumn('cover_imagec1');
        $table->dropColumn('cover_imagec2');
        $table->dropColumn('cover_imagec3');
        $table->dropColumn('cover_imagec4');
    }
}
