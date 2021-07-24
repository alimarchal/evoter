<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectionDashboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('election_dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('polling_station_no')->nullable();
            $table->string('type')->nullable();
            $table->string('polling_station_name')->nullable();
            $table->string('area')->nullable();
            $table->integer('khawaja_farooq')->nullable();
            $table->integer('iftikhar_gillani')->nullable();
            $table->integer('mubarak_haider')->nullable();
            $table->integer('mukhtar_khan')->nullable();
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
        Schema::dropIfExists('election_dashboards');
    }
}
