@extends('layouts.app')

@section('content')
<!-- Contact Hero -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Get in Touch</h1>
        <p class="lead text-muted">Have a question, feedback or want to collaborate? We’d love to hear from you.</p>
    </div>
</section>

<!-- Contact Info & Form -->
<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Info column -->
            <div class="col-lg-5">
                <h2 class="fw-bold mb-4">Contact Information</h2>
                <p class="mb-4 text-muted">Reach out via any of the following methods and we'll get back to you as soon as possible.</p>
                <ul class="list-unstyled mb-4">
                    <li class="mb-3"><i class="bi bi-envelope-fill me-2"></i><a href="mailto:support@example.com" class="text-decoration-none">support@example.com</a></li>
                    <li class="mb-3"><i class="bi bi-telephone-fill me-2"></i>+1 (555) 123-4567</li>
                    <li class="mb-3"><i class="bi bi-geo-alt-fill me-2"></i>123 Developer Rd, Code City, PX 90210</li>
                </ul>
                <div class="mb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18...(placeholder)" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <h5 class="fw-bold mb-3">Follow Us</h5>
                <div class="d-flex gap-3">
                    <a href="#" class="text-muted"><i class="bi bi-twitter fs-4"></i></a>
                    <a href="#" class="text-muted"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="#" class="text-muted"><i class="bi bi-linkedin fs-4"></i></a>
                    <a href="#" class="text-muted"><i class="bi bi-instagram fs-4"></i></a>
                </div>
            </div>
            <!-- Form column -->
            <div class="col-lg-7">
                <h2 class="fw-bold mb-4">Send us a Message</h2>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                        @error('name')<div class="text-danger small">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                        @error('email')<div class="text-danger small">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}" required>
                        @error('subject')<div class="text-danger small">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" id="message" rows="5" class="form-control" required>{{ old('message') }}</textarea>
                        @error('message')<div class="text-danger small">{{ $message }}</div>@enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
