<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            //contact person
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('phone_number');
            //company details
            $table->string('company_name');
            $table->string('company_website');
            //type of event
            $table->boolean('technology');
            $table->boolean('education');
            $table->boolean('social_change');
            //services needed
            $table->boolean('internet_facility');
            $table->boolean('video_coverage');
            $table->boolean('catering');
            $table->string('other_services');
            //space booked
            $table->boolean('rooftop');
            $table->boolean('sixth_floor');
            //time and date of event
            $table->string('event_date');
            $table->string('event_time');
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
