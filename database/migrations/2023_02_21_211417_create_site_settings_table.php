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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_image')->nullable();
            $table->string('site_title')->nullable();
            $table->string('site_bkash')->nullable();
            $table->string('site_nagat')->nullable();
            $table->string('site_address')->nullable();
            $table->string('site_icon')->nullable();
            $table->string('site_mobile')->nullable();
            $table->string('site_email')->nullable();
            $table->string('site_facebook')->nullable();
            $table->string('site_twitter')->nullable();
            $table->string('site_instragram')->nullable();
            $table->string('site_linkedin')->nullable();
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
        Schema::dropIfExists('site_settings');
    }
};
