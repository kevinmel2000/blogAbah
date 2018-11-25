@extends('master.public_layout')

@section('title')
        About
@endsection

@section('content')
<header class="fixed-top p-auto">
    <div class="container">
        <nav class="navbar navbar-expand p-0">
            <a class="navbar-brand mr-0 pr-4" href="index.html">
                <img src="images/logo2.png" alt="logo">
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
                        <a class="nav-link text-white" href="{{route('blog',['page'=> 1])}}">
                            Blog
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
                <div class="search-box mr-lg-0">
                    <input type="text" placeholder="Search here..." name="search1">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="menu-icon d-lg-none">
                    <span class="ml-auto"></span>
                    <span class="ml-auto"></span>
                    <span class="ml-auto"></span>
                </div>
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
        <h2 data-aos="zoom-in" data-aos-duration="1000">about Iqbal Permana</h2>
        <ul class="row">
            <li class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <figure><img src="{{asset('poto_profile.jpg')}}" alt="about-page" ></figure>
            </li>
            <li class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <p>{{$user->description}}</p>
            </li>
        </ul>
    </div>
</section>

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