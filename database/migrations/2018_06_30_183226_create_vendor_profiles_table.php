<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('business_name');
            $table->index('business_name');
            $table->text('about_business')->nullable();
            $table->text('photos')->nullable()->comment('commma separated list of photos of vendor');
            $table->integer('country_id')->default(1)->comment('country of the vendor');
            $table->integer('city_id')->comment('city of the vendor');

            $table->boolean('faq_completed')->comment('0 -> No, 1 -> Yes, weather has complete the faq or not, if yes then do not give access of faq page after fresh registration')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_profiles');
    }
}
