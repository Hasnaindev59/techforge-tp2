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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 50)->unique();
        });
    }

     // Reverse the migrations.
     
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};