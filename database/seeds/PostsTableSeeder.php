<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Post::class,300)->create()->each(function(App\Post $post){
          $tag1 = rand(1,5);
          $tag2 = rand(6,14);
          $tag3 = rand(15,20);
          $post->tags()->attach([
            $tag1,
            $tag2,
            $tag3
          ]);
        });
    }
}
