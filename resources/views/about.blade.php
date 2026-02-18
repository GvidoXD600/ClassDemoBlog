@extends('layouts.app')

@section('content')
<!-- Hero section -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">About {{ config('app.name') }}</h1>
        <p class="lead text-muted">Learn more about our mission, team, and the story behind the blog.</p>
    </div>
</section>

<!-- Mission / vision -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold">Our Mission</h2>
                <p class="text-muted">We are committed to providing a clean, modern platform where developers can share tutorials, stories, and insights about server-side development. Our goal is to foster a community of learners and contributors who are passionate about building web applications with Laravel.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/mission.jpg') }}" alt="Our mission" class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </div>
</section>

<!-- Team section -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Meet the Team</h2>
        <div class="row">
            <!-- Example team member card -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/jane.jpg') }}" class="card-img-top" alt="Jane Doe">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jane Doe</h5>
                        <p class="card-text text-muted">Lead Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/john.jpg') }}" class="card-img-top" alt="John Smith">
                    <div class="card-body text-center">
                        <h5 class="card-title">John Smith</h5>
                        <p class="card-text text-muted">Content Strategist</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/alice.jpg') }}" class="card-img-top" alt="Alice Johnson">
                    <div class="card-body text-center">
                        <h5 class="card-title">Alice Johnson</h5>
                        <p class="card-text text-muted">Community Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Our Work in Pictures</h2>
        <div class="row g-3">
            @foreach (range(1,6) as $i)
                <div class="col-md-4">
                    <img src="{{ asset('images/gallery'.$i.'.jpg') }}" class="img-fluid rounded shadow-sm" alt="Gallery image {{ $i }}">
                </div>
            @endforeach
        </div>
        <p class="text-muted text-center mt-4">Photos courtesy of the team. Replace with your own images as desired.</p>
    </div>
</section>

@endsection
