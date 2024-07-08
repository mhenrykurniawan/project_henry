<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->uuid('id_product')->primary()->unique()->index();
            
            $table->foreignUuid('id_supplier')
            ->nullable()
            ->constrained('supplier', 'id_supplier', 'product_to_supplier')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->string('product_name');
            $table->integer('price')->default(0);
            $table->integer('stock')->default(0);
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
};
