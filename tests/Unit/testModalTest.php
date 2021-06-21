<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class testModalTest extends TestCase
{
    //Refresh database to work with new data everytime test runs
    use DatabaseTransactions;

    //PHPUNit with Migrations leaves the tables untouched
    //use DatabaseMigrations;

    /**
     * A basic unit test example.
     * @test
     * 
     * @return void
     */
    public function test_user_has_full_name_attribute()
    {
        $user = User::create(
            [
                'firstname' => 'Allan',
                'lastname' => 'Ochan',
                'email' => 'allanochan@yahoo.com',
                'password' => ''
            ]
        );

        $this->assertEquals('Allan', $user->fullname);
    }
}
