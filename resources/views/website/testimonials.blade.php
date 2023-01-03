<div class="testimonial-section section-spacing">
    <div class="overlay">
        <div class="container">
            <div class="theme-title-one">
                <h2>Testimonials</h2>
            </div> <!-- /.theme-title-one -->
            <div class="wrapper">
                <div class="bg">
                    <div class="testimonial-slider">
                        @if (isset($testimonial))
                            @foreach ($testimonial as $test)
                                <div class="item">
                                    <p>{{ $test->long_content }}</p>
                                    <div class="name">
                                        <h6>{{ $test->caption }}</h6>
                                        <span>{{ $test->short_content }}</span>
                                    </div> <!-- /.name -->
                                </div> <!-- /.item -->
                            @endforeach
                        @endif
                    </div> <!-- /.testimonial-slider -->
                </div> <!-- /.bg -->
            </div> <!-- /.wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /.overlay -->
</div> <!-- /.testimonial-section -->
