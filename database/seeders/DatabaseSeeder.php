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
        \App\Models\Category::factory(5)->create();
        \App\Models\Product::factory(20)->create();
    }
}
