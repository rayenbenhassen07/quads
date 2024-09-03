<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripImagesTable extends Migration
{
    public function up()
    {
        Schema::create('trip_images', function (Blueprint $table) {
            $table->id();
            $table->uuid('image_url')->nullable();
            $table->foreignId('trip_id')->nullable()->constrained('trips')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trip_images');
    }
}
