<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesureResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesure_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('location_id');
            $table->integer('product_id');
            $table->integer('edge_devices_id');
            $table->integer('measure_type_id');
            $table->double('value', 12, 2)->nullable();
            $table->timestamp('capture_at')->nullable();
            $table->integer('created_by');
            $table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('status')->default(0)->comment("1=>active,0=>deactivate");
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
        Schema::dropIfExists('mesure_results');
    }
}
