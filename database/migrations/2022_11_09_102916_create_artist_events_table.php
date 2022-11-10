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
            $table->string('production_id')->nullable();
            $table->string('title')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('venue')->nullable();
            $table->string('location')->nullable();
            $table->string('singer')->nullable();
            $table->longText('tickets_url')->nullable();
            $table->string('source')->default('vividseats');
            $table->string('listingCount')->nullable();
            $table->string('ticketCount')->nullable();
            $table->string('mapTitle')->nullable();
            $table->string('venueCountry')->nullable();
            $table->string('venueTimeZone')->nullable();
            $table->string('productionCategory')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('date_time')->nullable();
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
