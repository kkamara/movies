<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Movie;

class MoviesTest extends TestCase
{
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
