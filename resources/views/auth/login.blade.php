@extends('layouts.main')

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

        <section class="inner-page">
            <div class="container">
            <p>
                Example inner page template
            </p>
            </div>
        </section>

    </main><!-- End #main -->

@stop