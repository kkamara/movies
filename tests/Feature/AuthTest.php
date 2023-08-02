<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    public function test_a_login_view_can_be_rendered(): void
    {
        $view = $this->view('auth.login', ['title' => 'Login or Signup']);
 
        $view->assertSee('Login or Signup');
    }
}
