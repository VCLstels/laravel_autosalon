<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('body');
            $table->integer('price');
            $table->integer('old_price')->nullable();
            $table->string('salon')->nullable();
            $table->string('kpp')->nullable();
            $table->integer('year')->nullable();
            $table->string('color')->nullable();
            $table->foreignId('car_class_id')->constrained();
            $table->foreignId('car_body_id')->constrained();
            $table->foreignId('car_engine_id')->constrained();
            $table->boolean('is_new')->default(false);
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
        Schema::dropIfExists('cars');
    }
}
