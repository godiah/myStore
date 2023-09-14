<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(CategorySeeder::class);

        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory(1)->create([
            'name' => 'mystore admin',
            'email' => 'mystoreadmin@mail.com',
            'utype'=>'ADM',
            'password'=>bcrypt('mystoreadmin'),
        ]);
        \App\Models\User::factory(1)->create([
            'name' => 'Lewys',
            'email' => 'mystorelewys@mail.com',
            'utype'=>'USR',
            'password'=>bcrypt('mystorelewys'),
        ]);
        \App\Models\SuperCategory::factory(4)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\SubCategory::factory(30)->create();
        \App\Models\Product::factory(50)->create();
    }
}
