<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->enum('gender', ['male', 'female']);
            $table->string('birthPlace')->nullable();
            $table->date('birthDate')->nullable();
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
