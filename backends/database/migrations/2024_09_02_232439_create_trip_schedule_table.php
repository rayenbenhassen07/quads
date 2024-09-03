<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripScheduleTable extends Migration
{
    public function up()
    {
        Schema::create('trip_schedule', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trip_id')->constrained('trips')->onDelete('cascade');
            $table->string('day_of_week', 10);
            $table->time('time_slot');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trip_schedule');
    }
}
