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
    //run the migrations
    public function up(): void
    {
        Schema::create('motherboard_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->unique();
            $table->string('socket_type')->nullable();
            $table->string('ram_type')->nullable();
            $table->integer('sata_storage_connectors')->nullable();
            $table->integer('m2_storage_connectors')->nullable();
            
        
            $table->timestamps();
        
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade');
        });
        
    }

     // Reverse the migrations.
     
    public function down(): void
    {
        Schema::dropIfExists('motherboard_products');
    }
};