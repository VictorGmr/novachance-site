@extends('layouts.app')

@section('title')
Nova Chance
@endsection

@section('defineActive')
	<li class="active"><a href="/home">INÍCIO</a></li>
	<li><a href="/sobre">QUEM SOMOS</a></li>
	<li><a href="/ncnews">NC NEWS</a></li>
	<li><a href="/aovivo">CULTO AO VIVO</a></li>
	<li><a href="/contato">CONTATO</a></li>
@endsection()

@section('css')
	<link rel="stylesheet" type="text/css" href="/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="/styles/responsive.css">
@endsection()


@section('content')
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(/images/index.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_subtitle">Reinamos em vida</div>
								<div class="home_title"><h1>NOVA CHANCE</h1></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(/images/nc_capa.png)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_link" style="top: 100px;"><a href="/aovivo">NC AO VIVO</a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide
				<div class="owl-item">
					<div class="background_image" style="background-image:url(/images/index.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<div class="home_content text-center">
								<div class="home_subtitle">New single release</div>
								<div class="home_title"><h1>Love is all around</h1></div>
								<div class="home_link"><a href="#">Listen on Soundcloud</a></div>
							</div>
						</div>
					</div>
				</div> -->

			</div>
		</div>
	</div>


	<!-- Artist -->

	<div class="artist" style="margin-top:100px;">
		<div class="container">
			<div class="row">

				<!-- Artist Image -->
				<div class="col-lg-4 artist_image_col">
					<div class="artist_image">
						<img src="/images/ap.jpg" alt="">
					</div>
				</div>

				<!-- Artist Content -->
				<div class="col-lg-7 offset-lg-1">
					<div class="artist_content">
						<div class="section_title_container">
							<div class="section_subtitle">Ap.</div>
							<div class="section_title"><h1>Sérgio Paulo e Késia Guimarães</h1></div>
						</div>
						<div class="artist_text">
							<p> In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
							<p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet. Mauris dapibus justo ut feugiat malesuada. Fusce ultricies ante tortor, non vestibulum est feugiat ut.</p>
						</div>
						<div class="artist_sig"><img src="/images/sig.png" alt=""></div>
						<!-- PLAYER AUDIO <div class="single_player_container d-flex flex-column align-items-start justify-content-center">
							<div class="single_player">
								<div id="jplayer_2" class="jp-jplayer"></div>
								<div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
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
						</div> -->
					</div>
				</div>

			</div>
		</div>
	</div>
	

	<!-- Shows -->

	<div class="shows">
		<div class="container">
			<div class="row" style="z-index:10;">
				<div class="col">
					<div class="section_title_container">
						<div class="section_title"><h1>CELEBRAÇÕES</h1></div>
						<div class="section_subtitle">Venha Celebrar Conosco</div>
					</div>
				</div>
			</div>
			<div class="row shows_row">
				
				<!-- Shows List -->
				<div class="col-lg-8 order-lg-1 order-2 shows_list_col">
					<div class="shows_list_container">
						<ul class="shows_list">

							<!-- Show -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div><div class="show_date">DOM</div></div>
								<div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
									<div class="show_name"><a href="#">Culto de Celebração</a></div>
									<div class="show_location">10:00 e 18:30</div>
								</div>
								<!--<div class="ml-auto"><div class="show_shop trans_200"><a href="#">Buy Tickets</a></div></div>-->
							</li>

							<!-- Show -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div><div class="show_date">SEG</div></div>
								<div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
									<div class="show_name"><a href="#">Culto Resgate da Alma</a></div>
									<div class="show_location">20:00</div>
								</div>
							</li>

							<!-- Show -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div><div class="show_date">TER</div></div>
								<div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
									<div class="show_name"><a href="#">Rede da Família</a></div>
									<div class="show_location">20:00</div>
								</div>
							</li>

							<!-- Show -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div><div class="show_date">QUA</div></div>
								<div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
									<div class="show_name"><a href="#">Tarde da Benção</a></div>
									<div class="show_location">16:00</div>
								</div>
							</li>

							<!-- Show -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div><div class="show_date">SEX</div></div>
								<div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
									<div class="show_name"><a href="#">RE9 Teen</a></div>
									<div class="show_location">19:30</div>
								</div>
								
							</li>
							<!-- Show -->
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div><div class="show_date">SAB</div></div>
								<div class="show_info d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-start justify-content-center">
									<div class="show_name"><a href="#">RE9 Jovem</a></div>
									<div class="show_location">19:30</div>
								</div>
							</li>

						</ul>
					</div>
				</div>

				<!-- Shows Image -->
				<div class="col-lg-4 order-lg-2 order-1">
					<div class="shows_image">
						<div class="image_overlay"></div>
						<img src="/images/nc3.png" alt="https://unsplash.com/@anthonydelanoix">
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Extra -->

	<div class="extra" style="margin-top:100px;">
		<div class="extra_container">
			<div class="background_image" style="background-image:url(/images/extra.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="extra_content d-flex flex-column align-items-start justify-content-center">
							<div class="extra_title"><h1>Voluntariado</h1></div>
							<div class="extra_text">
								<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum</p>
							</div>
							<div class="extra_button"><a href="/contato">Quero ser um voluntário</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>



@endsection

@section('js')
<script src="/js/custom.js"></script>
@endsection()
