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
        if (!Schema::hasColumn('students', 'major_id')) {
            Schema::table('students', function (Blueprint $table) {
                $table->foreignId('major_id')
                    ->nullable()
                    ->constrained('majors')
                    ->nullOnDelete();
            });
        }

        if (!Schema::hasColumn('students', 'class_id')) {
            Schema::table('students', function (Blueprint $table) {
                $table->foreignId('class_id')
                    ->nullable()
                    ->constrained('classes')
                    ->nullOnDelete();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('students', 'major_id')) {
            Schema::table('students', function (Blueprint $table) {
                $table->dropForeign(['major_id']);
                $table->dropColumn('major_id');
            });
        }

        if (Schema::hasColumn('students', 'class_id')) {
            Schema::table('students', function (Blueprint $table) {
                $table->dropForeign(['class_id']);
                $table->dropColumn('class_id');
            });
        }
    }
};