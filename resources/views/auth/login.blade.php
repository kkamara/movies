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
                        <form action="{{ route('loginAction') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input 
                                    type="text"
                                    name='login_email'
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
                                    name='login_password'
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
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input
                                    type="text"
                                    name='register_first_name'
                                    class='form-control @if(isset($errors) && $errors->register->count() && strlen($errors->register->first('first_name'))) is-invalid @endif'
                                    placeholder="First name"
                                />
                                @if(isset($errors) && $errors->register->count() && strlen($errors->register->first('first_name')))
                                    <div id="validationEmailFeedback">
                                        {{ $errors->register->first('first_name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input
                                    type="text"
                                    name='register_last_name'
                                    class='form-control @if(isset($errors) && $errors->register->count() && strlen($errors->register->first('last_name'))) is-invalid @endif'
                                    placeholder="Last name"
                                />
                                @if(isset($errors) && $errors->register->count() && strlen($errors->register->first('last_name')))
                                    <div id="validationEmailFeedback">
                                        {{ $errors->register->first('last_name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input
                                    type="text"
                                    name='register_email'
                                    class='form-control @if(isset($errors) && $errors->register->count() && strlen($errors->register->first('email'))) is-invalid @endif'
                                    placeholder="Email address"
                                />
                                @if(isset($errors) && $errors->register->count() && strlen($errors->register->first('email')))
                                    <div id="validationEmailFeedback">
                                        {{ $errors->register->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">Email confirmation</label>
                                <input
                                    type="text"
                                    name='register_email_confirmation'
                                    class='form-control @if(isset($errors) && $errors->register->count() && strlen($errors->register->first('email_confirmation'))) is-invalid @endif'
                                    placeholder="Email confirmation"
                                />
                                @if(isset($errors) && $errors->register->count() && strlen($errors->register->first('email_confirmation')))
                                    <div id="validationRegisterEmailFeedback">
                                        {{ $errors->register->first('email_confirmation') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input 
                                    type="text"
                                    name='register_password'
                                    class='form-control @if(isset($errors) && $errors->register->count() && strlen($errors->register->first('password'))) is-invalid @endif'
                                    placeholder="Password"
                                />
                                @if(isset($errors) && $errors->register->count() && strlen($errors->register->first('password')))
                                    <div id="validationRegisterPasswordFeedback">
                                        {{ $errors->register->first('password') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="password">Password confirmation</label>
                                <input 
                                    type="text"
                                    name='register_password'
                                    class='form-control @if(isset($errors) && $errors->register->count() && strlen($errors->register->first('password_confirmation'))) is-invalid @endif'
                                    placeholder="Password confirmation"
                                />
                                @if(isset($errors) && $errors->register->count() && strlen($errors->register->first('password_confirmation')))
                                    <div id="validationRegisterPasswordConfirmationFeedback">
                                        {{ $errors->register->first('password_confirmation') }}
                                    </div>
                                @endif
                            </div>
                            <div class="login-btn-container">
                                <input 
                                    class='btn btn-md btn-success'
                                    type="submit" 
                                    value="Register"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

@stop