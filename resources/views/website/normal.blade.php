@extends('layouts.master')

@section('content')
    <!--
               =============================================
                Theme Inner Banner
               ==============================================
               -->
 
        <div class="theme-inner-banner section-spacing">
            <div class="overlay">
                <div class="container">
                    <h2>Prokleen Services LLC</h2>
                </div> <!-- /.container -->
            </div> <!-- /.overlay -->
        </div> <!-- /.theme-inner-banner -->
     
        <div class="about-compnay-two no-bg section-spacing">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 order-lg-first">
                            <img src="{{ $normal->banner_image }}" alt="" class="left-img">
                        </div>
                        <div class="col-lg-6 col-12 text order-lg-last">
                            <div class="theme-title-one">
                                <h2>@php echo $normal->caption; @endphp</h2>
                            </div> <!-- /.theme-title-one -->
                            <p>@php echo $normal->long_content; @endphp
                            </p>
                        </div> <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.overlay -->
        </div> <!-- /.about-compnay-two -->
   
@endsection
