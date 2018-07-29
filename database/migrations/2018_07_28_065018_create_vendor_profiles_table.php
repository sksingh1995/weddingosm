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
            $table->unsignedInteger('service_id');

            $table->string('business_name');
            $table->index('business_name');
            $table->text('about_business')->nullable();
            $table->text('photos')->nullable()->comment('commma separated list of photos of vendor');
            $table->text('faq_answers')->nullable()->comment('contains json string of faq answers given by vendor');
            $table->boolean('verified_by_admin')->default(0)->comment('0 -> no, 1 -> yes,  If the user type is vendor');
            $table->boolean('is_available')->default(1)->comment('0 -> no, 1 -> yes,  If the user type is vendor and he turn of his visibility, then he will not be listed in search result');
            $table->unsignedInteger('country_id')->comment('country of the vendor');

            $table->unsignedInteger('city_id')->comment('city of the vendor');

            $table->boolean('registration_completed_step')->comment('1 -> Sign Up, 2 -> FAQ, 3  -> Gallery. To stop access of page when user completed these steps')->default(1);
        });

        Schema::table('vendor_profiles', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');

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
        Schema::dropIfExists('vendor_profiles');
    }
}
