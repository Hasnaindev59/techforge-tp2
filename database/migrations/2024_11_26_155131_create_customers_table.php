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
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('customer_name', 100);
            $table->string('password')->nullable();
            $table->string('phone_number', 30)->nullable();
            $table->string('email', 100)->unique();
            $table->boolean('email_confirmed')->default(false);
            $table->string('google_id')->nullable(); 
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};