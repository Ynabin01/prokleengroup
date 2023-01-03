<div class="about-compnay-two section-spacing">
    <div class="overlay">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-7 col-12 text">
                    <div class="theme-title-one">
                        <h2>{{ $about->caption ?? '' }}</h2>
                    </div> <!-- /.theme-title-one -->
                    <p>
                        @php echo $about->short_content; @endphp
                    </p>
                    <a href="/about-one">Read More</a>
                </div> <!-- /.col- -->
                <div class="col-lg-5 col-12">
                    <div class="quote-form">
                        <img src=" {{ $about->banner_image ?? '' }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
