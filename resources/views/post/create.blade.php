@extends('layouts.app')

@section('title')
Nova Chance - Novo Post
@endsection

@section('defineActive')
	<li><a href="/home">INÍCIO</a></li>
	<li><a href="/sobre">QUEM SOMOS</a></li>
	<li><a href="/ncnews">NC NEWS</a></li>
	<li><a href="/aovivo">NC ON TV</a></li>
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
					<div class="home_title">Criar nova postagem</div>
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
						<div class="contact_title">Crie sua postagem:</div>
						<form action="/ncnews/store" method="POST" enctype="multipart/form-data" class="contact_form" id="contact_form">
							@csrf
							<label for="titulo"><h3>Título:</h3></label>
							<input id="titulo" style="background-color:white; color:black;" type="name" class="contact_input" placeholder="Título" name="titulo" required="required" autocomplete="off">
							<label for="conteudo"><h3>Mensagem:</h3></label>
							<textarea id="conteudo" style="height:348px;"class="contact_input contact_textarea" name="conteudo" autocomplete="off"></textarea>
							<ul>
							<li><label for="foto">Selecione uma imagem para seu post</label></li>
							<li><input type="file" name="foto" id="foto"></li>
							</ul>

							<label for="category">Selecione uma categoria para seu post:</label>
							<select name="category" id="category" required>
								<option value="" selected>Selecione...</option>
								<option value="0">Séries</option>
								<option value="1">Louvor</option>
								<option value="2">Intersessão</option>
								<option value="3">Dança</option>
								<option value="4">Teatro</option>
								<option value="5">Introdução</option>
								<option value="6">Pastoral</option>
							</select>

							<button class="contact_button">Criar post</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




@endsection

@section('js')
<script src="/js/contato.js"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
	tinymce.init({
		selector: 'textarea',
		plugins: 'nonbreaking',
		menubar: false,
		nonbreaking_force_tab: true
	});
</script>
@endsection()