<?php
/********************************
Developer: Anonymous, Anonymous
Anonymous Anonymous, Anonymous
********************************/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->unsignedInteger('product_id'); 
            $table->unsignedBigInteger('category_id'); 

            $table->timestamps(); 

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->primary(['product_id', 'category_id']);
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};