@extends('layouts.app')

@section('title')
Nova Chance - Editar Post
@endsection

@section('defineActive')
	<li><a href="/home">INÍCIO</a></li>
	<li><a href="/sobre">QUEM SOMOS</a></li>
	<li><a href="/ncnews">NC NEWS</a></li>
	<li><a href="/aovivo">NC ON TV</a></li>
	<li><a href="/contato">CONTATO</a></li>
@endsection()
	
@section('css')
	<link rel="stylesheet" type="text/css" href="/styles/contato.css">
	<link rel="stylesheet" type="text/css" href="/styles/contato_responsive.css">
@endsection()

@section('content')


	<!-- Home -->

	<div class="home">
		<div class="home_inner">
			<!-- Image artist: https://unsplash.com/@yoannboyer -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/contact.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="home_content text-center">
					<div class="home_subtitle">NOVA CHANCE</div>
					<div class="home_title">Edite esta postagem</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Form -->
				<div class="col-lg-6">
					<div class="contact_form_container" style="width: 200%;">
						<div class="contact_title">Edite esta postagem:</div>
						<form action="/ncnews/{{$post->id}}" method="POST" enctype="multipart/form-data" class="contact_form" id="contact_form">
							@method('PUT')
							@csrf
							<label for="titulo"><h3>Título:</h3></label>
							<input id="titulo" type="name" class="contact_input" value="{{$post->titulo}}" name="titulo" required="required" autocomplete="off">
							<label for="conteudo"><h3>Mensagem:</h3></label>
							<textarea id="conteudo" style="height:348px;"class="contact_input contact_textarea" name="conteudo" autocomplete="off" required="required">{{$post->conteudo}}</textarea>
							<ul>
							<li><label for="foto">Selecione uma imagem para seu post</label></li>
							<li><input type="file" name="foto" id="foto"></li>
							</ul>
							<button class="contact_button">Confirmar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




@endsection

@section('js')
<script src="/js/contato.js"></script>
@endsection()