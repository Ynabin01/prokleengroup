<div id="carouselExampleIndicators" class="carousel slide">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      
            @foreach ($sliders as $s)
                <div class="carousel-item  video_slider @if($loop->iteration == 1) active @endif">
                    @if (isset($s->banner_image))
                        <img src="{{ $s->banner_image }}" alt="" style="width: 100%">
                    @else
                        <video class="video-slide"
                            src="@if ($s->main_attachment) /uploads/main_attachment/{{ $s->main_attachment }}@else /website/video/video-1.mp4 @endif "
                            autoplay muted loop></video>
                    @endif
                    <div class="slider_title">
                        <h2> {{ $s->caption }} </h2>
                    </div>
                </div>
            @endforeach
     
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
