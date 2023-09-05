<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuperCategory>
 */
class SuperCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('en_US');
        $sup_category_name=$this->faker->unique()->words($nb=2,$asText=true);
        $sup_slug = Str::slug($sup_category_name,'-');

        return [
            //
            'name'=> $sup_category_name,
            'slug'=> $sup_slug
        ];
    }
}
