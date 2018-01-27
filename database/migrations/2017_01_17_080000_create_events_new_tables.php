<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsNewTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventtype_role', function (Blueprint $table) {
            $table->integer('eventtype_id')->unsigned()->index();
            $table->foreign('eventtype_id')->references('id')->on('eventtypes')->onDelete('cascade');
            $table->string('role_id', 255);
            /* $table->foreign('role_id')->references('id')->on('posts')->onDelete('cascade'); La table role n'existe pas réellement */
            $table->string('rights', 5);
        });
        Schema::create('eventtype_slottype', function (Blueprint $table) {
            $table->integer('eventtype_id')->unsigned()->index();
            $table->foreign('eventtype_id')->references('id')->on('eventtypes')->onDelete('cascade');
            $table->integer('slottype_id')->unsigned()->index();
            $table->foreign('slottype_id')->references('id')->on('slottypes')->onDelete('cascade');
        });
        Schema::create('eventtype_service', function (Blueprint $table) {
            $table->integer('eventtype_id')->unsigned()->index();
            $table->foreign('eventtype_id')->references('id')->on('eventtypes')->onDelete('cascade');
            $table->integer('service_id')->unsigned()->index();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
        Schema::create('eventtype_status', function (Blueprint $table) {
            $table->integer('eventtype_id')->unsigned()->index();
            $table->foreign('eventtype_id')->references('id')->on('eventtypes')->onDelete('cascade');
            $table->integer('status_id')->unsigned()->index();
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
        });
        Schema::create('eventtype_commune', function (Blueprint $table) {
            $table->integer('eventtype_id')->unsigned()->index();
            $table->foreign('eventtype_id')->references('id')->on('eventtypes')->onDelete('cascade');
            $table->integer('commune_id')->unsigned()->index();
            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');
        });
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned()->index();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
			$table->string('filename', 255);
			$table->string('mime', 255);
			$table->string('size', 255);
			$table->text('data');
            $table->timestamps();
        });
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned()->index();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->string('content', 255);
            $table->string('author', 20)->nullable();
            $table->timestamps();
        });
        Schema::table('events', function (Blueprint $table) {
            $table->integer('commune_id')->default(1);
            $table->foreign('commune_id')->references('id')->on('communes')->onDelete('cascade');
            $table->integer('eventtype_id')->default(2);
            $table->foreign('eventtype_id')->references('id')->on('eventtypes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slottypes', function (Blueprint $table) {
            $table->dropColumn('type');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('eventtype_id');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('commune_id');
        });
        Schema::dropIfExists('logs');
        Schema::dropIfExists('documents');
        Schema::dropIfExists('eventtype_status');
        Schema::dropIfExists('eventtype_service');
        Schema::dropIfExists('eventtype_slottype');
        Schema::dropIfExists('eventtype_role');
                
    }
}
