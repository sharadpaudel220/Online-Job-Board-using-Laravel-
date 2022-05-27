<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\PseudoTypes\True_;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(5,7));
        $datetime = $this->faker->dateTimeBetween(startDate:'-1 month', endDate:'now');

        $content = '';
        for($i=0; $i<5; $i++){
            $content .= '<p class= "mb-4">' .$this->faker->sentences(rand(5,10), asText:true).'</p>';
        }

        return [
            'user_id' => rand(1,10),
            'title' => $title,
            'slug' => Str::slug($title) . '-' . rand(1111, 9999) , 
            'company' => $this->faker->company,
            'location' => $this->faker->country,
            'logo' => basename($this->faker->image(storage_path('app/public'))),
            'content' => $content,
            'apply_link' => $this->faker->url,
            'created_at' => $datetime,
            'updated_at' => $datetime
        ];
    }
}
