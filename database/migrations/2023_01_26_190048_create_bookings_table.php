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
        Schema::create('bookings', function (Blueprint $table) {
            // $table->id();
            // $table->id('tour_id');
            // $table->id('user_id');
            $table->string('email')->nullable();
            $table->string('full_name');
            $table->string('mobile')->unique();
            $table->unsignedInteger('number_of_persons');
            $table->boolean('paid')->default(0);
            
            $table->timestamps();
            $table->foreignId('tour_id')->references('id')->on('tours');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
