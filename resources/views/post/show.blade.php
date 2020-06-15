@extends('layouts.app')

@section('title')
Nova Chance - Posts
@endsection()

@section('defineActive')
	<li><a href="/home">INÍCIO</a></li>
	<li><a href="/sobre">QUEM SOMOS</a></li>
	<li class="active"><a href="/ncnews">NC NEWS</a></li>
	<li><a href="/aovivo">NC ON TV</a></li>
@endsection()

@section('css')
	<link rel="stylesheet" type="text/css" href="/styles/blog.css">
	<link rel="stylesheet" type="text/css" href="/styles/blog_responsive.css">
	<link rel="stylesheet" type="text/css" href="/styles/elements.css">
    <link rel="stylesheet" type="text/css" href="/styles/elements_responsive.css">
@endsection()

@section('content')
	
	
	

	<!-- Home -->

	<div class="home">
		<div class="home_inner">
			<!-- Image artist: https://unsplash.com/@yoannboyer -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/newspaper.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="home_content text-center">
					<div class="home_subtitle">NOVA CHANCE</div>
					<div class="home_title">NEWS</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				
				<!-- Blog Posts -->
				<div class="col-lg-9">
					<div class="blog_posts">
						@auth
							@if(Auth::user()->privilege == 1)
								<div style="margin-top: 15px;" class="button button_3 trans_200"><a href="/ncnews/create">Criar nova postagem</a></div>
							@endif
						@endauth

						@foreach($posts as $post)

							<div class="blog_post" style="padding:20px; border-width:2px; border-style:solid; border-color:white">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
									<div>{{$post->created_at->format('d')}}</div>
									<div>{{$post->created_at->format('m')}}</div>
									<div>{{$post->created_at->format('Y')}}</div>
								</div>
								
								@auth
									@if(Auth::user()->privilege == 1)
										<div style="display:flex; margin-bottom:10px; margin-left:200px;">
											<div class="button button_3 trans_200">
												<a href="/ncnews/edit/{{$post->id}}">Editar</a>
											</div>

											<form id="delete_form" action="/ncnews/{{$post->id}}" method="POST">
												@csrf
												@method('DELETE')
												<div class="button button_3 trans_200">
													<a href="javascript:{}" onclick="document.getElementById('delete_form').submit();">Excluir</a>
												</div>
											</form>
										</div>
									@endif
								@endauth

								@if(file_exists(public_path('images/fotos_posts/'.md5($post->id))))
									<div class="blog_post_image"><img src="{{asset('images/fotos_posts/'.md5($post->id))}}"></div>
									<div style="margin-top: 40px;" class="blog_post_title"><h2>{{$post->titulo}}</h2></div>
								@else
									<div style="margin-top: 150px;" class="blog_post_title"><h2>{{$post->titulo}}</h2></div>
								@endif

								<div class="blog_post_info">
									<ul class="d-flex flex-row align-items-start justify-content-start">
										<li>Por: {{$users->find($post->users_id)->name}}</li>
										<!--<li><a href="#">2 Comments</a></li>-->
									</ul>
								</div>
								<div class="blog_post_text">
									<p><?php echo $post->conteudo; ?></p>
								</div>
							</div>
						@endforeach


						<!-- Blog Post 
						<div class="blog_post">
							<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
								<div>July</div>
								<div>26</div>
								<div>2018</div>
							</div>
							<div class="blog_post_image"><img src="/images/blog_1.jpg" alt="https://unsplash.com/@stevenerixon"></div>
							<div class="blog_post_title"><h2><a href="#">How to get the best playlist</a></h2></div>
							<div class="blog_post_info">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>by <a href="#">Admin</a></li>
									<li><a href="#">2 Comments</a></li>
								</ul>
							</div>
							<div class="blog_post_text">
								<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
							</div>
						</div>

						 Blog Post 
						<div class="blog_post blog_post_audio">
							<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
								<div>July</div>
								<div>26</div>
								<div>2018</div>
							</div>

							 Single Player
							<div class="single_player_container d-flex flex-column align-items-start justify-content-center">
								<div class="single_player">
									<div id="jplayer_1" class="jp-jplayer"></div>
									<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
										<div class="jp-type-single">
											<div class="player_details d-flex flex-row align-items-center justify-content-start">
												<div class="jp-details">
													<div>playing</div>
													<div class="jp-title" aria-label="title">&nbsp;</div>
												</div>
												<div class="jp-controls-holder ml-auto">
													<button class="jp-play" tabindex="0"></button>
												</div>
											</div>
											<div class="player_controls">
												<div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
													<div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-start">
														<div><div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div></div>
														<div class="jp-progress">
															<div class="jp-seek-bar">
																<div class="jp-play-bar"></div>
															</div>
														</div>
														<div><div class="jp-duration ml-auto" role="timer" aria-label="duration">&nbsp;</div></div>
													</div>
													<div class="jp-volume-controls d-flex flex-row align-items-center justify-content-start ml-auto">
														<button class="jp-mute" tabindex="0"></button>
														<div class="jp-volume-bar">
															<div class="jp-volume-bar-value"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="jp-no-solution">
												<span>Update Required</span>
												To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="blog_post_title"><h2><a href="#">Our song of the month</a></h2></div>
							<div class="blog_post_info">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>by <a href="#">Admin</a></li>
									<li><a href="#">2 Comments</a></li>
								</ul>
							</div>
							<div class="blog_post_text">
								<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
							</div>

						</div>

						 Blog Post 
						<div class="blog_post">
							<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
								<div>July</div>
								<div>26</div>
								<div>2018</div>
							</div>
							<div class="blog_post_image"><img src="/images/blog_2.jpg" alt="https://unsplash.com/@clesulie"></div>
							<div class="blog_post_title"><h2><a href="#">The best sound of 2018</a></h2></div>
							<div class="blog_post_info">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li>by <a href="#">Admin</a></li>
									<li><a href="#">2 Comments</a></li>
								</ul>
							</div>
							<div class="blog_post_text">
								<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
							</div>
						</div> -->

					</div>
					<!--<div class="load_more">
						<div class="button"><a href="#">Load More</a></div>
					</div>-->
				</div>
				
				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">
						<!--<div class="sidebar_section">
							<div class="sidebar_title">Archive</div>
							<div class="sidebar_list">
								<ul>
									<li><a href="#">February 2017</a></li>
									<li><a href="#">September 2017</a></li>
									<li><a href="#">May 2018</a></li>
									<li><a href="#">June 2018</a></li>
								</ul>
							</div>
						</div>-->
						<div class="sidebar_section">
							<div class="sidebar_title">Categorias</div>
							<div class="sidebar_list">
								<ul>
                                    <li><a href="/ncnews/categoria/0">Séries</a></li>
									<li><a href="/ncnews/categoria/1">Louvor</a></li>
									<li><a href="/ncnews/categoria/2">Intersessão</a></li>
									<li><a href="/ncnews/categoria/3">Dança</a></li>
									<li><a href="/ncnews/categoria/4">Teatro</a></li>
									<li><a href="/ncnews/categoria/5">Introdução</a></li>
									<li><a href="/ncnews/categoria/6">Pastoral</a></li>
                                    <li><a href="/ncnews">Todas as postagens</a></li>
								</ul>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_title">Últimas Postagens</div>
							<div class="latest_news_list">
								<?php 
									$var = 0;
									foreach($posts as $post){

										if($var >= 3){
											break;
										}
										echo '
											<div class="latest_news d-flex flex-row align-items-start justify-content-start">
												<div class="latest_news_content">
													<div class="latest_news_date"><a href="#">'.$post->created_at->format('d/m/Y').'</a></div>
													<div class="latest_news_title"><a href="#">'.$post->titulo.'</a></div>
												</div>
											</div>
										';
										
										$var++;
									}
								?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>



@endsection

@section('js')
<script src="/js/blog.js"></script>
@endsection()