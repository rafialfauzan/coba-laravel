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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name'=>'Rafi Fauzan',
            'email'=>'rafifauzan@teyvat.com',
            'password'=>bcrypt('12345')
        ]);

        User::create([
            'name'=>'Chi',
            'email'=>'chichi@teyvat.com',
            'password'=>bcrypt('12345')
        ]);

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Post::create([
            'title'=>'Judul Pertama',
            'slug'=>'judul-pertama',
            'exerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure provident recusandae error temporibus. Ea laborum veritatis amet voluptate dolorem ab odit!',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure provident recusandae error temporibus. Ea laborum veritatis amet voluptate dolorem ab odit! Numquam pariatur molestiae omnis illum est nam maxime sint excepturi laudantium, explicabo animi ex quia? Vel, facilis doloribus libero itaque quia eveniet incidunt ipsa et numquam dolore explicabo. At repudiandae, earum, labore ducimus quasi voluptatem officia pariatur tempore quam non eveniet praesentium placeat a vel esse ratione voluptatibus repellat exercitationem nulla dignissimos quaerat eius modi. Veniam unde culpa quae exercitationem. Necessitatibus porro, velit fuga autem culpa harum sapiente veritatis consequatur eum deserunt facere ratione? Totam aperiam aut sit quia doloremque quam necessitatibus modi, quae qui neque doloribus nam perspiciatis tempore ad accusantium ipsam ex iste illum! Ea, perferendis facere.',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'Judul Kedua',
            'slug'=>'judul-kedua',
            'exerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure provident recusandae error temporibus. Ea laborum veritatis amet voluptate dolorem ab odit!',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure provident recusandae error temporibus. Ea laborum veritatis amet voluptate dolorem ab odit! Numquam pariatur molestiae omnis illum est nam maxime sint excepturi laudantium, explicabo animi ex quia? Vel, facilis doloribus libero itaque quia eveniet incidunt ipsa et numquam dolore explicabo. At repudiandae, earum, labore ducimus quasi voluptatem officia pariatur tempore quam non eveniet praesentium placeat a vel esse ratione voluptatibus repellat exercitationem nulla dignissimos quaerat eius modi. Veniam unde culpa quae exercitationem. Necessitatibus porro, velit fuga autem culpa harum sapiente veritatis consequatur eum deserunt facere ratione? Totam aperiam aut sit quia doloremque quam necessitatibus modi, quae qui neque doloribus nam perspiciatis tempore ad accusantium ipsam ex iste illum! Ea, perferendis facere.',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'Judul Ketiga',
            'slug'=>'judul-ketiga',
            'exerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure provident recusandae error temporibus. Ea laborum veritatis amet voluptate dolorem ab odit!',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure provident recusandae error temporibus. Ea laborum veritatis amet voluptate dolorem ab odit! Numquam pariatur molestiae omnis illum est nam maxime sint excepturi laudantium, explicabo animi ex quia? Vel, facilis doloribus libero itaque quia eveniet incidunt ipsa et numquam dolore explicabo. At repudiandae, earum, labore ducimus quasi voluptatem officia pariatur tempore quam non eveniet praesentium placeat a vel esse ratione voluptatibus repellat exercitationem nulla dignissimos quaerat eius modi. Veniam unde culpa quae exercitationem. Necessitatibus porro, velit fuga autem culpa harum sapiente veritatis consequatur eum deserunt facere ratione? Totam aperiam aut sit quia doloremque quam necessitatibus modi, quae qui neque doloribus nam perspiciatis tempore ad accusantium ipsam ex iste illum! Ea, perferendis facere.',
            'category_id'=>2,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'Judul Keempat',
            'slug'=>'judul-keempat',
            'exerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure provident recusandae error temporibus. Ea laborum veritatis amet voluptate dolorem ab odit!',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure provident recusandae error temporibus. Ea laborum veritatis amet voluptate dolorem ab odit! Numquam pariatur molestiae omnis illum est nam maxime sint excepturi laudantium, explicabo animi ex quia? Vel, facilis doloribus libero itaque quia eveniet incidunt ipsa et numquam dolore explicabo. At repudiandae, earum, labore ducimus quasi voluptatem officia pariatur tempore quam non eveniet praesentium placeat a vel esse ratione voluptatibus repellat exercitationem nulla dignissimos quaerat eius modi. Veniam unde culpa quae exercitationem. Necessitatibus porro, velit fuga autem culpa harum sapiente veritatis consequatur eum deserunt facere ratione? Totam aperiam aut sit quia doloremque quam necessitatibus modi, quae qui neque doloribus nam perspiciatis tempore ad accusantium ipsam ex iste illum! Ea, perferendis facere.',
            'category_id'=>2,
            'user_id'=>2
        ]);
    }
}
