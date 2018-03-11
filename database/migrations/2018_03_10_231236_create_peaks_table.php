<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peaks', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('serial', 10);
            $table -> integer('elevation') -> unsigned();
            $table -> integer('prominence') -> unsigned();
            $table -> decimal('lat', 8, 6);
            $table -> decimal('long', 9, 6);
            $table -> mediumText('usgs');
            $table -> string('caltopo');
            $table -> mediumText('featured_image');
            $table -> mediumText('article_md');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peaks');
    }
}
