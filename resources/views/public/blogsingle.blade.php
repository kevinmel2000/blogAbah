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
    <h3 data-aos="fade-up" data-aos-duration="1000">{{$post->title}}</h3>
    <div class="overlay">
        <a href="blogsingle.html">
            <div class="blog-img" data-aos="fade-up" data-aos-duration="1200">
                <img src="{{$post->image_url}}" alt="blog-single" class="img-fluid w-100">
                <div class="blog-img-inner"></div>
            </div>
        </a>
    </div>

    <h6>{{ $post->created_at->format('d/m/Y') }}  Posted by <span>{{$author}}</span></h6>
    <p data-aos="fade-up" data-aos-duration="1000">{!! $post->body !!}</p>
    <div class="comments-posted">
        <h2>comments Posted</h2>

        @foreach($comment as $c)
        <div class="comments">
            <h5>{{$c->name}}<span> - {{$c->created_at->format('d/m/Y')}}</span></h5>
            <p>{{$c->message}}</p>
        </div>
        @endforeach
    </div>
    <div class="write-comment">
        <h2 data-aos="fade-up" data-aos-duration="1000">Tulis Comment</h2>
        <form data-aos="fade-up" data-aos-duration="1000" 
        action="{{ route( 'commentBlog',['blogId' => $post->id] ) }}" method="post">
            <ul class="row">
                <li class="col-md-4">
                    <input type="text" required class="w-100" placeholder="Masukan nama anda" name="nama">
                </li>
                <li class="col-md-4">
                    <input type="email" required class="w-100" placeholder="masukan email anda" name="email">
                </li>
                <li class="col-md-4">
                    <input type="text" required class="w-100" placeholder="Website anda" name="website">
                </li>
                <li class="col-12">
                    <textarea class="w-100" required placeholder=" Pesan anda" name="message"></textarea>
                </li>
            </ul>
            <button type="submit">post your comment</button>
            {{ csrf_field() }}
        </form>
    </div>
</section>

@include('public.partials.contact')
@include('public.partials.footer')
<button class="scrolltop-btn">
    <i class="fa fa-angle-up"></i>
</button>
@endsection