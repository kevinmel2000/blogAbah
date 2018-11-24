@extends('master.public_layout')

@section('title')
        About
@endsection

@section('content')
<header class="fixed-top p-auto">
    <div class="container">
        <nav class="navbar navbar-expand p-0">
            <a class="navbar-brand mr-0 pr-4" href="index.html">
                <img src="images/logo.png" alt="logo">
            </a>
            <a href="javascript:void(0)" id="cls-btn">&times;</a>
            <div class="navbar-collapse nav-sec" id="sidenav">
                <ul class="navbar-nav mr-auto header-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('index')}}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item active">
                            <a class="nav-link active text-white" href="{{route('about')}}">
                                About
                            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="services.html">
                            Services
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link text-white" href="blog.html">
                            blog
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="portfolio.html">
                            Portfolio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact.html">
                            Contact
                        </a>
                    </li>

                </ul>
        </nav>
    </div>
</header>


<section class="banner innerpage-banner contact-banner">
    <div class="container">
        <h1 data-aos="fade-up" data-aos-duration="1000">Let’s Create Something Awesome Together</h1>
    </div>
</section>

<section class="about-page">
    <div class="container">
        <h2 data-aos="zoom-in" data-aos-duration="1000">about us</h2>
        <ul class="row">
            <li class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <figure><img src="{{asset('images/services-1.jpg')}}" alt="about-page" ></figure>
            </li>
            <li class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <p>{{$user->description}}</p>
            </li>
            <!--
            <li class="col-12">
                <p data-aos="fade-up" data-aos-duration="1000">Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                    the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                    1960s with the release of Letraset sheets containing Lorem Ipsum passages..</p>
                <p data-aos="fade-up" data-aos-duration="1300">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                    the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                    1960s with the release of Letraset sheets containing Lorem Ipsum passages...Lorem Ipsum is simply
                    dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                    make a type specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages...</p>
            </li>
            -->
        </ul>
    </div>
</section>


<!--
<section class="index-contact">
    <div class="layer">
        <div class="container">
            <h3 data-aos="zoom-in" data-aos-duration="1000">Got a project in mind? please contact and lets make awesome</h3>
            <p data-aos="zoom-in" data-aos-duration="1000">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry's type specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting,</p>
            <form data-aos="fade-up" data-aos-duration="1000">
                <ul class="row">
                    <li class="col-md-4">
                        <input type="text" required class="w-100" placeholder="Your Name">
                    </li>
                    <li class="col-md-4">
                        <input type="email" required class="w-100" placeholder="Your Email Id">
                    </li>
                    <li class="col-md-4">
                        <input type="text" required class="w-100" placeholder="Your Mobile No">
                    </li>
                    <li class="col-12">
                        <textarea class="w-100" required placeholder="Your Message"></textarea>
                    </li>
                </ul>
                <button type="submit">alright submit it</button>
            </form>
        </div>
    </div>
</section>-->

<footer>
    <div class="layer">
        <div class="container">
            <nav class="navbar navbar-expand  p-0">
                <a class="navbar-brand mr-0 pr-2 pr-sm-4" href="index.html">
                    <img src="{{asset('images/logo.png')}}" alt="logo">
                </a>
                <div class="nav-sec">
                    <ul class="ml-md-auto">
                        <li class="nav-item ">
                            <a class="nav-link " href="{{route('index')}}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" href="{{route('about')}}">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">
                                Services
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="portfolio.html">
                                Portfolio
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">
                                Contact
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="support.html">
                                Support
                            </a>
                        </li>
                        <li>
                            <p class="m-0"> ©2018, All Rights Reserved. Designed By <a href="https://www.template.net/editable/websites">Template.net</a></p>
                        </li>
                    </ul>
            </nav>

        </div>
    </div>
</footer>

<button class="scrolltop-btn">
    <i class="fa fa-angle-up"></i>
</button>

@endsection