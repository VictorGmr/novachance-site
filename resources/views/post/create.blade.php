@extends('layouts.app')

@section('title')
Nova Chance - Novo Post
@endsection

@section('defineActive')
	<li><a href="/home">INÍCIO</a></li>
	<li><a href="/sobre">QUEM SOMOS</a></li>
	<li><a href="/ncon">NC ON</a></li>
	<li><a href="/discipulado">DISCIPULADO</a></li>
	<li><a href="/contato">CONTATO</a></li>
@endsection()
	
@section('css')
	<link rel="stylesheet" type="text/css" href="/styles/contact.css">
	<link rel="stylesheet" type="text/css" href="/styles/contact_responsive.css">
	
@endsection()

@section('content')
	
	

	<!-- Home -->

	<div class="home">
		<div class="home_inner">
			<!-- Image artist: https://unsplash.com/@yoannboyer -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
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
					<div class="contact_form_container">
						<div class="contact_title">Crie sua postagem:</div>
						<form action="/ncon/store" method="POST" enctype="multipart/form-data" class="contact_form" id="contact_form">
							@csrf
							<input type="name" class="contact_input" placeholder="Título" name="titulo" required="required" autocomplete="off">
							<textarea style="height:348px;"class="contact_input contact_textarea" placeholder="Postagem" name="conteudo" autocomplete="off" required="required"></textarea>
							<ul>
							<li><label for="foto">Selecione uma imagem para seu post</label></li>
							<li><input type="file" name="foto" id="foto"></li>
							</ul>
							
							<button class="contact_button">Postar</button>
						</form>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-6 contact_col">
					<div class="contact_info">
						<div class="contact_title">Exemplo aleatório de texto.</div>
						<div class="contact_text">
							<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
						</div>
						<div class="contact_info_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Address</div></div>
									<div>1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Phone</div></div>
									<div>+53 345 7953 32453</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>E-mail</div></div>
									<div>yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
						<div class="social">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




@endsection

@section('js')
<script src="/js/contact.js"></script>
@endsection()