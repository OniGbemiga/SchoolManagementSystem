<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('firstname')->nullable();
            $table->string('image')->nullable();
            $table->string('birth')->nullable();
            $table->string('location')->nullable();
            $table->string('religion')->nullable();
            $table->string('kinname')->nullable();
            $table->string('kinrelationship')->nullable();
            $table->string('address')->nullable();
            $table->string('sponsorname')->nullable();
            $table->string('extra')->nullable();
            $table->string('title')->nullable();
            $table->string('sex')->nullable();
            $table->string('nation')->nullable();
            $table->string('origin')->nullable();
            $table->string('marriage')->nullable();
            $table->string('homeaddress')->nullable();
            $table->string('kinaddress')->nullable();
            $table->string('kinphone')->nullable();
            $table->string('year')->nullable();
            $table->string('coursetime')->nullable();
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
        Schema::dropIfExists('biodatas');
    }
}
