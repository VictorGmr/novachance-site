@extends('layouts.app')

@section('title')
Nova Chance - Elementos
@endsection

@section('defineActive')
	<li><a href="/home">INÍCIO</a></li>
	<li><a href="/sobre">QUEM SOMOS</a></li>
	<li><a href="/ncnews">NC NEWS</a></li>
	<li class="active"><a href="/aovivo">NC ON TV</a></li>
	<li><a href="/contato">CONTATO</a></li>
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
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/elements.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="home_content text-center">
					<div class="home_subtitle">Just us</div>
					<div class="home_title">Elements</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Elements -->

	<div class="elements">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Buttons -->
					<div class="buttons">
						<div class="elements_title">Buttons</div>
						<div class="buttons_container d-flex flex-row align-items-start justify-content-start flex-wrap">
							<div class="button button_1 trans_200"><a href="#">Send Message</a></div>
							<div class="button button_2 trans_200"><a href="#">Send Message</a></div>
							<div class="button button_3 trans_200"><a href="#">Send Message</a></div>
						</div>
					</div>

					<!-- Accordions & Tabs -->
					<div class="acc_tabs">
						<div class="elements_title">Accordions & Tabs</div>
						<div class="row acc_tabs_row">
							
							<!-- Accordions -->
							<div class="col-lg-6">
								<div class="accordions">

									<!-- Accordion -->
									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center"><div>Pellentesque lobortis neque non sem dapibus, non rutrum</div></div>
										<div class="accordion_panel">
											<div>
												<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec.</p>
											</div>
										</div>
									</div>
									
									<!-- Accordion -->
									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center"><div>Lobortis neque non sem dapibus, non rutrum dolor pretium</div></div>
										<div class="accordion_panel">
											<div>
												<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec.</p>
											</div>
										</div>
									</div>

									<!-- Accordion -->
									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center active"><div>Pellentesque lobortis neque non sem dapibus, non rutrum</div></div>
										<div class="accordion_panel">
											<div>
												<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec.</p>
											</div>
										</div>
									</div>

								</div>
							</div>

							<!-- Tabs -->
							<div class="col-lg-6 tabs_col">
								<div class="tabs">
									<div class="tabs_container">
										<div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap">
											<div class="tab">Lorem ipsum</div>
											<div class="tab">Maecenas ornare</div>
											<div class="tab active">Lobortis ultrices</div>
										</div>
										<div class="tab_panels">
											<div class="tab_panel">
												<div class="tab_panel_content">
													<div class="tab_text">
														<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec.</p>
													</div>
												</div>
											</div>
											<div class="tab_panel">
												<div class="tab_panel_content">
													<div class="tab_text">
														<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec.</p>
													</div>
												</div>
											</div>
											<div class="tab_panel active">
												<div class="tab_panel_content">
													<div class="tab_text">
														<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Loaders -->
					<div class="loaders">
						<div class="elements_title">Loaders</div>
						<div class="row loaders_row">

							<!-- Loader -->
							<div class="col-xl-3 col-md-6 loader_col">
								<!-- Loader -->
								<div class="loader_container text-center">
									<div class="loader text-center" data-perc="0.90"></div>
									<div class="loader_content">
										<div class="loader_title">Live Music</div>
									</div>
								</div>
							</div>

							<!-- Loader -->
							<div class="col-xl-3 col-md-6 loader_col">
								<!-- Loader -->
								<div class="loader_container text-center">
									<div class="loader text-center" data-perc="0.80"></div>
									<div class="loader_content">
										<div class="loader_title">Fans</div>
									</div>
								</div>
							</div>

							<!-- Loader -->
							<div class="col-xl-3 col-md-6 loader_col">
								<!-- Loader -->
								<div class="loader_container text-center">
									<div class="loader text-center" data-perc="1.00"></div>
									<div class="loader_content">
										<div class="loader_title">Good Music</div>
									</div>
								</div>
							</div>

							<!-- Loader -->
							<div class="col-xl-3 col-md-6 loader_col">
								<!-- Loader -->
								<div class="loader_container text-center">
									<div class="loader text-center" data-perc="0.75"></div>
									<div class="loader_content">
										<div class="loader_title">Crazy</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- Milestones -->
					<div class="milestones">
						<div class="elements_title">Milestones</div>
						<div class="row milestones_row">
					
							<!-- Milestone -->
							<div class="col-xl-3 col-md-6 milestone_col">
								<div class="milestone d-flex flex-row align-items-center justify-content-start">
									<div class="milestone_icon"><img src="/images/icon_1.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="298" data-sign-after="k">0</div>
										<div class="milestone_text">Albums sold</div>
									</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="col-xl-3 col-md-6 milestone_col">
								<div class="milestone d-flex flex-row align-items-center justify-content-start">
									<div class="milestone_icon"><img src="/images/icon_2.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="183">0</div>
										<div class="milestone_text">Live Concerts</div>
									</div>
								</div>
							</div>

							<!-- Milestone -->
							<div class="col-xl-3 col-md-6 milestone_col">
								<div class="milestone d-flex flex-row align-items-center justify-content-start">
									<div class="milestone_icon"><img src="/images/icon_3.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="37">0</div>
										<div class="milestone_text">Awards won</div>
									</div>
								</div>
							</div>

							<!-- Milestone -->
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

					<!-- Icon Boxes -->
					<div class="icon_boxes">
						<div class="elements_title">Icon Boxes</div>
						<div class="row icon_boxes_row">
							
							<!-- Icon Box -->
							<div class="col-lg-4">
								<div class="icon_box">
									<div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
										<div class="ib_icon"><img src="/images/icon_1.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
										<div class="ib_title">Live Music</div>
									</div>
									<div class="ib_text">
										<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin.</p>
									</div>
								</div>
							</div>

							<!-- Icon Box -->
							<div class="col-lg-4">
								<div class="icon_box">
									<div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
										<div class="ib_icon"><img src="/images/icon_2.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
										<div class="ib_title">Many Awards</div>
									</div>
									<div class="ib_text">
										<p>Vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin.</p>
									</div>
								</div>
							</div>

							<!-- Icon Box -->
							<div class="col-lg-4">
								<div class="icon_box">
									<div class="ib_title_container d-flex flex-row align-items-center justify-content-start">
										<div class="ib_icon"><img src="/images/icon_3.svg" alt="https://www.flaticon.com/authors/smashicons"></div>
										<div class="ib_title">New Singles</div>
									</div>
									<div class="ib_text">
										<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin.</p>
									</div>
								</div>
							</div>

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