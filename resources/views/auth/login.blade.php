@extends('layouts.main')

@section('styles')
    @vite('resources/css/login.css')
@stop

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $title }}</h2>
                <ol>    
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>{{ $title }}</li>
                </ol>
            </div>

            </div>
        </section><!-- End Breadcrumbs -->
{{-- {{dd($errors->login->count(), $errors->login->first('email'), strlen($errors->login->first('email')))}} --}}
        <section class="inner-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class='text-center'>Login</h3>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input 
                                    type="text"
                                    name='email'
                                    class='form-control @if(isset($errors) && $errors->login->count() && strlen($errors->login->first('email'))) is-invalid @endif'
                                    placeholder="Email address"
                                />
                                @if(isset($errors) && $errors->login->count() && strlen($errors->login->first('email')))
                                    <div id="validationEmailFeedback">
                                        {{ $errors->login->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input 
                                    type="text"
                                    name='password'
                                    class='form-control @if(isset($errors) && $errors->login->count() && strlen($errors->login->first('password'))) is-invalid @endif'
                                    placeholder="Password"
                                />
                                @if(isset($errors) && $errors->login->count() && strlen($errors->login->first('password')))
                                    <div id="validationEmailFeedback">
                                        {{ $errors->login->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="login-btn-container">
                                <input 
                                    class='btn btn-md btn-success'
                                    type="submit" 
                                    value="Login"
                                />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h3 class='text-center'>Signup</h3>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@stop