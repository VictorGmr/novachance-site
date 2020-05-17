<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/styles/bootstrap-4.4.1/bootstrap.min.css">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
	
	<style>
		#contato_button{
			background-color:white;
		}

		#contato_button:hover{
			background-color: rgba(255,255, 255, 0.5);
		}

		#contato_button a{
			color:black;
		}

		.extra
		{
			padding-left: 50px;
			padding-right: 51px;
		}

		.extra_content
		{
			height: 448px;
			-webkit-transform: translateY(-5px);
			-moz-transform: translateY(-5px);
			-ms-transform: translateY(-5px);
			-o-transform: translateY(-5px);
			transform: translateY(-5px);
		}
		.extra_title h1
		{
			font-size: 60px;
		}
		.extra_text
		{
			margin-top: 4px;
		}
		.extra_button
		{
			width: 161px;
			height: 46px;
			background: #000000;
			margin-top: 35px;
		}
		.extra_button:hover
		{
			background: rgba(0,0,0,0.5);
		}
		.extra_button a
		{
			display: block;
			width: 100%;
			height: 100%;
			line-height: 46px;
			color: #FFFFFF;
			font-size: 14px;
			text-align: center;
		}
	</style>
    @yield('css')
    
    


</head>

<body>

<div class="super_container">
    <!-- Header -->
	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-center">
			<div class="logo"><a href="/home"><img src="/images/logoNC.png"></a></div>
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
                                <a style="color:black;" class="dropdown-item" href="{{ route('logout') }}"
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
						<li><a href="/ncnews">NC NEWS</a></li>
						<li><a href="/aovivo">NC ON TV</a></li>
						<li><a href="/contato">CONTATO</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

    

    <main class="py-4">
        @yield('content')

        <!-- Footer -->

	<footer class="footer" style="padding-bottom:30px;">
		<div class="footer_container d-flex flex-xl-row flex-column align-items-start justify-content-start">


		<div class="extra_content d-flex flex-column align-items-start justify-content-center">
			<div style="height:max-content; margin-top: 20px; padding: 20px;">
			<div class="extra_title"><h1>Fale conosco</h1></div>
			<div class="extra_text">
				<p>Entre em contato conosco através do Whatsapp pelo link abaixo.</p>
			</div>
			<div class="extra_button" id="contato_button"><a href="https://wa.me/5563999566733" target="_blank">Fale conosco</a></div>
			</div>
			<p style="margin-top: 60px; color:rgb(140,140,140)">Endereço: 501 Sul, Conjunto 02, Lote 14, Rua NS-A</p>
			<p style="color:rgb(140,140,140)">Telefone: (63) 3216-2222</p>
			
		</div>


			<div class="footer_lists d-flex flex-sm-row  flex-column align-items-start justify-content-end ml-xl-auto">

				<!-- Social Networks -->
				<div class="footer_list">
					<div class="footer_list_title">Redes Sociais</div>
					<ul>
						<li><a href="https://www.youtube.com/user/Studioiir" target="_blank">Youtube</a></li>
						<li><a href="https://www.facebook.com/novachance.pmw" target="_blank">Facebook</a></li>
						<li><a href="https://www.instagram.com/novachance.pmw/?hl=pt-br" target="_blank">Instagram</a></li>
					</ul>
				</div>

				<!-- Useful Links -->
				<div class="footer_list">
					<div class="footer_list_title">Links úteis</div>
					<ul>
						<li><a href="/home">Home</a></li>
						<li><a href="/sobre">Quem somos</a></li>
						<li><a href="/ncnews">NC NEWS</a></li>
						<li><a href="/aovivo">NC ON TV</a></li>
						<li><a href="/contato">Contato</a></li>
					</ul>
				</div>

				

				 <!--Connect 
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
	</footer>
    </main>

</div>

<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/styles/bootstrap-4.4.1/popper.js"></script>
<script src="/styles/bootstrap-4.4.1/bootstrap.min.js"></script>
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