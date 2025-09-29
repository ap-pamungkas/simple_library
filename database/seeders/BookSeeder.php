<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'The Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'year' => 1954,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'year' => 1937,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Silmarillion',
                'author' => 'J.R.R. Tolkien',
                'year' => 1977,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Two Towers',
                'author' => 'J.R.R. Tolkien',
                'year' => 1954,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Return of the King',
                'author' => 'J.R.R. Tolkien',
                'year' => 1955,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'In the Eye of the Animal',
                'author' => 'Patricia Cox Miller',
                'year' => 2018,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'The Eye of the Beast',
                'author' => 'Patricia Cox Miller',
                'year' =>  2018,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
