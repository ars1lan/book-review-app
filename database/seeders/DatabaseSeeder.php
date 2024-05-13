<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Review;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Book::factory(33)->create()->each(function ($book) {
            $numReviws = random_int(5, 30);
            Review::factory()->count($numReviws)
                ->good()
                ->for($book)
                ->create();
        });
        Book::factory(33)->create()->each(function ($book) {
            $numReviws = random_int(5, 30);
            Review::factory()->count($numReviws)
                ->bad()
                ->for($book)
                ->create();
        });
        Book::factory(34)->create()->each(function ($book) {
            $numReviws = random_int(5, 30);
            Review::factory()->count($numReviws)
                ->average()
                ->for($book)
                ->create();
        });
    }
}
