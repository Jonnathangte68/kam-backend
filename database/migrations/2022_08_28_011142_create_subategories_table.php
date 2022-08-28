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
        Schema::create('subategories', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('description', 500);
            $table->string('image', 100);
            $table->float('price', 8, 2);
            $table->unsignedInteger('category_id');
            $table->timestamps();
        });

        Schema::table('subategories', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subategories');
    }
};
