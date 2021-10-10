<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id('articleNumber');
            $table->string('manufacturer', 30);
            $table->string('model', 30);
            $table->integer('rank');
            $table->decimal('price', 12,4)->nullable();
            $table->string('category', 16)->nullable();
            $table->decimal('rating', 12,4)->nullable();
            $table->integer('ratingCount')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
