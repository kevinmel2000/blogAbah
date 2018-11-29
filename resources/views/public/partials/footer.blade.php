<footer>
    <div class="layer">
        <div class="container">
            <nav class="navbar navbar-expand  p-0">
                <a class="navbar-brand mr-0 pr-2 pr-sm-4" href="index.html">
                    <img src="{{asset('images/logo2.png')}}" alt="logo">
                </a>
                <div class="nav-sec">
                    <ul class="ml-md-auto">
                        @if($modul =='index')
                            <li class="nav-item active">
                            <a class="nav-link active text-black" href="{{route('index')}}">
                        @else
                            <li class="nav-item">
                            <a class="nav-link text-black" href="{{route('index')}}">                      
                        @endif
                                Home
                            </a>
                        </li>
                        @if($modul =='about')
                            <li class="nav-item active">
                            <a class="nav-link active text-black" href="{{route('about')}}">
                        @else
                            <li class="nav-item">
                            <a class="nav-link text-black" href="{{route('about')}}">
                        @endif
                                About
                            </a>
                        </li>
                        @if($modul =='blog')
                        <li class="nav-item active">
                            <a class="nav-link active text-black" href="{{route('blog',['page'=> 1])}}">
                        @else
                            <li class="nav-item">
                            <a class="nav-link text-black" href="{{route('blog',['page'=> 1])}}">
                        @endif
                                blog
                            </a>
                        </li>
                       
                        <li>
                            <p class="m-0"> ©2018, All Rights Reserved. Designed By Elbananda Permana</a></p>
                        </li>
                    </ul>
            </nav>

        </div>
    </div>
</footer>
