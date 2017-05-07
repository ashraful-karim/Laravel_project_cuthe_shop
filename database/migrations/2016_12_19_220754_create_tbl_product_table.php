<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name',100);
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->text('product_short_description');
            $table->text('product_long_description');
            $table->float('product_new_price',10,2);
            $table->float('product_old_price',10,2);
            $table->text('product_image');
            $table->tinyInteger('is_featured');
            $table->integer('product_stock');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('tbl_product');
    }
}
