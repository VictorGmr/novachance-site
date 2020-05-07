<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
    @yield('css')
    
    


</head>

<body>

<div class="super_container">
    <!-- Header -->
	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-center">
			<div class="logo"><a href="#">NOVA CHANCE</a></div>
			<div class="log_reg">
				<ul class="d-flex flex-row align-items-start justify-content-start">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}">Registre-se</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
				</ul>
            </div>
            
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
                    @yield('defineActive')
				</ul>
			</nav>
			<div class="hamburger ml-auto">
				<div class="d-flex flex-column align-items-end justify-content-between">
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
    </header>
    
    <div class="menu">
		<div>
			<div class="menu_overlay"></div>
			<div class="menu_container d-flex flex-column align-items-start justify-content-center">
				<div class="menu_log_reg">
					<ul class="d-flex flex-row align-items-start justify-content-start">
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}">Registre-se</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
					</ul>
				</div>
				<nav class="menu_nav">
					<ul class="d-flex flex-column align-items-start justify-content-start">
						<li><a href="/home">INÍCIO</a></li>
						<li><a href="/sobre">QUEM SOMOS</a></li>
						<li><a href="/ncon">NC ON</a></li>
						<li><a href="/discipulado">DISCIPULADO</a></li>
						<li><a href="/contato">CONTATO</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

    

    <main class="py-4">
        @yield('content')

        <!-- Footer -->

	<footer class="footer">
		<div class="footer_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
			<div class="newsletter_container">
				<div class="newsletter_title"><h2>Receba nossas notícias em seu e-mail</h2></div>
				<form action="#" id="newsletter_form" class="newsletter_form">
					<input type="email" class="newsletter_input" placeholder="Seu E-mail" required="required">
					<button class="newsletter_button">Inscreva-se</button>
				</form>
			</div>
			<div class="footer_lists d-flex flex-sm-row  flex-column align-items-start justify-content-end ml-xl-auto">

				<!-- Useful Links -->
				<div class="footer_list">
					<div class="footer_list_title">Links úteis</div>
					<ul>
						<li><a href="/home">Home</a></li>
						<li><a href="/sobre">Quem somos</a></li>
						<li><a href="/ncon">NC ON</a></li>
						<li><a href="/discipulado">Discipulado</a></li>
						<li><a href="/contato">Contato</a></li>
					</ul>
				</div>

				<!-- Mixtape 
				<div class="footer_list">
					<div class="footer_list_title">Mixtape</div>
					<ul>
						<li><a href="#">Music</a></li>
						<li><a href="#">PR & Marketing</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Testimonials</a></li>
					</ul>
				</div>

				 Connect 
				<div class="footer_list">
					<div class="footer_list_title">Connect</div>
					<ul>
						<li><a href="#">Returns</a></li>
						<li><a href="#">Shippings</a></li>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Social Media</a></li>
						<li><a href="#">Soundcloud</a></li>
					</ul>
				</div>-->

			</div>
		</div>
		<div class="copyright_bar">
			<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
		</div>
	</footer>
    </main>

</div>

<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/styles/bootstrap-4.1.2/popper.js"></script>
<script src="/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="/plugins/greensock/TweenMax.min.js"></script>
<script src="/plugins/greensock/TimelineMax.min.js"></script>
<script src="/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="/plugins/greensock/animation.gsap.min.js"></script>
<script src="/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/plugins/easing/easing.js"></script>
<script src="/plugins/progressbar/progressbar.min.js"></script>
<script src="/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="/plugins/jPlayer/jplayer.playlist.min.js"></script>

@yield('js')


</body>
</html>