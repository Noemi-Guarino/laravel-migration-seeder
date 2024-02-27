<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
              $table->string('Agency', 64);
              $table->string('DepartureStation', 64);
              $table->string('ArrivalStation', 40);
              $table->Datetime('DepartureTime');
              $table->Datetime('ArrivalTime');
              $table->Varchar('TrainCode',10);
              $table->Integer('NumberOfCarriages');
              $table->Boolean('Intime');
              $table->Boolean('Deleted');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
