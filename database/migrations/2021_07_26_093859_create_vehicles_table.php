<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->nullable()->constrained('brands');
            $table->foreignId('vehicles_type_id')->nullable()->constrained('vehicles_types');
            $table->string('color')->nullable();
            $table->string('year')->nullable();
            $table->text('photos')->nullable();
            $table->string('engine_code')->nullable();
            $table->string('chassis_code')->nullable();
            $table->string('plate_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
