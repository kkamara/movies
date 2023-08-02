<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\MessageBag;
use Tests\TestCase;

class AuthTest extends TestCase
{
    public function test_a_login_view_can_be_rendered(): void
    {
        $title = 'Login or Signup';
        $view = $this->view('auth.login', compact('title'));
 
        $view->assertSee($title);
    }
    
    public function test_login_email_view_validation(): void
    {
        $title = 'Login or Signup';
        $message = 'The email field is required.';
        
        $errors = new MessageBag();
        $errors->add('email', $message);

        $view = $this->withViewErrors($errors->toArray(), 'login')
            ->view('auth.login', compact('title'));
         
        $view->assertSee($message);
    }
    
    public function test_login_password_view_validation(): void
    {
        $title = 'Login or Signup';
        $message = 'The password field is required.';
        
        $errors = new MessageBag();
        $errors->add('password', $message);

        $view = $this->withViewErrors($errors->toArray(), 'login')
            ->view('auth.login', compact('title'));
         
        $view->assertSee($message);
    }
}