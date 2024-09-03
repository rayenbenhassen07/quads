<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripOptionsTable extends Migration
{
    public function up()
    {
        Schema::create('trip_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trip_id')->constrained('trips')->onDelete('cascade');
            $table->string('option_name', 100);
            $table->string('option_type', 50);
            $table->decimal('additional_price', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trip_options');
    }
}

