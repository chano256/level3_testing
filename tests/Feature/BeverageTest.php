<?php

namespace Tests\Feature;

use App\Beverage;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BeverageTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     * @test
     *
     * @return void
     */
    public function a_user_can_visit_beverages_page()
    {
        $beverage = factory(Beverage::class)->create();

        $response = $this->get('/beverage');

        $response->assertSee($beverage->name);

        $response->assertStatus(200);
    }
}
