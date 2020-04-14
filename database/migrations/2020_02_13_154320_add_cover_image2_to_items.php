<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoverImage2ToItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function ( $table) {
            $table->string('cover_image2');
            $table->string('cover_image3');
            $table->string('cover_image4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function ( $table) {
            $table->dropColumn('cover_image2');
            $table->dropColumn('cover_image3');
            $table->dropColumn('cover_image4');
        });
    }
}
