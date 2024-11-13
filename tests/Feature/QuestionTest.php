<?php

namespace Tests\Feature;

use App\Models\Question;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class QuestionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_questions()
    {
        // Arrange
        Question::factory()->count(5)->create();

        // Act
        $response = $this->withoutMiddleware()->get(route('question.index'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewHas('questions');
    }

    /** @test */
    public function it_can_store_a_question()
    {
        // Arrange
        $data = [
            'pertanyaan' => 'Apa perbedaan antara Ekstrovert dan Introvert?',
            'dimensi' => 'Ekstrovert (E) - Introvert (I)',
        ];

        // Act
        $response = $this->withoutMiddleware()->post(route('question.store'), $data);

        // Assert
        $response->assertRedirect(route('question.index'));
        $response->assertSessionHas('success', 'Pertanyaan berhasil ditambahkan.');
        $this->assertDatabaseHas('questions', $data);
    }

    /** @test */
    public function it_can_update_a_question()
    {
        // Arrange
        $question = Question::factory()->create();
        $data = [
            'pertanyaan' => 'Apa yang dimaksud dengan Sensing dan Intuitive?',
            'dimensi' => 'Sensing (S) - Intuitive (N)',
        ];

        // Act
        $response = $this->withoutMiddleware()->put(route('question.update', $question->id), $data);

        // Assert
        $response->assertRedirect(route('question.index'));
        $response->assertSessionHas('success', 'Pertanyaan berhasil diperbarui.');
        $this->assertDatabaseHas('questions', $data);
    }

    /** @test */
    public function it_can_delete_a_question()
    {
        // Arrange
        $question = Question::factory()->create();

        // Act
        $response = $this->withoutMiddleware()->delete(route('question.destroy', $question->id));

        // Assert
        $response->assertRedirect(route('question.index'));
        $response->assertSessionHas('success', 'Pertanyaan berhasil dihapus.');
        $this->assertDatabaseMissing('questions', ['id' => $question->id]);
    }

    /** @test */
    public function it_requires_pertanyaan_and_dimensi_to_store()
    {
        // Arrange
        $data = [
            'pertanyaan' => '',
            'dimensi' => '',
        ];

        // Act
        $response = $this->withoutMiddleware()->post(route('question.store'), $data);

        // Assert
        $response->assertSessionHasErrors(['pertanyaan', 'dimensi']);
    }

    /** @test */
    public function it_requires_pertanyaan_and_dimensi_to_update()
    {
        // Arrange
        $question = Question::factory()->create();
        $data = [
            'pertanyaan' => '',
            'dimensi' => '',
        ];

        // Act
        $response = $this->withoutMiddleware()->put(route('question.update', $question->id), $data);

        // Assert
        $response->assertSessionHasErrors(['pertanyaan', 'dimensi']);
    }
}
