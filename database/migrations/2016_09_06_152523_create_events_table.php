<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('description',255)->nullable();
            $table->string('color1',10)->nullable();
            $table->string('color2',10)->nullable();
            $table->string('color3',10)->nullable();
            $table->boolean('visible')->nullable();
        });
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
        });
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            // $table->string('location',100)->nullable();
            // $table->timestamp('start_time');
            // $table->timestamp('end_time')->nullable();
            $table->timestamps();
            $table->string('organisation',100)->nullable();
            $table->string('contact_name',100)->nullable();
            $table->string('contact_phone',20)->nullable();
            $table->string('security_name',100)->nullable();
            $table->string('security_phone',20)->nullable();
            $table->string('comment',255)->nullable();
            
            $table->integer('status_id')->nullable()->unsigned();
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
            $table->date('announcement_date')->nullable();
            $table->date('decision_date')->nullable();
            
            $table->integer('service_id')->nullable()->unsigned();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            // $table->softDeletes();
        });
        Schema::create('slottypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
        });
        Schema::create('slots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location',100)->nullable();
            $table->integer('slottype_id')->nullable()->unsigned();
            $table->foreign('slottype_id')->references('id')->on('slottypes')->onDelete('cascade');
            $table->timestamp('start_time');
            $table->timestamp('end_time')->nullable();
            $table->timestamps();
            $table->integer('event_id')->nullable()->unsigned();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('slots');
        Schema::drop('slottypes');
        Schema::drop('events');
        Schema::drop('status');
        Schema::drop('services');
    }
}
