<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            // I/E (Introversion vs. Extroversion)
            ['pertanyaan' => 'I prefer spending time alone to recharge my energy.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I enjoy attending social events and meeting new people.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Small talk drains me quickly.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I find it easy to start conversations with strangers.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I often need quiet time after a busy day.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I thrive in environments with constant interaction.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I enjoy deep, one-on-one conversations.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I feel energized after being in a crowd.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I prefer working in a quiet environment.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I enjoy being the center of attention.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],

            // S/N (Sensing vs. Intuition)
            ['pertanyaan' => 'I rely on practical details rather than abstract ideas.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I often see patterns and connections others might miss.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I trust facts and data over speculation.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I enjoy brainstorming possibilities for the future.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I focus on what is happening now rather than future possibilities.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I am drawn to theoretical concepts.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I like to follow established procedures and guidelines.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I often think about what "could be" rather than what "is."', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I prefer working with concrete details.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I enjoy imagining hypothetical scenarios.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],

            // T/F (Thinking vs. Feeling)
            ['pertanyaan' => 'I make decisions based on logic rather than emotions.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I prioritize harmony over efficiency in group settings.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I am comfortable with constructive criticism.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I avoid conflict to maintain relationships.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I value fairness over personal feelings.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I often consider how decisions impact others’ emotions.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I approach problems with an analytical mindset.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I am deeply affected by others’ emotional states.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I prefer objective feedback over emotional reassurance.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I prioritize people’s needs when making decisions.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],

            // J/P (Judging vs. Perceiving)
            ['pertanyaan' => 'I like to plan my day in advance.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I prefer to keep my options open.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I feel stressed when plans change suddenly.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I enjoy spontaneous activities.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I am uncomfortable with ambiguity and uncertainty.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I adapt quickly to unexpected situations.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I like to stick to a schedule.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I often procrastinate and work best under pressure.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I value structure and order in my work environment.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'I enjoy exploring new paths without a set goal.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('questions')->insert($questions);
    }
}
