<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoverImage4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coverImage4', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('itemID');
            $table->string('cover_imaged1');
            $table->string('cover_imaged2');
            $table->string('cover_imaged3');
            $table->string('cover_imaged4');
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
        Schema::dropIfExists('coverImage4');
        $table->dropColumn('cover_imaged1');
        $table->dropColumn('cover_imaged2');
        $table->dropColumn('cover_imaged3');
        $table->dropColumn('cover_imaged4');
    }
}
