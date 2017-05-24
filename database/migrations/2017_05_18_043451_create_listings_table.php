<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('headline', 64);
            $table->text('description');
            $table->enum('category', ['iphone', 'smartphone', 'ipad', 'tablet']);
            $table->enum('condition', ['mint', 'good', 'fair', 'new']);
            $table->text('dmgdescription')->nullable();
            $table->boolean('refurbished');
            $table->boolean('originalowner');
            $table->double('askingprice', 10, 2)->unsigned();
            $table->string('paypalemail');
            $table->string('devicecolor');
            $table->string('devicestorage');
            $table->boolean('boxincluded');
            $table->boolean('usbincluded');
            $table->boolean('adapterincluded');
            $table->boolean('microsdincluded');
            $table->boolean('carchargedincluded');
            $table->string('country', 10);
            $table->string('shiplocation', 64);
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
        Schema::dropIfExists('listings');
    }
}
