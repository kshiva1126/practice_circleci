<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegisterTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function ユーザ登録できる()
    {
        $postData = [
            'name' => 'users',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $this
            ->post(route('register'), $postData)
            ->assertStatus(302);

        $this->assertDatabaseHas('users', ['email' => $postData['email']]);
    }
}
