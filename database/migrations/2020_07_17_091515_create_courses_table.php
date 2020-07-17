<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('chemistry');
            $table->string('physics');
            $table->string('biology');
            $table->string('geography');
            $table->string('economics');
            $table->string('agric');
            $table->string('government');
            $table->string('literature');
            $table->string('accounting');
            $table->string('commerce');
            $table->string('arts');
            $table->string('civic');
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
        Schema::dropIfExists('courses');
    }
}
