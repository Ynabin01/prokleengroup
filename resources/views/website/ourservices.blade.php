<!-- our services -->
<div class="services-compnay-two section-spacing">
    <div class="overlay">
        <div class="container">
            @if (isset($ourservices))
                @foreach ($ourservices as $serv)
                    <div class="row no-gutters">
                        <div class="col-lg-5 col-12">
                            <div class="quote-form">
                                <img src="{{ $serv->banner_image ?? '' }}" alt="">
                            </div>
                        </div> 
                        <div class="col-lg-7 col-12  ">
                            <div class="homeServicesData">

                                <div class="theme-title-one">
                                    <h2>{{ $serv->caption ?? '' }}</h2>
                                </div> <!-- /.theme-title-one -->
                                <p>
                                    @php echo $serv->short_content; @endphp
                                </p>
                                <a href="/service " class="mt-3">View Services</a>
                            </div> <!-- /.col- -->
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <hr>
</div>
</div>

<!-- /.our-case -->
