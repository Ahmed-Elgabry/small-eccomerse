<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRegularPriceColumn extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('regular_price')->nullable()->change();
            // Replace 'string' with the appropriate data type of your column
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('regular_price')->nullable(false)->change();
            // In the down method, if you need to revert the change, set nullable to false or remove the change altogether
        });
    }
}
