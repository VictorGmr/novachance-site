@extends('layouts.app')

@section('title')
Nova Chance - NC ON TV
@endsection

@section('defineActive')
	<li><a href="/home">INÍCIO</a></li>
	<li><a href="/sobre">QUEM SOMOS</a></li>
	<li><a href="/ncnews">NC NEWS</a></li>
	<li class="active"><a href="/aovivo">NC ON TV</a></li>
@endsection()

@section('css')
	<link rel="stylesheet" type="text/css" href="/styles/elements.css">
    <link rel="stylesheet" type="text/css" href="/styles/elements_responsive.css">
@endsection()
	
@section('content')
	
	
	
	<!-- Home -->

	<div class="home">
		<div class="home_inner">
			<!-- Image artist: https://unsplash.com/@tanelah -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/mic.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="home_content text-center">
					<div class="home_subtitle">NOVA CHANCE</div>
					<div class="home_title">ON TV</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Elements -->

	<div class="elements">
		<div class="container">
			<div class="row">
				<div class="col">
					@auth
						@if(Auth::user()->privilege == 1)
							<form style="margin-bottom: 50px;" action="/aovivo/adicionar-live">
								<label for="link">Adicione o link da live a ser exibida abaixo:</label>
								<input type="text" name="link" id="link">
								<input type="submit" value="Confirmar">
							</form>
						@endif
					@endauth
					
					<!-- Buttons -->
					<div>
						<div class="elements_title">Transmissão ao vivo</div>
						<div class="buttons_container d-flex flex-row align-items-start justify-content-start flex-wrap">
						@if(isset($link))
							<iframe width="1120" height="630" src="{{$link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						@else
							<iframe width="1120" height="630" src="https://www.youtube.com/embed/LNP4nGu0Xnk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						@endif
						
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>




@endsection

@section('js')
<script src="/js/elements.js"></script>
@endsection()