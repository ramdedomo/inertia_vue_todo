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
        Schema::table('tasks', function (Blueprint $table) {
            //
        });

        // Insert sample data
        DB::table('tasks')->insert([
            ['task' => 'Task 3', 'isDone' => false, 'created_at' => now(), 'updated_at' => now()],
            ['task' => 'Task 4', 'isDone' => true, 'created_at' => now(), 'updated_at' => now()],
            ['task' => 'Task 5', 'isDone' => false, 'created_at' => now(), 'updated_at' => now()],
            // Add more sample data as needed
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            //
        });
    }
};
