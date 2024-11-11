<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 100; $i++) {
            $newPost = new Post();
            $newPost->name = $faker->firstName();
            $newPost->author = $faker->firstName() .' '. $faker->unique()->lastName();
            $newPost->description = $faker->realTextBetween(150, 450);
            $newPost->save();
    }
}
