@extends('layouts.app')

@section('title')
Nova Chance - Login
@endsection()

@section('defineActive')
	<li><a href="/home">INÍCIO</a></li>
	<li><a href="/sobre">QUEM SOMOS</a></li>
	<li><a href="/ncnews">NC NEWS</a></li>
	<li><a href="/aovivo">CULTO AO VIVO</a></li>
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
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="/images/contact.jpg" data-speed="0.8"></div>
			<div class="home_container">
				<div class="home_content text-center">
					<div class="home_subtitle">Nova Chance</div>
					<div class="home_title">Login</div>
				</div>
			</div>
		</div>
    </div>
    
    <!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Form -->
				<div class="col-lg-12">
					<div class="contact_form_container" style="max-width=200%;text-align:center;position:relative;">
						<div class="contact_title">Entre com seus dados:</div>
						<form action="{{ route('login') }}" method="POST" class="contact_form" id="contact_form">
                            @csrf

                            <div>
                                <input type="email" style="width:100%;" class="contact_input @error('email') is-invalid @enderror" name="email" placeholder="E-mail" autocomplete="email" required="required" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <input type="password" style="width:100%;" class="contact_input @error('password') is-invalid @enderror" name="password" placeholder="Senha" required="required">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                                <!--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>-->
                                
                            </div>
							
                            <div style="text-align:center;">
                                <button style="display:inline-block;" type="submit"class="contact_button">Entrar</button>
                                
                                <!--@if (Route::has('password.request'))
                                    <a style="display:inline-block;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif-->
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
    
                
@endsection

@section('js')
<script src="/js/contact.js"></script>
@endsection()
