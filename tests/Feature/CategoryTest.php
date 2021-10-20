<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    private $route = '/category';
    private $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }
    /**
     * create a category
     *
     * @return void
     */
    public function test_create_category()
    {
      $category = 'new category';

      $response = $this->actingAs($this->user)->json('POST',
            $this->route,
            [
                'label'=> $category
            ]);

      $response->assertJsonFragment(['value' => 'new_category']);
      $response->assertStatus(201);

    }

    /**
     * delete a category
     * @return void
     */
    public function test_delete_category()
    {
        $category = Category::factory()->create();
        $path = $this->route.'/'.$category->id;

        $response = $this->actingAs($this->user)->json('DELETE',
            $path
        );

        $response->assertStatus(200);
    }
}
