
        <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
        <!--<nav class="navbar navbar-default navbar-static-top">-->
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ route('route_path') }}">{{ config('app.name') }}</a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="{{ set_active_route('route_path') }}"><a href="{{ route('route_path') }}">Home</a></li>
                        <li class="{{ set_active_route('about_path') }}"><a href="{{ route('about_path') }}">About</a></li>
                        <li><a href="#Artisan">Artisan</a></li>
                        <li class="dropdown">
                                <a href="#Planet" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    Planet{{-- Auth::user()->name --}} <!--<span class="caret"></span>-->
                                </a>
                            <ul class="dropdown-menu">
                                <li><a href="https://laravel.com">Laravel.com</a></li>
                                <li><a href="https://laravel.io">Laravel.io</a></li>
                                <li><a href="https://laracasts.com">Laracasts</a></li>
                                <li><a href="https://larajobs.com">Larajobs</a></li>
                                <li><a href="https://laravel-news.com">Laravel.News</a></li>
                                <li><a href="https://larachat.com">Larachat</a></li>
                            </ul>
                            <li>
                        <li class="{{ set_active_route('contact_path') }}"><a href="{{ route('contact_path') }}">Contact</a></li>
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#Login">Login</a></li>
                        <li><a href="#Register">Register</a></li>
                        <!-- Authentication Links -->
                        <!--@guest-->
                        {{--@if(Auth::guest())--}}
                            <li></li>
                            <li></li>
                            
                        {{--@else--}}
                        
                            <!--<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    Planet{{-- Auth::user()->name --}} <span class="caret"></span>
                                </a>-->
                            <li>
                                <p class="navbar-btn">
                                    <!--<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;  New event</a></li>   --> 
                                </p>
                                <ul class="dropdown-menu" role="menu">
                                    
                                    
                                </ul>
                            </li>
                            {{--@endif--}}
                        <!--@endguest-->
                    </ul>
                </div>
            </div>
        </nav>
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>