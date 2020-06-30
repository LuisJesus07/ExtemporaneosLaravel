<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('slug')->unique();

            $table->unsignedBigInteger('degree_id'); 
            $table->foreign('degree_id')->references('id')->on('degrees')->onDelete('cascade');

            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('study_plans');
    }
}
