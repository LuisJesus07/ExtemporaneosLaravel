<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');

            $table->unsignedBigInteger('semester_id'); 
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');

            $table->unsignedBigInteger('study_plan_id'); 
            $table->foreign('study_plan_id')->references('id')->on('study_plans')->onDelete('cascade');

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
        Schema::dropIfExists('subjects');
    }
}
