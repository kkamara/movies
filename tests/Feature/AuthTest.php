<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    public function test_a_login_view_can_be_rendered(): void
    {
        $title = 'Login or Signup';
        $view = $this->view('auth.login', compact('title'));
 
        $view->assertSee($title);
    }
}
