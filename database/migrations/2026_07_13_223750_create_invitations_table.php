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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('template_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('title');

            $table->string('slug')->unique();

            $table->enum('status', [
                'draft',
                'published',
                'archived'
            ])->default('draft');

            $table->json('data');

            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
