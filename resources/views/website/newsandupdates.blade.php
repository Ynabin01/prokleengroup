<div class="service-style-one section-spacing">
    <div class="container">
        <div class="theme-title-one">
            <h2>News & Update</h2>
            {{-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers
            </p> --}}
        </div> <!-- /.theme-title-one -->
        <div class="wrapper">
            <div class="row">
                @if (isset($newsandupdates))
                        @foreach ($newsandupdates as $news)
                <div class="col-xl-4 col-md-6 col-12">
                    
                            <div class="single-service">
                                <div class="img-box"><img src="{{ $news->banner_image ?? '' }}" alt=""></div>
                                <div class="text">
                                    <h5><a href="news&update.html">{{ $news->caption ?? '' }}</a></h5>
                                    <p>{{ $news->short_content ?? '' }}</p>
                                    {{-- <p>{{$news->childs()->first()->nav_name}}</p> --}}
                                    @if (isset($news->childs()->first()->id))
                                    <a href="{{ route('normal', ['slug'=>$news->childs()->first()->id]) }}" class="read-more">READ MORE <i class="fa fa-angle-right"
                                            aria-hidden="true"></i></a>                                        
                                    @endif
                                </div> <!-- /.text -->
                            </div> <!-- /.single-service -->
                       
                </div> <!-- /.col- -->
                @endforeach
                @endif
            </div> <!-- /.row -->
        </div> <!-- /.wrapper -->

    </div> <!-- /.container -->
</div>

<!-- /.service-style-one -->
