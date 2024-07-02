<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Contact::class;

    public function definition()
    {
        return [
            'first_name'=>$this->faker->firstName,
            'last_name'=>$this->faker->lastName,
            'category_id'=>$this->faker->numberBetween(1,5),
            'tel'=>$this->faker->phoneNumber(),
            'gender' =>$this->faker->numberBetween(1,3),
            'email'=>$this->faker->safeEmail(),
            'address'=>$this->faker->address(),
            'detail'=>$this->faker->numberBetween(1,5),

        ];
    }
}
