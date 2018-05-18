<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NullableFieldsPeaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peaks', function (Blueprint $table) {
            $table->integer('prominence')->unsigned()->nullable()->change();
            $table->decimal('lat', 8, 6)->nullable()->change();
            $table->decimal('long', 9, 6)->nullable()->change();
            $table->mediumText('usgs')->nullable()->change();
            $table->string('caltopo')->nullable()->change();
            $table->mediumText('featured_image')->nullable()->change();
            $table->mediumText('article_md')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peaks', function (Blueprint $table) {
            $table->integer('prominence')->unsigned()->nullable(false)->change();
            $table->decimal('lat', 8, 6)->nullable(false)->change();
            $table->decimal('long', 9, 6)->nullable(false)->change();
            $table->mediumText('usgs')->nullable(false)->change();
            $table->string('caltopo')->nullable(false)->change();
            $table->mediumText('featured_image')->nullable(false)->change();
            $table->mediumText('article_md')->nullable(false)->change();
        });
    }
}
