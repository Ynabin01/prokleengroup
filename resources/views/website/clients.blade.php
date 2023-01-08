<div class="branch-address">
    <div class="container">
        <div class="row">
            <div class="wrapper">
                <div class="bg">

                    <div class="testimonial-sliderr">
                        @if (isset($partners))
                            @foreach ($partners as $partner)
                                <div class="item">
                                    <div class="wrapper ourClient_img">
                                        <img src="{{ $partner->banner_image }}" alt="">
                                    </div> <!-- /.wrapper -->
                                </div> <!-- /.item -->
                            @endforeach
                        @endif

                    </div> <!-- /.testimonial-slider -->
                </div> <!-- /.bg -->
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.branch-address -->
