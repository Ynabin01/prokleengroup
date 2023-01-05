 <div class="branch-address">
    <div class="container">

        <div class="row">

            <div class="address-slider">

                <div class="item">
                    @if (isset($partners))
                        @foreach ($partners as $partner)
                            <div class="wrapper ourClient_img">
                                <img src="{{ $partner->banner_image }}" alt="">
                            </div> 
                            @endforeach
                            @endif
                </div>

            </div> 

        </div>

    </div>
</div>   

