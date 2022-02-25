<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');

            $table->string('size');
            $table->string('sex');
            $table->string('location');
            $table->date('birth');
            $table->double('weight', null, 1);

            $table->text('health')->nullable();
            $table->longText('description')->nullable();            
            
            $table->integer('accept_cats')->default(1);
            $table->integer('accept_dogs')->default(1);
            $table->integer('accept_children')->default(1);

            $table->unsignedBigInteger('specie_id');            
            $table->foreign('specie_id')->references('id')->on('species')->onDelete('cascade');

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
        Schema::dropIfExists('animals');
    }
}
