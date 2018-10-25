<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAssertInternalType()
    {
        $user = User::inRandomOrder()->first();
        $this->assertInternalType('int', $user->id);
    }
    public function testAssertInstanceOf()
    {
        //$user = User::inRandomOrder()->first();
        $user = User::orderBy('name')->first();
        $this->assertInstanceOf('App\User', $user);
    }
}
