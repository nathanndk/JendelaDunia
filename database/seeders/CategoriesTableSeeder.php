<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_id = 1;

        DB::table('book_categories')->insert([
            [
                'id' => 1,
                'name' => 'Science Fiction',
            ],
            [
                'id' => 2,
                'name' => 'Fantasy',
            ],
            [
                'id' => 3,
                'name' => 'Biography',
            ],
            [
                'id' => 4,
                'name' => 'History',
            ],
            [
                'id' => 5,
                'name' => 'Self-Improvement',
            ],
        ]);
    }
}
