<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_vendor', function (Blueprint $table) {
            $table->increments('vendor_id');
            $table->string('vendor_name');
            $table->integer('service_id');
            $table->longtext('vendor_description');
            $table->float('vendor_price');
            $table->string('vendor_image');
            $table->string('vendor_theme');
            $table->integer('publication_status');
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
        Schema::dropIfExists('tbl_vendor');
    }
}
