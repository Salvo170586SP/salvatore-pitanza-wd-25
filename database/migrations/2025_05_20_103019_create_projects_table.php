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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('img_url')->nullable();
            $table->string('img_name')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_aviable')->default(false);
            $table->string('url_git')->nullable();
            $table->string('url_web')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
