@extends('welcome')
@section('content')
    <section>
        <h2>Welcome to wolkite town sport commission</h2>

        <p>Your brief and engaging website description goes here.</p>
        <a href="#contact" class="cta-button" id="scrollToContact">Contact Now</a>


    </section>

    <div class="container">
        <h2 class="text-center">Today's much</h2>
        <div class="row features">
            <div class="col-md-4 feature">
                <h3>Football</h3>
                <p>Description of Feature 1.</p>
            </div>
            <div class="col-md-4 feature">
                <h3>Volleyball</h3>
                <p>Description of Feature 2.</p>
            </div>
            <div class="col-md-4 feature">
                <h3>Basketball</h3>
                <p>Description of Feature 3.</p>
            </div>
        </div>
    </div>
    <section>
        <h2>Testimonials</h2>
        <div class="testimonial">
            <p>"Great experience with Your Website. The service is fantastic!"</p>
            <p>- John Doe, Happy Customer</p>
        </div>
    </section>


    @include('common.contact');
@endsection
