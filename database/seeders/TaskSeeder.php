<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete all existing records in the 'tasks' table
        DB::table('tasks')->truncate();
    
        // Insert "Feed the dog" task with completed status as true
        DB::table('tasks')->insert([
            'title' => 'Feed the dog',
            'completed' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert "Do homework" task with completed status as false
        DB::table('tasks')->insert([
            'title' => 'Do homework',
            'completed' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert "Go to gym" task with completed status as true
        DB::table('tasks')->insert([
            'title' => 'Go to the gym',
            'completed' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
    }
}
