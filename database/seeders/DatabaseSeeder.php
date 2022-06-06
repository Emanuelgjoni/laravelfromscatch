<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user=\App\Models\User::factory()->create(['name'=>'JOhn']);
        Category::truncate();

        \App\Models\Post::factory(5)->create([
            'user_id'=>$user->id
        ]);
        

        // Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'personal'
        // ]);
        // Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);
    }
}
