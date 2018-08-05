<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_profiles', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('customer_id');
            
            $table->enum('gender',['male','female'])->default('male');
            $table->unsignedInteger('country_id')->comment('country of the customer');
            $table->unsignedInteger('city_id')->comment('city of the customer');
        });

        Schema::table('customer_profiles', function (Blueprint $table) {

           $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
           
           $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');

           $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_profiles');
    }
}
