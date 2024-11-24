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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->enum('status', ['pending', 'proses', 'selesai']);
            $table->string('image');
            $table->string('guest_name');
            $table->string('guest_email');
            $table->string('guest_telp');
            $table->timestamps();

            // Relational Table using foreignId
            $table->foreignId('users_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
