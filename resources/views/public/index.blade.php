@extends('master.public_layout')

@section('title')
        Home
@endsection

@section('content')

<section class="banner">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae iste deserunt a
        rerum temporibus quidem consequuntur facilis fugit laborum reprehenderit!</h6>
        <br><br><br><br><br><br><br><br><br><br><br><br>
    </h6>
    </div>
</section>

@include('public.partials.header')

<section class="index-services">
    <div class="container">
        <div class="services-filter">
            <div class="service-list">
                <h3 class="tab-link current" data-tab="tab-1">Photo Gallery</h3>
                <h3 class="tab-link" data-tab="tab-2">read articles</h3>
                <h3 class="tab-link" data-tab="tab-3">Photo in Blog</h3>
                <h3 class="tab-link" data-tab="tab-4">Jurnal/ Paper</h3>
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
                </ul>
                <ul id="tab-2" class="tab-content article-section">
                    @foreach($post as $p)
                        <li>
                            <a href="{{route('readBlog',['id' => $p->id])}}">
                                <figure style="background:url({{$p->image_url}}); background-position: center right"></figure>
                                <h4>{{$p->title}}</h4>
                                <p>
                                    {{ strip_tags( mb_substr($p->body, 0, 100) )  }} ...
                                </p>
                                <a href="{{route('readBlog',['id' => $p->id])}}" class="article-btn">Baca</a>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul id="tab-3" class="tab-content client-section">
                    @foreach($sixpost as $six)
                         <li>
                            <a href="#">
                                <figure style="background:url({{$six->image_url}}); background-position: center;"></figure>
                            </a>
                        </li>
                    @endforeach

                </ul>
                <ul id="tab-4" class="tab-content pricing-section">
                    <li>
                        <div class="content">
                            <h2>Jurnal</h2>
                            <h6>Judul Jurnal 1</h6>
                        </div>
                        <ul class="features">
                            <li>Tentang Jurnal ini</li>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae iste deserunt a
                                rerum temporibus quidem consequuntur facilis fugit laborum reprehenderit!
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae iste deserunt a
                                rerum temporibus quidem consequuntur facilis fugit laborum reprehenderit!
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae iste deserunt a
                                rerum temporibus quidem consequuntur facilis fugit laborum reprehenderit!
                            </p>
                        </ul>
                        <a href="blogsingle.html" class="buy-now">Lihat</a>
                    </li>
                    <li>
                        <div class="content">
                             <h2>Jurnal</h2>
                            <h6>Judul Jurnal 1</h6>
                        </div>
                        <ul class="features">
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae iste deserunt a
                                rerum temporibus quidem consequuntur facilis fugit laborum reprehenderit!
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae iste deserunt a
                                rerum temporibus quidem consequuntur facilis fugit laborum reprehenderit!
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae iste deserunt a
                                rerum temporibus quidem consequuntur facilis fugit laborum reprehenderit!
                            </p>
                        </ul>
                        <a href="blogsingle.html" class="buy-now">Lihat</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
</section>

<section class="index-blog">
    <div class="layer">
        <div class="container">
            <h3 data-aos="zoom-in" data-aos-duration="1000">Beberapa artikel yang saya tulis, </h3>
            <ul class="row">
            @foreach ($post->chunk(2) as $chunk)
                @foreach ($chunk as $post)
                <li class="col-md-6">
                    <div class="overlay" data-aos="fade-up" data-aos-duration="1000">
                        <a href="{{route('readBlog',['id' => $post->id ])}}">
                            <div class="blog-img">
                                <figure><img src="{{$post->image_url}}" alt="img-1" class="img-fluid"></figure>
                                <div class="blog-img-inner"></div>
                            </div>
                            <h5>
                                {{$post->title}}
                            </h5>
                        </a>
                        <a href="{{route('readBlog',['id' => $post->id ])}}">Baca</a>
                    </div>
                </li>
                @endforeach
            @endforeach
            </ul>
        </div>
    </div>
</section>

@include('public.partials.contact')
@include('public.partials.footer')

<button class="scrolltop-btn">
    <i class="fa fa-angle-up"></i>
</button>


@endsection