<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product_name=$this->faker->unique()->words($nb=3,$asText=true);
        $slug = Str::slug($product_name,'-');
        return [
            //
            'name'=>$product_name,
            'slug'=>$slug,
            'short_description'=>$this->faker->text(100),
            'description'=>$this->faker->text(250),
            'regular_price'=> $this->faker->numberBetween(5000,100000),
            'stock_status'=>'instock',
            'quantity'=>$this->faker->numberBetween(10,50),
            'image'=>$this->faker->numberBetween(1,5),
            'image2'=>$this->faker->numberBetween(1,5),
            'image3'=>$this->faker->numberBetween(1,5),
            'image4'=>$this->faker->numberBetween(1,5),
            'sup_category_id'=>$this->faker->numberBetween(1,4),
            'category_id'=>$this->faker->numberBetween(1,10),
            'sub_category_id'=>$this->faker->numberBetween(1,30)

        ];
    }
}
