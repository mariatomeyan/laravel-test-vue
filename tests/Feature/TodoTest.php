<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\ToDo;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoTest extends TestCase
{
    use RefreshDatabase;

    private $route = '/todos';
    private $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_todo()
    {
        $category = Category::factory()->create();
        $todo = ToDo::factory()->make();

        $data = [
            'title' => $todo->title,
            'description' => $todo->description,
            'is_done' => $todo->is_done,
            'is_public' => $todo->is_public,
            'category_id' => $category->id
        ];

        $response = $this->actingAs($this->user)->json('POST',
            $this->route,
            $data
        );
        
        $response->assertJsonFragment(array_merge($data, ['user_id' => $this->user->id]));
        $response->assertStatus(201);

    }
}
