<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
        
            // Basic Information
            $table->string('employeeNumber');
            $table->string('initials')->nullable()->default(null);
            $table->string('firstName');
            $table->string('middleName')->nullable()->default(null);
            $table->string('lastName');
            $table->string('forename')->nullable()->default(null);
            $table->string('maidenName')->nullable()->default(null);
            $table->date('dateOfBirth');
            $table->integer('maritalStatusId')->nullable()->default(null);
            $table->integer('genderId');
            $table->string('bloodGroup')->nullable()->default(null);

            // Identification Information
            $table->string('nicNumber')->nullable()->default(null);
            $table->string('passportNumber')->nullable()->default(null);
            $table->date('passportExpiryDate')->nullable()->default(null);
            $table->string('drivingLicenceNumber')->nullable()->default(null);

            // Ethnic Information
            $table->integer('religionId')->nullable()->default(null);
            $table->integer('nationalityId')->nullable()->default(null);
            $table->integer('raceId')->nullable()->default(null);

            // Residential Address
            $table->string('residentialAddressStreet1')->nullable()->default(null);
            $table->string('residentialAddressCity')->nullable()->default(null);
            $table->integer('residentialAddressStateId')->nullable()->default(null);
            $table->integer('residentialAddressZip')->nullable()->default(null);
            $table->integer('residentialAddressCountryId')->nullable()->default(null);

            // Permanent Address
            $table->string('permanentAddressStreet1')->nullable()->default(null);
            $table->string('permanentAddressCity')->nullable()->default(null);
            $table->integer('permanentAddressStateId')->nullable()->default(null);
            $table->integer('permanentAddressZip')->nullable()->default(null);
            $table->integer('permanentAddressCountryId')->nullable()->default(null);

            // Contact
            $table->string('officeEmail')->nullable()->default(null);
            $table->string('personalEmail')->nullable()->default(null);
            $table->string('officePhone')->nullable()->default(null);
            $table->string('mobilePhone')->nullable()->default(null);
            $table->string('homePhone')->nullable()->default(null);

            // Employment Basic
            $table->date('hireDate');

            $table->string('password')->nullable();
            $table->boolean('blocked')->default(false);
            $table->boolean('expired')->default(false);
            $table->timestamp('lastPasswordReset')->nullable()->default(null);
            $table->integer('loginsCount')->default(0);
            $table->integer('failedLoginsCount')->default(0);
            $table->string('phoneNumber')->nullable()->default(null);
            $table->string('verificationToken')->nullable()->default(null);
            $table->boolean('isTokenActive')->default(false);
            $table->string('picture')->nullable();
            $table->boolean('inactive')->default(false);
            $table->boolean('inDelete')->default(false);
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
        Schema::dropIfExists('people');
    }
}
