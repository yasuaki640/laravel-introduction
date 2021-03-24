<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_hello()
    {
        $this->assertTrue(true);

        $this->assertEmpty([]);

        $msg = "hello";
        $this->assertEquals('hello', $msg);

        try {
            $n = random_int(0, 100);
            $this->assertLessThan(100, $n);
        } catch (\Exception $e) {
            return;
        }
    }

    public function test_response()
    {
        $user = Factory::factoryForModel(User::class)->create();
        $response = $this->actingAs($user)->get('/hello');
        $response->assertStatus(200);

        $response = $this->get('/not/exist/route');
        $response->assertStatus(404);
    }
}
