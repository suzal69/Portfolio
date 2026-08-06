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
        Schema::table('projects', function (Blueprint $table) {
            if (!Schema::hasColumn('projects', 'title')) {
                $table->string('title')->after('id');
            }
            if (!Schema::hasColumn('projects', 'description')) {
                $table->text('description')->after('title');
            }
            if (!Schema::hasColumn('projects', 'status')) {
                $table->string('status')->default('pending')->after('description');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            if (Schema::hasColumn('projects', 'status')) {
                $table->dropColumn('status');
            }
            if (Schema::hasColumn('projects', 'description')) {
                $table->dropColumn('description');
            }
            if (Schema::hasColumn('projects', 'title')) {
                $table->dropColumn('title');
            }
        });
    }
};
