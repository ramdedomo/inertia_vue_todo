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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->boolean('isDone');
            $table->timestamps();
        });

        // Insert sample data
        DB::table('tasks')->insert([
            ['task' => 'Task 1', 'isDone' => false, 'created_at' => now(), 'updated_at' => now()],
            ['task' => 'Task 2', 'isDone' => true, 'created_at' => now(), 'updated_at' => now()],
            // Add more sample data as needed
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
