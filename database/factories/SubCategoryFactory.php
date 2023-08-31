<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sub_category_name=$this->faker->unique()->words($nb=2,$asText=true);
        $sub_slug = Str::slug($sub_category_name,'-');
        $cat_id = $this->faker->numberBetween(1,5);

        return [
            //
            'name'=> $sub_category_name,
            'slug'=> $sub_slug,
            'category_id'=> $cat_id
        ];
    }
}
