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
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();
            $table->string('slug')->unique();

    
            $table->decimal('regular_price');
            $table->decimal('sale_price')->nullable();



            $table->boolean('featured')->defaault(false);
       

            $table->biginteger('category_id')->unsigned()->nullable();
            $table->biginteger('store_id')->unsigned()->nullable();

            $table->string('discount_code')->nullable();

            $table->float('stars')->nullable();
            
            $table->longText('link');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');

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
