@extends('master.public_layout')

@section('title')
        Blog
@endsection

@section('content')


@include('public.partials.header')

<section class="banner innerpage-banner contact-banner">
    <div class="container">
        <h1 data-aos="fade-up" data-aos-duration="1000">read our blog</h1>
    </div>
</section>

<section class="blog-page blogsingle">
    <h3 data-aos="fade-up" data-aos-duration="1000">Girl wearing white frock holding coffee and posing for photo.</h3>
    <div class="overlay">
        <a href="blogsingle.html">
            <div class="blog-img" data-aos="fade-up" data-aos-duration="1200">
                <img src="images/blog-single.jpg" alt="blog-single" class="img-fluid w-100">
                <div class="blog-img-inner"></div>
            </div>
        </a>
    </div>

    <h6>December 23, 2016 Posted by <span>Bizzy</span></h6>
    <p data-aos="fade-up" data-aos-duration="1000">Welcome to my personal travel blog, i love to travel the globe, i
        have been to so many beautiful places and met
        interesting people around the world, this website is my mirror of life. </p>
    <p data-aos="fade-up" data-aos-duration="1000">Welcome nal travel blog, i love to travel the globe, i have been to
        so <span> many beautiful</span> Welcome to
        my personal
        travel blog, i love to travel the globe, i have been to so many beautiful places and met interes Welcom y
        personal travel blog, i love to travel the globe, i have been to so many beautiful places and met interesting
        people around the world, this website is my mirror of life.
    </p>
    <p data-aos="fade-up" data-aos-duration="1000">Welcome to my personal travel blog, i love to travel the globe, i
        have been to so many beautiful...e world, this
        website is my mirror of life. <br> Welcome to my personal travel blog, i love to travel the globe, i have been
        to so many beautiful... </p>
    <div class="box">
        <h6>Welcome to my personal travel blog, i love to travel the globe, i have been to so many beautiful places and
            met interesting people around the world, this website is my mirror of life. </h6>
    </div>
    <p data-aos="fade-up" data-aos-duration="1000">Welcome to my personal travel blog, i love to travel the globe, i
        have been to so many beautiful places and met
        interesting people around the world, this website is my mirror of life. </p>
    <p data-aos="fade-up" data-aos-duration="1000">Welcome nal travel blog, i love to travel the globe, i have been to
        so <span> many beautiful</span> Welcome to
        my personal
        travel blog, i love to travel the globe, i have been to so many beautiful places and met interes Welcom y
        personal travel blog, i love to travel the globe, i have been to so many beautiful places and met interesting
        people around the world, this website is my mirror of life.
    </p>
    <p data-aos="fade-up" data-aos-duration="1000">Welcome to my personal travel blog, i love to travel the globe, i
        have been to so many beautiful...e world, this
        website is my mirror of life. <br> Welcome to my personal travel blog, i love to travel the globe, i have been
        to so many beautiful... </p>
    <div class="similarposts">
        <h2>similar posts</h2>
        <ul class="row">
            <li class="col-md-6">
                <div class="overlay" data-aos="fade-up" data-aos-duration="1000">
                    <a href="blogsingle.html">
                        <div class="blog-img">
                            <img src="images/img-1.jpg" alt="img-1" class="img-fluid">
                            <div class="blog-img-inner"></div>
                        </div>
                        <h5>
                            Girl wearing white frock holding coffee and posing for photo.
                        </h5>
                    </a>

                </div>
            </li>
            <li class="col-md-6">
                <div class="overlay" data-aos="fade-up" data-aos-duration="1400">
                    <a href="blogsingle.html">
                        <div class="blog-img">
                            <img src="images/img-2.jpg" alt="img-2" class="img-fluid">
                            <div class="blog-img-inner"></div>
                        </div>
                        <h5>
                            Man getting ready for photoshoot by wearing blue suit
                        </h5>
                    </a>

                </div>
            </li>

        </ul>
    </div>
    <div class="comments-posted">
        <h2>comments Posted</h2>
        <div class="comments">
            <h5>Manish Tiwari<span> - 12.06.2016</span></h5>
            <p>Wow...Wow.....i really like the way you write the articles about your photography, they are really
                awesome thanks a lot for sharing</p>
        </div>

        <div class="comments">
            <h5>Manish Tiwari<span> - 12.06.2016</span></h5>
            <p>Wow...Wow.....i really like the way you write the articles about your photography, they are really
                awesome thanks a lot for sharing</p>
        </div>
    </div>
    <div class="write-comment">
        <h2 data-aos="fade-up" data-aos-duration="1000">write comment</h2>
        <form data-aos="fade-up" data-aos-duration="1000">
            <ul class="row">
                <li class="col-md-4">
                    <input type="text" required class="w-100" placeholder="Enter your name">
                </li>
                <li class="col-md-4">
                    <input type="email" required class="w-100" placeholder="Enter your email">
                </li>
                <li class="col-md-4">
                    <input type="text" required class="w-100" placeholder="Your Website">
                </li>
                <li class="col-12">
                    <textarea class="w-100" required placeholder="Type your message"></textarea>
                </li>
            </ul>
            <button type="submit">post your comment</button>
        </form>
    </div>
</section>

@include('public.partials.contact')
@include('public.partials.footer')
<button class="scrolltop-btn">
    <i class="fa fa-angle-up"></i>
</button>
@endsection