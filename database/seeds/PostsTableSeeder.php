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
        DB::table('posts')->truncate();

        DB::table('posts')->insert([
            'title' => 'test',
            'content' => 'blablabla',
        ]);

        factory(App\Post::class, 50)->create();
    }
}
