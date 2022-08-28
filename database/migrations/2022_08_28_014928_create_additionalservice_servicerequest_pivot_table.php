<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdditionalserviceServicerequestPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additionalservice_servicerequest', function (Blueprint $table) {
            $table->unsignedBigInteger('additionalservice_id')->index();
            $table->foreign('additionalservice_id')->references('id')->on('additional_services')->onDelete('cascade');
            $table->unsignedBigInteger('servicerequest_id')->index();
            $table->foreign('servicerequest_id')->references('id')->on('service_requests')->onDelete('cascade');
            $table->primary(['additionalservice_id', 'servicerequest_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('additionalservice_servicerequest');
    }
}
