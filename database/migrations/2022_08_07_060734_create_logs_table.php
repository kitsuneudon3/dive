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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('spot_id');
            $table->dateTime('date');
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->integer('total_time')->nullable();
            $table->integer('max_depth')->nullable();
            $table->integer('ave_depth')->nullable();
            $table->integer('start_air')->nullable();
            $table->integer('end_air')->nullable();
            $table->text('memo')->nullable();
            $table->text('member')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
};
