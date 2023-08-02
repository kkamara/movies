<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterActionTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_register_action_can_be_done(): void
    {
        $email = 'admin@example.com';
        $res = $this->post('/auth/register', [
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => $email,
            'email_confirmation' => $email,
            'password' => 'secret',
            'password_confirmation' => 'secret',
        ]);
 
        $res->assertStatus(302)
            ->assertRedirect($uri='/');
        
        $this->assertDatabaseHas('users', [
            'email' => $email,
        ]);
    }
}