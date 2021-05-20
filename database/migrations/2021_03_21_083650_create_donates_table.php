<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->constrained('cities');
            $table->string('title');
            $table->string('name');
            $table->longText('description')->nullable();
            //$table->string('slug');
            $table->text('hospital');
            $table->bigInteger('contact');
            $table->enum('blood_type',['A+','A-','B+','B-','AB+','AB-','0+','0-']);
            $table->enum('status',['publish','draft','passive'])->default('draft');
            $table->timestamps();

            //$table->foreignId('city_name')->constrained('users');
        });

        /*Schema::table('donates', function($table) {
            $table->foreign('city_name')->references('id')->on('cities');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donates');
    }
}
