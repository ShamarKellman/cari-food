<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutrition', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recipe_id')->constrained();
            $table->string('serving_size')->nullable();
            $table->integer('calories')->nullable();
            $table->integer('carbohydrates')->nullable();
            $table->integer('cholesterol')->nullable();
            $table->integer('fat')->nullable();
            $table->integer('fibre')->nullable();
            $table->integer('protein')->nullable();
            $table->integer('saturated_fat')->nullable();
            $table->integer('sodium')->nullable();
            $table->integer('sugar')->nullable();
            $table->integer('unsaturated_fat')->nullable();
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
        Schema::dropIfExists('nutrition');
    }
}
