<div class="our-team section-spacing">
    <div class="container">
        <div class="theme-title-one">
            <h2>Our Team</h2>
            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, laboriosam?
            </p> --}}
        </div> <!-- /.theme-title-one -->

        <div class="wrapper">
            <div class="row">
                @if (isset($ourteam))
                    @foreach ($ourteam as $team)
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="team-member">
                                <div class="image-box">
                                    <img src="{{ $team->banner_image ?? '' }}" alt="">

                                </div> <!-- /.image-box -->
                                <div class="text">
                                    <h6>{{ $team->caption ?? '' }}</h6>
                                    <span>{{ $team->short_content ?? '' }}</span>
                                </div> <!-- /.text -->
                            </div> <!-- /.team-member -->
                        </div> <!-- /.col- -->
                    @endforeach
                @endif
            </div> <!-- /.row -->

        </div> <!-- /.wrapper -->

    </div> <!-- /.container -->
</div> <!-- /.our-team -->
