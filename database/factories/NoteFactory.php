<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->paragraph,
            'color' => $this->faker->name,
            'state' => 'ToDo',
            'priority' => 'Low',
            'limited_at' => $this->faker->dateTime($max = 'now', $timezone = null),
            'file' => 'test.txt',
        ];
    }
}
