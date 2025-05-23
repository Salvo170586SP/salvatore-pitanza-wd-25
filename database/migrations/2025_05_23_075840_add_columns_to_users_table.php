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
        Schema::table('users', function (Blueprint $table) {
            $table->string('img_url')->nullable()->after('name');
            $table->string('img_name')->nullable()->after('img_url');
            $table->text('description')->nullable()->after('img_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('img_url');
            $table->dropColumn('img_name');
            $table->dropColumn('description');
        });
    }
};
