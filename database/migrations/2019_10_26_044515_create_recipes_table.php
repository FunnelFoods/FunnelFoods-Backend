<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('directions');
            $table->float('fat')->nullable();
            $table->timestamp('date')->nullable();
            $table->longText('categories');
            $table->float('calories')->nullable();
            $table->string('description')->nullable();
            $table->float('protein')->nullable();
            $table->float('rating')->nullable();
            $table->string('title');
            $table->longText('ingredients');
            $table->double('sodium')->nullable();
            $table->longText('ingredients_processed');
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
        Schema::dropIfExists('recipes');
    }
}
