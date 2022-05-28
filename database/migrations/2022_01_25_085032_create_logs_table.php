<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
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
            $table->bigInteger('monitor_id')->unsigned();
            $table->foreign('monitor_id')->references('id')->on('monitors')->onDelete('cascade')->nullable();
            $table->enum('status',['Up','Down','running','start'] )->nullable();
            $table->string('min')->nullable();
            $table->string('avg')->nullable();
            $table->string('max')->nullable();
            $table->string('mdev')->nullable();
            $table->time('interval')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('logs');
    }
}
