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
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedInteger('product_id'); // Foreign key to the products table
            $table->string('url'); // URL of the image
            $table->string('alt')->nullable(); // Optional alt text for accessibility
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
