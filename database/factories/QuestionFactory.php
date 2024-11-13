<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition()
    {
        $dimensi = [
            'Ekstrovert (E) - Introvert (I)',
            'Sensing (S) - Intuitive (N)',
            'Thinking (T)- Feeling (F)',
            'Judging (J) - Perceiving (P)'
        ];

        return [
            'pertanyaan' => $this->faker->sentence() . '?',
            'dimensi' => $this->faker->randomElement($dimensi),
        ];
    }
}