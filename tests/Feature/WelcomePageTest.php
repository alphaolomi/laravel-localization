<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function testWelcomeEn()
    {
        // Testing code
        $response = $this->get('/');

        $response->assertSee("Wellcome to our");
        // $response->assertStatus(200);
        // $this->assertTrue(true);
    }

    public function testWelcomeSw()
    {

        $this->refreshApplicationWithLocale('sw');

        // Testing code
        $response = $this->get('/sw');

        $response->assertSee("Karibu");
        
    }
}
