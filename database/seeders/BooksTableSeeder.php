<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'user_id' => 1,
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'published_date' => '1951-07-16',
                'publisher' => 'Little, Brown and Company',
                'pages' => 224,
                'book_category_id' => 1,
            ],
            [
                'user_id' => 1,
                'title' => 'Dune',
                'author' => 'Frank Herbert',
                'published_date' => '1965-06-01',
                'publisher' => 'Chilton Books',
                'pages' => 412,
                'book_category_id' => 1,
            ],
            [
                'user_id' => 1,
                'title' => 'The Hitchhiker\'s Guide to the Galaxy',
                'author' => 'Douglas Adams',
                'published_date' => '1979-10-12',
                'publisher' => 'Pan Books',
                'pages' => 193,
                'book_category_id' => 2,
            ],
            [
                'user_id' => 1,
                'title' => 'The Lord of the Rings',
                'author' => 'J.R.R. Tolkien',
                'published_date' => '1954-07-29',
                'publisher' => 'George Allen & Unwin',
                'pages' => 1178,
                'book_category_id' => 2,
            ],
            [
                'user_id' => 1,
                'title' => 'Steve Jobs',
                'author' => 'Walter Isaacson',
                'published_date' => '2011-10-24',
                'publisher' => 'Simon & Schuster',
                'pages' => 627,
                'book_category_id' => 3,
            ],
            [
                'user_id' => 1,
                'title' => 'The Da Vinci Code',
                'author' => 'Dan Brown',
                'published_date' => '2003-03-18',
                'publisher' => 'Doubleday',
                'pages' => 454,
                'book_category_id' => 3,
            ],
            [
                'user_id' => 1,
                'title' => 'The Joy of Cooking',
                'author' => 'Irma S. Rombauer',
                'published_date' => '1936-11-12',
                'publisher' => 'Bobbs-Merrill',
                'pages' => 1112,
                'book_category_id' => 4,
            ],
            [
                'user_id' => 1,
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'published_date' => '1813-01-28',
                'publisher' => 'T. Egerton, Whitehall',
                'pages' => 279,
                'book_category_id' => 4,
            ],
            [
                'user_id' => 1,
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'published_date' => '2018-10-16',
                'publisher' => 'Avery',
                'pages' => 319,
                'book_category_id' => 5,
            ],
            [
                'user_id' => 1,
                'title' => 'The 48 Laws of Power',
                'author' => 'Robert Greene',
                'published_date' => '1998-09-01',
                'publisher' => 'Viking',
                'pages' => 452,
                'book_category_id' => 5,
            ],
        ]);
    }
}
