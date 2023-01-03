<div class="theme-counter section-spacing">
    <div class="container">
        <div class="bg">
            <h6>Company Success</h6>
            <h2>Some Fun Facts About Our Prokleen</h2>
            <div class="cunter-wrapper">
                <div class="row">
                    @if (isset($statistics))
                        @foreach ($statistics as $statistic)
                            <div class="col-md-3 col-6">
                                <div class="single-counter-box">
                                    <div class="number"><span class="timer" data-from="0" data-to="30"
                                            data-speed="1200"
                                            data-refresh-interval="5">{{ $statistic->caption }}</span>{{ $statistic->short_content }}
                                    </div>
                                    <p>{{ $statistic->long_content }}</p>
                                </div> <!-- /.single-counter-box -->
                            </div> <!-- /.col- -->
                        @endforeach
                    @endif
                </div> <!-- /.row -->
            </div> <!-- /.cunter-wrapper -->
        </div> <!-- /.bg -->
    </div> <!-- /.container -->
</div> <!-- /.theme-counter -->
