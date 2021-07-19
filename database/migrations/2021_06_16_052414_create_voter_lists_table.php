<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoterListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voter_lists', function (Blueprint $table) {
            $table->id();
            $table->string('constituency_name')->nullable();
            $table->string('moza_daha_city')->nullable();
            $table->string('patwar_circle_name')->nullable();
            $table->string('tehsil')->nullable();
            $table->string('district')->nullable();
            $table->string('constituency_area_number')->nullable();
            $table->string('ward_no')->nullable();//
            $table->string('union_council')->nullable();
            $table->string('gender')->nullable(); # 0 for male 1 for female
            $table->string('name')->nullable();
            $table->string('father_husband_name')->nullable();
            $table->string('cnic',15)->nullable();
            $table->string('occupation')->nullable();
            $table->integer('age')->default(0);
            $table->string('address')->nullable();
            $table->string('mobile_number',15)->nullable();
            $table->string('polling_station_no')->nullable();
            $table->string('potential_voter')->nullable();
            $table->unsignedBigInteger('status')->default(0);
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
        Schema::dropIfExists('voter_lists');
    }
}
