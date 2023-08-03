<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    protected ?Movie $movie = null;

    public function __construct() {
        $this->middleware('auth')->only('searchMovies');
        $this->movie = new Movie;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Home';
        return view('home', compact('title'));
    }

    public function searchMovies(Request $request)
    {
        $title = 'Home';
        $validator = Validator::make($request->all(), [
            'query' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return back()->withInput()
                ->withErrors($validator);
        }

        $query = htmlspecialchars($request->get('query'));
        $movies = $this->movie->searchApi($query);
        return view('home', compact('title', 'movies'));
    }
}
