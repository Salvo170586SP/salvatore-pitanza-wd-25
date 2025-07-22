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
        Schema::table('trainings', function (Blueprint $table) {
            $table->text('title_ita')->nullable()->after('title');
            $table->text('subtitle_ita')->nullable()->after('subtitle');
            $table->text('description_ita')->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trainings', function (Blueprint $table) {
            $table->dropColumn('title_ita');
            $table->dropColumn('subtitle_ita');
            $table->dropColumn('description_ita');
        });
    }
};
