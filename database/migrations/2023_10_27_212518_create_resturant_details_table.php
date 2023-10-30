<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResturantDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturant_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('business_name');
            $table->string('contact_number');
            $table->string('representative_name');
            $table->string('image')->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->string('zipcode');
            $table->string('associated_bank')->nullable();
            $table->string('account_type')->nullable();
            $table->string('account_number')->nullable();
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resturant_details');
    }
}
