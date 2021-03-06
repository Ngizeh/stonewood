<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade');
            $table->string('title');
            $table->string('location');
            $table->integer('service_charge')->unsigned()->nullable();
            $table->integer('price')->unsigned()->nullable();
            $table->text('description');
            $table->string('listed');
            $table->string('land')->nullable();
            $table->string('residential')->nullable();
            $table->string('commercial')->nullable();
            $table->string('price_currency')->nullable();
            $table->string('service_currency')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('floor_size')->unsigned()->nullable();
            $table->integer('property_size')->unsingned()->nullable();
            $table->string('property_metrics')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('garage')->nullable();
            $table->double('lat',20, 10);
            $table->double('lng',20, 10);
            $table->integer('sitting_room')->nullable();
            $table->string('reference_number')->unique();
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
        Schema::dropIfExists('properties_table');
    }
}
