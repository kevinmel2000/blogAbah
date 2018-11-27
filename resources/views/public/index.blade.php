@extends('master.public_layout')

@section('title')
        Home
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
                    <li class="nav-item active">
                        <a class="nav-link active text-white" href="{{route('index')}}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('about')}}">
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

<section class="banner">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h1>Let’s Create Something Awesome Together</h1>
        <h6>This is how we work, to make your project awesome !</h6>
        <a href="#" class="get-started-btn">get started</a>
    </div>
</section>

<section class="index-about-sec">
    <div class="layer">
        <div class="container">
            <h5 data-aos="zoom-in" data-aos-duration="1000">This is how we work, to make your project awesome !</h5>
            <p data-aos="zoom-in" data-aos-duration="1000">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release
                of Letraset sheets containing Lorem Ipsum passages...
            </p>
            <ul class="row">
                <li class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="index-abt-content">
                        <h3>web designing</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            dummy
                            text ever since the 1500s, when an...</p>
                    </div>
                </li>
                <li class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="1200">
                    <div class="index-abt-content">
                        <h3>domian registering</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            dummy
                            text ever since the 1500s, when an...</p>
                    </div>
                </li>
                <li class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="1400">
                    <div class="index-abt-content">
                        <h3>wordpress development</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            dummy
                            text ever since the 1500s, when an...</p>
                    </div>
                </li>
                <li class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-duration="1600">
                    <div class="index-abt-content">
                        <h3>graphic design</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            dummy
                            text ever since the 1500s, when an...</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="index-services">
    <div class="container">
        <div class="services-filter">
            <div class="service-list">
                <h3 class="tab-link current" data-tab="tab-1">Photo Collection</h3>
                <h3 class="tab-link" data-tab="tab-2">read articles</h3>
                <h3 class="tab-link" data-tab="tab-3">our clients</h3>
                <h3 class="tab-link" data-tab="tab-4">view pricing</h3>
            </div>
            <div class="service-images">
                <ul id="tab-1" class="tab-content current">
                    @foreach($img as $i)
                    <li data-aos="fade-up" data-aos-duration="1000">
                        <a href="{{asset('/').$i->title}}">
                            <figure style="background:url({{asset('/').$i->title}}); background-position: center right"></figure>
                        </a>
                    </li>
                    @endforeach
                    <!--
                    <li data-aos="fade-up" data-aos-duration="1200">
                        <a href="portfolio.html">
                            <figure style="background:url(images/index-portfolio-2.jpg); background-position: center"></figure>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1400">
                        <a href="portfolio.html">
                            <figure style="background:url(images/index-portfolio-3.jpg);"></figure>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000">
                        <a href="portfolio.html">
                            <figure style="background:url(images/index-portfolio-4.jpg); background-position: center right"></figure>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1200">
                        <a href="portfolio.html">
                            <figure style="background:url(images/index-portfolio-5.jpg);"></figure>
                        </a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1400">
                        <a href="portfolio.html">
                            <figure style="background:url(images/index-portfolio-6.jpg); background-position: center "></figure>
                        </a>
                    </li>
                     -->
                </ul>
                <ul id="tab-2" class="tab-content article-section">
                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(images/article-img.jpg); background-position: center right"></figure>
                            <h4>girl holding black jacket</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae iste deserunt a
                                rerum temporibus quidem consequuntur facilis fugit laborum reprehenderit!</p>
                            <a href="blogsingle.html" class="article-btn">read more</a>
                        </a>
                    </li>
                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(images/article-img1.jpg);"></figure>
                            <h4>girl holding mug</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae iste deserunt a
                                rerum temporibus quidem consequuntur facilis fugit laborum reprehenderit!</p>
                            <a href="blogsingle.html" class="article-btn">read more</a>
                        </a>
                    </li>

                </ul>
                <ul id="tab-3" class="tab-content client-section">
                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(images/article-img.jpg); background-position: center;"></figure>
                        </a>
                    </li>

                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(images/article-img1.jpg); background-position: center;"></figure>
                        </a>
                    </li>

                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(images/our-clients1.jpg); background-position: center;"></figure>
                        </a>
                    </li>

                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(images/index-portfolio-2.jpg); background-position: center"></figure>
                        </a>
                    </li>

                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(images/index-portfolio-6.jpg); background-position: center "></figure>
                        </a>
                    </li>

                    <li>
                        <a href="blogsingle.html">
                            <figure style="background:url(images/index-portfolio-3.jpg);"></figure>
                        </a>
                    </li>

                </ul>
                <ul id="tab-4" class="tab-content pricing-section">
                    <li>
                        <div class="content">
                            <h2>lite</h2>

                            <h6>free</h6>

                            <!-- <a href="https://www.template.net/editable/websites" class="buy-now">download</a> -->
                        </div>


                        <ul class="features">
                            <li>10 Downloads of Pro Templates a month</li>
                            <li>Unlimited Downloads of Free Templates without Giving Credit</li>
                            <li>Royalty Free Templates with Images, Fonts &amp; Art Work</li>
                            <li>Original Content by Business Writers</li>
                            <li>100% Customizable, Shareable &amp; Print Ready</li>
                            <li>Available File Format (Adobe, MS Office, Mac &amp; G Drive....)</li>
                        </ul>
                        <a href="blogsingle.html" class="buy-now">buy now</a>
                    </li>
                    <li>
                        <div class="content">
                            <h2>Pro</h2>

                            <h6>5$/Month</h6>

                            <!-- <a href="https://www.template.net/editable/websites" class="buy-now">Subscribe</a> -->
                        </div>

                        <ul class="features">
                            <li>10 Downloads of Pro Templates a month</li>
                            <li>Unlimited Downloads of Free Templates without Giving Credit</li>
                            <li>Royalty Free Templates with Images, Fonts &amp; Art Work</li>
                            <li>Original Content by Business Writers</li>
                            <li>100% Customizable, Shareable &amp; Print Ready</li>
                            <li>Available File Format (Adobe, MS Office, Mac &amp; G Drive....)</li>
                        </ul>
                        <a href="blogsingle.html" class="buy-now">buy now</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
</section>

<section class="index-blog">
    <div class="layer">
        <div class="container">
            <h3 data-aos="zoom-in" data-aos-duration="1000">We write great web design articles, have a look on them</h3>
            <p data-aos="zoom-in" data-aos-duration="1000">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry's type specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting,</p>
            <ul class="row">
            @foreach ($post->chunk(2) as $chunk)
                @foreach ($chunk as $post)
                <li class="col-md-6">
                    <div class="overlay" data-aos="fade-up" data-aos-duration="1000">
                        <a href="blogsingle.html">
                            <div class="blog-img">
                                <figure><img src="{{$post->image_url}}" alt="img-1" class="img-fluid"></figure>
                                <div class="blog-img-inner"></div>
                            </div>
                            <h5>
                                {{$post->title}}
                            </h5>
                        </a>
                        <a href="blogsingle.html">read more</a>
                    </div>
                </li>
                @endforeach
            @endforeach
            </ul>
        </div>
    </div>
</section>

@include('public.partials.contact')
<footer>
    <div class="layer">
        <div class="container">
            <nav class="navbar navbar-expand  p-0">
                <a class="navbar-brand mr-0 pr-2 pr-sm-4" href="index.html">
                    <img src="images/logo.png" alt="logo">
                </a>
                <div class="nav-sec">
                    <ul class="ml-md-auto">
                        <li class="nav-item active">
                            <a class="nav-link active text-black" href="{{route('index')}}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">
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