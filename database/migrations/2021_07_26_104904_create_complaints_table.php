<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->nullable()->constrained('vehicles');
            $table->foreignId('city_id')->nullable()->constrained('cities');
            $table->foreignId('person_id')->nullable()->constrained('people');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('assigned_id')->nullable()->constrained('users');
            $table->string('type')->nullable();
            $table->text('address')->nullable();
            $table->text('address_zone')->nullable();
            $table->string('location')->nullable();
            $table->text('details')->nullable();
            $table->text('description')->nullable();
            $table->datetime('date')->nullable();
            $table->string('status')->nullable()->default('activa');
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
        Schema::dropIfExists('complaints');
    }
}
