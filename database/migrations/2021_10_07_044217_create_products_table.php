<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // id
    // p_name
    // p_code
    // p_desc
    // p_category
    // p_price
    // p_quantity
    // p_stock_date
    // p_rating
    // p_purchased
    
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->increments('id');
            $table->string('p_name',10);
            $table->string('p_code',10);
            $table->string('p_desc',50);
            $table->string('p_category',30);
            $table->string('p_price',10);
            $table->string('p_quantity',10);
            $table->string('p_stock_date',50);
            $table->string('p_rating',30);
            $table->string('p_purchased',30);


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
        Schema::dropIfExists('products');
    }
}
