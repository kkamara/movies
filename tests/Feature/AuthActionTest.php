<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\MessageBag;
use Tests\TestCase;

class AuthActionTest extends TestCase
{
    public function test_a_login_view_can_be_rendered(): void
    {
        $res = $this->get('/');
 
        $res->assertStatus(200);
    }
}