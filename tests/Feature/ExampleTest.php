<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

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

        $response->assertSeeInOrder(
            [
                'Laravel',
                "Docs"
            ]
        );
    }

    public function testReturnAboutRoute()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}
