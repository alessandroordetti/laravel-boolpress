<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Category;
use App\Models\Post;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $id_users = Category::pluck('id')->toArray(); /* prendo tutti gli id di categorie e genera un array */

        $posts = Post::all();


        foreach ($posts as $post){
            $post->categories()
            ->sync($faker->randomElements($id_users, 2));
        }
    }
}
