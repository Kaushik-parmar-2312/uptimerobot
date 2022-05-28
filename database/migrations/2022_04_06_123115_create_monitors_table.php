<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateMonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitors', function (Blueprint $table) {
            $table->id();
            $table->string('friendly_name',50);
            $table->String('url_ip');
            $table->String('port',20)->nullable();
            $table->string('keyword',50)->nullable();
            $table->boolean('alertWhen')->nullable();
            $table->time('interval');
            $table->time('timeout')->nullable();
            $table->Integer('status')->nullable();
            $table->boolean('pause')->Nullable();
            $table->Integer('monitor_type_id')->unsigned();
            $table->foreign('monitor_type_id')->references('id')->on('monitor_types')->onDelete('cascade');
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
        Schema::dropIfExists('monitors');
    }
}
