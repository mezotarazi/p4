<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_master', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sku')->nullable();
			$table->string('product_descr')->nullable();
			$table->timestamp('manu_date');
			$table->timestamps();
			$table->string('manu_link',2191)->nullable();
			$table->string('manu_img',2191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_master');
    }
}
