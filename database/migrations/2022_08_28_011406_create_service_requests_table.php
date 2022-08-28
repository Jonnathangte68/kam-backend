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
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 100);
            $table->string('date', 100);
            $table->string('time', 100);
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('customer_phone', 100);
            $table->string('email', 100);
            $table->string('street_address', 500);
            $table->string('apartment_no', 100);
            $table->string('city', 100);
            $table->longText('message');
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
        Schema::dropIfExists('service_requests');
    }
};
