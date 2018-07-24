<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('category_id');
            $table->string('subcategory_id');
            $table->string('manufacturer_id');
            $table->string('productName');
            $table->string('productQuantity');
            $table->string('productPrice');
            $table->text('productShortdescription');
            $table->text('productLongdescription');
            $table->string('productImage');
            $table->string('publicationStatus');
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
        Schema::dropIfExists('product');
    }
}
