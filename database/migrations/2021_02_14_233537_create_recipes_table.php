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
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->time('prep_time');
            $table->time('cook_time');
            $table->time('ready_in')->nullable();
            $table->string('cooking_method')->nullable();
            $table->string('yield')->nullable();
            $table->string('country');
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('category_id')->constrained()->cascadeOnUpdate();
            $table->longText('extra_notes')->nullable();
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
