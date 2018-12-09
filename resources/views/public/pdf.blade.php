@extends('master.public_layout')

@section('title')
        PDF
@endsection

@section('content')

@include('public.partials.header')


<section class="banner innerpage-banner contact-banner">
    <div class="container">
        <h1 data-aos="fade-up" data-aos-duration="1000">Let’s Create Something Awesome Together</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</section>

<section class="blog-page">
    <div class="container">
        ini halaman Pdf
         <ul class="row">
            @foreach ($pdf->chunk(2) as $chunk)
                @foreach ($chunk as $pdf)
                    <li class="col-md-6">
                        <div class="overlay" data-aos="fade-up" data-aos-duration="1000">
                            <a href="#" class="blog-container">
                                <div class="blog-img">
                                    <figure><img src="#" alt="img" class="img-fluid"></figure>
                                    <div class="blog-img-inner"></div>
                                </div>
                                <h5>
                                    {{$pdf->name}}
                                </h5>
                            </a>
                            <a href="#">read more</a>
                        </div>
                    </li>
                @endforeach
            @endforeach
        </ul>
    </div>
</section>

@include('public.partials.footer')

<button class="scrolltop-btn">
    <i class="fa fa-angle-up"></i>
</button>

@endsection