<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DatabaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDatabaseHas()
    {
        $this->assertDatabaseHas('users', [
           'email' => 'herman42@example.org'
        ]);
    }
    public function testDatabaseMissing()
    {
        $this->assertDatabaseMissing('posts', [
            'title' => 'Hello World'
        ]);
    }
}
