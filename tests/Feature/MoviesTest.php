<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MoviesTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_home_view_can_be_rendered(): void
    {
        $title = 'Home';
        $view = $this->view('home', compact('title'));
 
        $view->assertSee($title);
    }

    public function test_a_movie_response(): void
    {
        $movies = (new Movie)->searchApi('Avengers');
        if (false === $movies) {
            $this->fail('Movie::searchApi returns false');
        }
        $movies = json_decode(json_encode($movies), true);
        $this->assertArrayHasKey('Search', $movies);
    }

    public function test_a_movie_search_action(): void
    {
        $this->seed();

        $user = User::where('email', 'admin@example.com')->first();
        Auth::login($user);

        $res = $this->post('/movies/search', ['query' => 'Avengers']);
        $res->assertStatus(200);

        $movies = (new Movie)->searchApi('Avengers');
        if (false === $movies) {
            $this->fail('Movie::searchApi returns false');
        }
        $movies = json_decode(json_encode($movies), true);

        $res->assertSee($movies['Search'][0]['Title']);
    }
}
