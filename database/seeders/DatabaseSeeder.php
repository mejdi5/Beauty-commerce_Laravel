<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::query()->delete();
        Product::query()->delete();
        Category::query()->delete();
        Order::query()->delete();

    $admin = User::factory()->create([
         'name' => 'mejdi',
         'lastName' =>'ben ammou',
         'email' => 'mejdi@gmail.com',
         'password' => bcrypt('abcdefgh'),
         'isAdmin' => true,

      ]);

    $firstUser = User::factory()->create([
         'name' => 'ahmed',
         'lastName' => null,
         'email' => 'ahmed@gmail.com',
         'password' => bcrypt('abcdefgh'),
      ]);

      $secondUser =  User::factory()->create([
         'name' => 'mohamed',
         'lastName' => null,
         'email' => 'mohamed@gmail.com',
         'password' => bcrypt('abcdefgh')
      ]);

      $parfums = Category::create([
         'name' => 'PARFUMS',
         'slug' => 'parfums',
      ]);

      $makeup = Category::create([
          'name' => 'MAKE UP',
          'slug' => 'make-up',
       ]);

       $skincare = Category::create([
          'name' => 'SKIN CARE',
          'slug' => 'skin-care',
       ]);

       $hair = Category::create([
        'name' => 'HAIR',
        'slug' => 'hair',
       ]);

       $body = Category::create([
        'name' => 'BODY',
        'slug' => 'body',
       ]);

       $men = Category::create([
        'name' => 'MEN',
        'slug' => 'men',
       ]);

       $women = Category::create([
        'name' => 'WOMEN',
        'slug' => 'women',
       ]);


       Product::factory(4)->create([
        'category_id' => $parfums->id,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(2)->create([
        'category_id' => $parfums->id,
        'inStock' => false,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(4)->create([
        'category_id' => $makeup->id,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(2)->create([
        'category_id' => $makeup->id,
        'inStock' => false,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(4)->create([
        'category_id' => $skincare->id,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(2)->create([
        'category_id' => $skincare->id,
        'inStock' => false,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(4)->create([
        'category_id' => $hair->id,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(2)->create([
        'category_id' => $hair->id,
        'inStock' => false,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(4)->create([
        'category_id' => $body->id,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(2)->create([
        'category_id' => $body->id,
        'inStock' => false,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(4)->create([
        'category_id' => $men->id,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(2)->create([
        'category_id' => $men->id,
        'inStock' => false,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(4)->create([
        'category_id' => $women->id,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);

       Product::factory(2)->create([
        'category_id' => $women->id,
        'inStock' => false,
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/640px-Image_created_with_a_mobile_phone.png'
       ]);
    }
}
