<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('business_cards', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Konsisten dengan model
            $table->string('photo')->nullable();
            $table->string('position'); // Konsisten dengan model
            $table->string('mobile'); // Konsisten dengan model
            $table->string('office');  // Konsisten dengan model
            $table->string('email')->unique();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_cards');
    }

};
