<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoverImage2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coverImage2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('itemID');
            $table->string('cover_imageb1');
            $table->string('cover_imageb2');
            $table->string('cover_imageb3');
            $table->string('cover_imageb4');
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
        Schema::dropIfExists('coverImage2');
        $table->dropColumn('cover_imageb1');
        $table->dropColumn('cover_imageb2');
        $table->dropColumn('cover_imageb3');
        $table->dropColumn('cover_imageb4');
    }
}
