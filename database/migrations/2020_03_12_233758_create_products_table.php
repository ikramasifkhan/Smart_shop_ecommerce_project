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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->string('name', 128)->unique();
            $table->string('slug', 128)->unique();
            $table->text('short_description');
            $table->longText('long_description');
            $table->decimal('price', 8, 2);
            $table->decimal('sell_price', 8, 2)->nullable();
            $table->tinyInteger('in_stock')->default(1);
            $table->tinyInteger('publication_status')->default(1);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
