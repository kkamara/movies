<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\MessageBag;
use Tests\TestCase;

class AuthTest extends TestCase
{
    protected string $title = 'Login or Signup';

    public function test_a_login_view_can_be_rendered(): void
    {
        $view = $this->view('auth.login', ['title' => $this->title]);
 
        $view->assertSee($this->title);
    }
    
    public function test_login_email_view_validation(): void
    {
        $message = 'The email field is required.';
        
        $errors = new MessageBag();
        $errors->add('email', $message);

        $view = $this->withViewErrors($errors->toArray(), 'login')
            ->view('auth.login', ['title' => $this->title]);
         
        $view->assertSee($message);
    }
    
    public function test_login_password_view_validation(): void
    {
        $message = 'The password field is required.';
        
        $errors = new MessageBag();
        $errors->add('password', $message);

        $view = $this->withViewErrors($errors->toArray(), 'login')
            ->view('auth.login', ['title' => $this->title]);
         
        $view->assertSee($message);
    }
    
    public function test_register_first_name_view_validation(): void
    {
        $message = 'The first name field is required.';
        
        $errors = new MessageBag();
        $errors->add('first_name', $message);

        $view = $this->withViewErrors($errors->toArray(), 'register')
            ->view('auth.login', ['title' => $this->title]);
         
        $view->assertSee($message);
    }
    
    public function test_register_last_name_view_validation(): void
    {
        $message = 'The last name field is required.';
        
        $errors = new MessageBag();
        $errors->add('last_name', $message);

        $view = $this->withViewErrors($errors->toArray(), 'register')
            ->view('auth.login', ['title' => $this->title]);
         
        $view->assertSee($message);
    }
    
    public function test_register_email_view_validation(): void
    {
        $message = 'The email field is required.';
        
        $errors = new MessageBag();
        $errors->add('email', $message);

        $view = $this->withViewErrors($errors->toArray(), 'register')
            ->view('auth.login', ['title' => $this->title]);
         
        $view->assertSee($message);
    }
    
    public function test_register_email_confirmed_view_validation(): void
    {
        $message = 'The email confirmation field is required.';
        
        $errors = new MessageBag();
        $errors->add('email_confirmation', $message);

        $view = $this->withViewErrors($errors->toArray(), 'register')
            ->view('auth.login', ['title' => $this->title]);
         
        $view->assertSee($message);
    }
    
    public function test_register_password_view_validation(): void
    {
        $message = 'The password field is required.';
        
        $errors = new MessageBag();
        $errors->add('password', $message);

        $view = $this->withViewErrors($errors->toArray(), 'register')
            ->view('auth.login', ['title' => $this->title]);
         
        $view->assertSee($message);
    }
    
    public function test_register_password_confirmed_view_validation(): void
    {
        $message = 'The password confirmation field is required.';
        
        $errors = new MessageBag();
        $errors->add('password_confirmation', $message);

        $view = $this->withViewErrors($errors->toArray(), 'register')
            ->view('auth.login', ['title' => $this->title]);
         
        $view->assertSee($message);
    }
}