<?php

namespace Tests\Unit;

use App\Beverage;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Contracts\Auth\Authenticatable;
use PHPUnit\Framework\TestCase;
//use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BeverageTest extends TestCase
{
    use DatabaseMigrations;

    private $beverage;

    public function setup()
    {
        parent::setup();

        $this->beverage = factory(Beverage::class)->make();
    }

    /**
     * A basic unit test example.
     * @test
     * 
     * @return void
     */
    public function testExample()
    {
        // create beverage using factory

        // get name

        // assert
        $this.assertTrue(true);
    }

    /**
     * A basic unit test example.
     * @test
     * 
     * @return void
     */
    public function test_that_beverage_has_a_name()
    {
        // create beverage using factory

        // get name

        // assert
        $this.assertNotEmpty($this->beverage->name);
    }

    /**
     * A basic unit test example.
     * @test
     * 
     * @return void
     */
    public function test_that_beverage_has_a_type()
    {
        // assert
        $this.assertNotEmpty($this->beverage->type);
    }

    /**
     * A basic unit test example.
     * @test
     * 
     * @return void
     */
    public function test_a_minor_cannot_buy_alchohol()
    {
        // alchoholic beverage
        $beverage = factory(Beverage::class)->make(
            [
                'type' => 'alcoholic'
            ]
        );

        // minor user
        $beverage = factory(User::class)->make(
            [
                'age' => '17'
            ]
        );

        // logged_in
        $this->actingAs($user);

        // expect exception before we run to expect it
        $this->expectException(MinorCannotBuyAlcoholicBeverageException::class);

        // buy beverage
        $beverage->buy();
    }

    
}
