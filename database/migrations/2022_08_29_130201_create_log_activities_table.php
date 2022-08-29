<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId("actionId")->references('id')->on('actions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId("bookId")->nullable()->references('id')->on('books')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId("equipmentId")->nullable()->references('id')->on('equipments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId("userId")->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('log_activities');
    }
}
