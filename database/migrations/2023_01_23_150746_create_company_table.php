<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable()->default(null);
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('company_group_id');
            $table->unsignedBigInteger('asset_id');
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('location');
            $table->foreign('company_group_id')->references('id')->on('company_group');
            $table->foreign('asset_id')->references('id')->on('asset');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
