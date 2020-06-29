<?php
use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class,100)
          -> make()
          -> each (function($post) {
            $category = Category::inRandomOrder() ->first();
            $post -> category() -> associate($category);
            $post -> save();
          });
    }
}
