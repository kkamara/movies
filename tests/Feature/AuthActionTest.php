<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\MessageBag;
use Tests\TestCase;

class AuthActionTest extends TestCase
{
    public function test_a_login_action_can_be_done(): void
    {
        $res = $this->post('/auth/login', [
            'email' => 'admin@example.com',
            'password' => 'secret',
        ]);
 
        $res->assertStatus(302)
            ->assertRedirect($uri='/');        
    }

    public function test_a_login_action_fails_with_no_email(): void
    {
        $res = $this->post('/auth/login', [
            'email' => '',
            'password' => 'invalidpassword',
        ]);
 
        $res->assertInvalid([
            'login_email' => 'The login email field is required.',
        ], 'login');
    }
}