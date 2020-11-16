<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('owner');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('petname'); 
            $table->text('description');

            $table->unsignedBigInteger('servicetype_id');
                          
            $table->foreign('servicetype_id')
                  ->references('id')->on('service_types')
                  ->onDelete('cascade'); 
            $table->timestamps();

            $table->unsignedBigInteger('package_id');
                          
            $table->foreign('package_id')
                  ->references('id')->on('packages')
                  ->onDelete('cascade'); 
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
        Schema::dropIfExists('bookings');
    }
}
