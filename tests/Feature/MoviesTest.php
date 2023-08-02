<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MoviesTest extends TestCase
{
    public function test_a_home_view_can_be_rendered(): void
    {
        $title = 'Home';
        $view = $this->view('home', compact('title'));
 
        $view->assertSee($title);
    }
}
