<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availables', function (Blueprint $table) {
            $table->id();
            $table->string('Serial_no')->nullable;
            $table->string('Available_hospital')->nullable;
            $table->string('Location')->nullable; 
            $table->string('Vacant_isolation_beds')->nullable;
            $table->string('Providable_oxygen_cylinder')->nullable;
            $table->string('Available_ventilator_ICU_beds')->nullable;
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
        Schema::dropIfExists('availables');
    }
};
