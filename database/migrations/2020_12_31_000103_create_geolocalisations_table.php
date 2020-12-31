<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeolocalisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geolocalisations', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('imei');		
			$table->text('date_tracker');
			$table->integer('angle');
			$table->integer('speed');
			$table->text('position');
			$table->text('status');
			$table->text('name');
			$table->integer('sim_number');
			$table->text('model');
			$table->integer('code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geolocalisations');
    }
}
