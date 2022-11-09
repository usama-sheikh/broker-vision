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
        Schema::create('artist_events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('artist_id');
            $table->longText('event_url')->nullable();
            $table->string('event_production_id')->nullable();
            $table->string('event_tile')->nullable();
            $table->string('event_date')->nullable();
            $table->string('event_time')->nullable();
            $table->string('event_venue')->nullable();
            $table->string('event_location')->nullable();
            $table->string('event_singer')->nullable();
            $table->longText('event_tickets_url')->nullable();
            $table->string('source')->default('vividseats');
            $table->string('listing_count')->nullable();
            $table->string('ticket_count')->nullable();
            $table->string('mapTitle')->nullable();
            $table->string('venueCountry')->nullable();
            $table->string('venueTimeZone')->nullable();
            $table->string('productionCategory')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('event_date_time')->nullable();
            $table->string('status')->default('active');
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
        Schema::dropIfExists('artist_events');
    }
};
