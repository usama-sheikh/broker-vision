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
        Schema::create('event_tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('artist_id');
            $table->unsignedBigInteger('event_id');
            $table->string('production_id')->nullable();
            $table->string('ticket_id')->nullable();
            $table->string('price')->default(0);
            $table->string('section')->nullable();
            $table->string('row')->nullable();
            $table->unsignedInteger('quantity')->default(0);
            $table->string('quantity_m')->nullable();
            $table->string('quantity_v')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('event_tickets');
    }
};
