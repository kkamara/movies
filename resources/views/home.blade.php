@extends('layouts.main')

@section('styles')
    @vite('resources/css/home.css')
@stop

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>{{ config('app.name') }}</h1>
                    <h2>Search for a movie.</h2>
                    @if(Auth::check())
                    <form 
                        action='{{ route('searchMovies') }}'
                        method='POST' 
                        action class="d-flex"
                    >
                        @csrf
                        <div class="form-group">
                            <input 
                                type="text"
                                class='form-control @if(isset($errors) && $errors->count() && strlen($errors->first('query'))) is-invalid @endif'
                                name='query'
                                value="{{ old('query') }}"
                                placeholder="Search..."
                            />
                            @if(isset($errors) && $errors->count() && strlen($errors->first('query')))
                                <div id="validationLastNameFeedback">
                                    {{ $errors->first('query') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group movies-submit-btn-container">
                            <input 
                                class='scrollto form-control btn btn-success'
                                type="submit" 
                                value="Search Movies"
                            />
                        </div>
                    {{-- <a href="javascript:;" class="btn-get-started scrollto">Get Started</a> --}}
                    {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                    </form>
                    @endif
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('images/movie-ge82d2f716_1280.jpg') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    @if (Auth::check())
    <main id="main">
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row">
                    @if(isset($movies) && !isset($movies->Error))
                    {{-- {{dd($movies)}} --}}
                        @foreach($movies->Search as $movie)
                        <div class="col-lg-4 col-md-6">
                            <div class="icon-box">
                                <img 
                                    class='img-responsive poster'
                                    src="{{ $movie->Poster }}" 
                                    alt="{{ $movie->Title }}"
                                />
                                <div class="icon"><i class="bi bi-laptop"></i></div>
                                <h4 class="title"><a href="javascript:;">
                                    {{ $movie->Title }}
                                </a></h4>
                                <p class="description">
                                    <span class="year">
                                        Year: {{ $movie->Year }}
                                    </span>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    @elseif(isset($movies) && isset($movies->Error))
                        <p class='text-center'>
                            {{ $movies->Error }}
                        </p>
                        <p class='text-center'>
                            There are no results for {{ old('query') }}.
                        </p>
                    @endif
                </div>                    

            </div>
        </section><!-- End Featured Services Section -->
    </main>
    @endif

@stop