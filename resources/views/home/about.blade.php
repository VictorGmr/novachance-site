@extends('layouts.app')

@section('title')
Nova Chance - Sobre
@endsection

@section('defineActive')
	<li><a href="/home">INÍCIO</a></li>
	<li class="active"><a href="/sobre">QUEM SOMOS</a></li>
	<li><a href="/ncnews">NC NEWS</a></li>
	<li><a href="/aovivo">NC ON TV</a></li>
@endsection()

@section('css')
	<link rel="stylesheet" type="text/css" href="/styles/about.css">
	<link rel="stylesheet" type="text/css" href="/styles/about_responsive.css">
@endsection()

@section('content')	

	<!-- Home -->

	<div class="home">
		<div class="home_inner">
			<!-- Image artist: https://unsplash.com/@yoannboyer -->
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/leaf.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="home_content text-center">
					<div class="home_subtitle">NOVA CHANCE</div>
					<div class="home_title">QUEM SOMOS</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- Artist -->

	<div class="artist" style="margin-top:50px;">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/nc2.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">

				<!-- Artist Content -->
				<div class="col-lg-7 offset-lg-5">
					<div class="artist_content">
						<div class="section_title_container">
							<!--<div class="section_subtitle">NOVA CHANCE</div>-->
							<div class="section_title"><h1>IGREJA NOVA CHANCE</h1></div>
						</div>
						<div class="artist_text">
							<p>A Igreja Internacional Nova Chance tem 19 anos de trabalho na cidade de Palmas, é presidida pelos Apóstolos Sérgio Paulo e Késia Guimarães.</p>
							<p>Além dos cultos de celebração nos domingos às 10 horas e às 18h30, temos o culto da família, nas terça as 20h. Aos sábados as 18h, o culto de adolescentes - re9 teen e as 19:30h, o de jovens - re9 jovem. 
Comportamos de sala para crianças de 2 a 12 anos, onde acontece os cultos da Rede de crianças SuperJoy paralelamente ao dos adultos. Você que é mamãe e papai de Crianças de 0 a 2 anos temos um berçário equipado pra você acompanhar as programações com todo o conforto.</p>
							<p>Como igreja, celebramos o ano da viva esperança, onde temos crescido em maturidade e com o coração cheio de gratidão, rendendo adoração ao Senhor pelos feitos dEle entre nós.</p>
							<p>"Se pela transgressão de um só a morte reinou por meio dele, muito mais aqueles que recebem de Deus a imensa provisão da graça e a dádiva da justiça reinarão em vida por um só, Jesus Cristo." Romanos 5:17</p>
							<p>Apóstolo Sérgio Paulo.</p>
							<p>2020- Ano da Esperança</p>
						</div>


						<!-- MUSIC PLAYER
						<div class="single_player_container d-flex flex-column align-items-start justify-content-center">
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
						</div>-->


					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Discs 

	<div class="discs">
		<div class="container">
			<div class="row discs_row">
				
				 Disc 
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="single.html">
							<div class="disc_image"><img src="/images/disc_1.jpg" alt="https://unsplash.com/@tanelah"></div>
							<div class="disc_container">
								<div>
									<div class="disc_content_1">
										<div class="disc_title">Mixtape</div>
										<div class="disc_subtitle">Music For the People</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				 Disc 
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="single.html">
							<div class="disc_image"><img src="/images/disc_2.jpg" alt="https://unsplash.com/@kasperrasmussen"></div>
							<div class="disc_container">
								<div>
									<div class="disc_content_2 d-flex flex-column align-items-center justify-content-center">
										<div>
											<div class="disc_title">Mixtape</div>
											<div class="disc_subtitle">the world is ours</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				 Disc 
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="single.html">
							<div class="disc_image"><img src="/images/disc_3.jpg" alt="https://unsplash.com/@photones11"></div>
							<div class="disc_container">
								<div>
									<div class="disc_content_3">
										<div>
											<div class="disc_title">Mixtape</div>
											<div class="disc_subtitle">Singles</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				 Disc 
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="single.html">
							<div class="disc_image"><img src="/images/disc_4.jpg" alt="https://unsplash.com/@rexcuando"></div>
							<div class="disc_container">
								<div>
									<div class="disc_content_4 d-flex flex-column align-items-start justify-content-end">
										<div class="text-left">
											<div class="disc_title">Mixtape</div>
											<div class="disc_subtitle">1983</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				 Disc 
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="single.html">
							<div class="disc_image"><img src="/images/disc_5.jpg" alt="https://unsplash.com/@alicemoore"></div>
							<div class="disc_container">
								<div>
									<div class="disc_content_5">
										<div class="disc_title">Mixtape</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				 Disc 
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="single.html">
							<div class="disc_image"><img src="/images/disc_6.jpg" alt="https://unsplash.com/@arstyy"></div>
							<div class="disc_container">
								<div>
									<div class="disc_content_6">
										<div class="disc_title">Mixtape</div>
										<div class="disc_subtitle">Music For the People</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	 Milestones 

	<div class="milestones">
		<div class="milestones_container">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/milestones.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row milestones_row">
					
					 Milestone 
					<div class="col-xl-3 col-md-6 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon"><img src="/images/icon_1.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="298" data-sign-after="k">0</div>
								<div class="milestone_text">Albums sold</div>
							</div>
						</div>
					</div>

					 Milestone 
					<div class="col-xl-3 col-md-6 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon"><img src="/images/icon_2.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="183">0</div>
								<div class="milestone_text">Live Concerts</div>
							</div>
						</div>
					</div>

					 Milestone 
					<div class="col-xl-3 col-md-6 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon"><img src="/images/icon_3.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="37">0</div>
								<div class="milestone_text">Awards won</div>
							</div>
						</div>
					</div>

					 Milestone 
					<div class="col-xl-3 col-md-6 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<div class="milestone_icon"><img src="/images/icon_4.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="14">0</div>
								<div class="milestone_text">New Singles</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>-->


@endsection

@section('js')
<script src="/js/about.js"></script>
@endsection()
