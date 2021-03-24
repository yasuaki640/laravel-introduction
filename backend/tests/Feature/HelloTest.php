<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
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
}
