<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('apprentice', function (Blueprint $table) {
            $table->id();
              $table->string('name');
            $table->string('email')->unique();
            $table->integer('cell number');
            $table->foreignId('couser_id')->nullable()->constrained('courses')->nullOnDelete('cascade');
            $table->foreignId('computer_id')->nullable()->constrained('computers')->nullOnDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprentice');
    }
};
