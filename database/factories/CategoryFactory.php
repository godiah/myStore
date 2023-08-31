<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category_name=$this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($category_name,'-');
        $sup_cat_id = $this->faker->numberBetween(1,3);


        return [
            //
            'name'=> $category_name,
            'slug'=> $slug,
            'super_category_id'=>$sup_cat_id
        ];
    }
}
