<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $comic = new Comic; 

            $comic->title = $faker->words(3, true);
            $comic->synopsis = $faker->paragraphs(3, true);
            $comic->author = $faker->name($gender = 'male'|'female');
            $comic->pencils = $faker->name($gender = 'male'|'female');
            $comic->inks = $faker->name($gender = 'male'|'female');
            $comic->cover_by = $faker->name($gender = 'male'|'female');
            $comic->rating = $faker->numberBetween(0, 10);
            $comic->pages = $faker->numberBetween(32, 48);

            $comic->save();

        }
    }
}
