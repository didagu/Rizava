<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            //company details
            $table->string('company_name');
            $table->string('event_name');
            $table->string('company_website');
            $table->string('previous_event')->nullable();
            //services needed
            $table->string('internet_facility')->nullable();
            $table->string('video_coverage')->nullable();
            $table->string('catering')->nullable();
            $table->string('other_services')->nullable();
            //type of event
            $table->string('event_type');
            //date of event and time
            $table->string('event_date');
            $table->time('event_start');
            $table->time('event_end');

            $table->string('event_space');
            $table->string('eventPay');
            //contact person
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('phone_number');
            //event session status
            $table->integer('pend_id');
            $table->integer('accept_id')->nullable();
            $table->integer('cancel_id')->nullable();
            //cchub rights
            $table->string('rights');
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
        Schema::dropIfExists('events');
    }
}
