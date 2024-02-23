<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::create([
            'name'=>'Rafi Fauzan',
            'username'=>'rafifauzan',
            'email'=>'rafifauzan@teyvat.com',
            'password'=>bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Post::factory(20)->create();
    }
}
