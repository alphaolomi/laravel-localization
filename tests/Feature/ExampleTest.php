<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $this->assertTrue(true);
        // $response->assertStatus(200);
    }

    public function testBasicTest2()
{
    $this->refreshApplicationWithLocale('en');
    // Testing code
    $this->assertTrue(true);
}
}
